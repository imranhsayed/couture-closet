<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProvincialTaxRate;
use App\Models\Transaction;
use Exception;
use Illuminate\Support\Facades\DB;
use Pagerange\Bx\_5bx;

// define 5BX credentials
define('BX_LOGIN_ID', '2257833');
define('BX_API_KEY', 'a88c8843898e4daad5646322ca06f22d');

class OrderController extends Controller
{
    public function showConfirmation(Orders $order)
    {
        $order = Orders::with('user')->findOrFail($order->id);
        return view('order-confirmation', ['order' => $order]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdersRequest $request)
    {
        try {
            DB::beginTransaction();
            //request is validated and save order info
            $requestParams = $request->all();
            // get it default tax rate id if its null
            $taxRateId = $requestParams['formData']['provincial_tax_rate_id'] ?? 1;
            $provincialTaxRate = ProvincialTaxRate::find($taxRateId);
            // calculate amount
            $amount = 0;
            $subAmount = 0;
            foreach ($requestParams['cartData']['products'] ?? [] as $product) {
                $srcProduct = Product::with('primaryImage')->find($product['productId']);
                $totalPrice = $srcProduct->price * $product['quantity'];
                $amount += $totalPrice;
                $pst = $provincialTaxRate->pst_rate * $totalPrice;
                $gst = $provincialTaxRate->gst_rate * $totalPrice;
                $hst = $provincialTaxRate->hst_rate * $totalPrice;

                $subAmount += $pst + $gst + $hst;
            }

            $billingAddress = $this->getFullAddress(
                $requestParams['formData']['street_billing'] ?? '',
                $requestParams['formData']['city_billing'] ?? '',
                $requestParams['formData']['zip_billing'] ?? '',
                $requestParams['formData']['state_billing'] ?? ''
            );
            $billingPhoneNumber = $requestParams['formData']['phonenumber_billing'];

            if (!$requestParams['formData']['show-shipping-address'] ?? '' == "on") {
                // shipping and billing are same address
                $shippingAddress = $this->getFullAddress(
                    $requestParams['formData']['street_shipping'] ?? '',
                    $requestParams['formData']['city_shipping'] ?? '',
                    $requestParams['formData']['zip_shipping'] ?? '',
                    $requestParams['formData']['state_shipping'] ?? ''
                );
                $shippingPhoneNumber = $requestParams['formData']['phonenumber_shipping'];
            } else {
                $shippingAddress = $billingAddress;
                $shippingPhoneNumber = $billingPhoneNumber;
            }

            $order = [
                'user_id' => \Auth::user()->id,
                'provincial_tax_rate_id' => $taxRateId,
                'full_name' => $requestParams['formData']['fullname'],
                'email' => $requestParams['formData']['emailaddress'],
                'pst' => $provincialTaxRate->pst_rate ?? 0,
                'gst' => $provincialTaxRate->gst_rate ?? 0,
                'hst' => $provincialTaxRate->hst_rate ?? 0,
                'sub_amount' => number_format($subAmount, 2),
                'total_amount' => number_format($amount * (1 + $provincialTaxRate->total_tax_rate), 2),
                'shipping_phone_number' => $shippingPhoneNumber,
                'shipping_address' => $shippingAddress,
                'billing_phone_number' => $billingPhoneNumber,
                'billing_address' => $billingAddress
            ];
            $order = Order::create($order);
            if ($order) {
                // create transaction
                $cardName = $requestParams['formData']['card_name'];
                $cardNumber = $requestParams['formData']['card_number'];
                $cardType = $requestParams['formData']['card_type'];
                $cvv = $requestParams['formData']['cvv'];
                $expiryDate = $requestParams['formData']['expiry_date'];

                $transactionConfirmed = $this->doTransaction($cardNumber, $cardType, $expiryDate, $cvv, $amount, $order->id);
                if (!$transactionConfirmed->success) {
                    DB::rollBack();
                    return response()->json($transactionConfirmed);
                }

                DB::commit();
                session()->flash('user.success', "Created an order successfully!");

                //go to order confirmed page
                $orderConfirmedUrl = route('order.confirmation', [ 'order' => $order->id ]);
                return response()->json(['success' => true, 'message' => $transactionConfirmed->message, 'order_confirm_url' => $orderConfirmedUrl]);
            } else {
                DB::rollBack();
                session()->flash('user.error', "Created an order failed!");
                return response()->json(['success' => false, 'message' => 'Save Order Error, Please contact Administrator!', 'order_confirm_url' => '']);
            }
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage(), 'order_confirm_url' => '']);
        }
    }

    /**
     * do transaction for order
     * @param string $cardNumber
     * @param string $cardType
     * @param int $expiryDate
     * @param int $cvv
     * @param float $amount
     * @param int $orderId
     * @return mixed
     */
    private function doTransaction(mixed $cardNumber, mixed $cardType, mixed $expiryDate, mixed $cvv, float $amount, int $orderId): mixed
    {
        $response = [
            'success' => false,
            'message' => ''
        ];

        try {
            $transaction = new _5bx(BX_LOGIN_ID, BX_API_KEY);
            $transaction->amount($amount);
            // https://docs.uwpace.ca/docs/tags/5bx/using-the-5bx-gateway-client
            $transaction->card_num($cardNumber); // credit card number
            $transaction->exp_date($expiryDate); // eg  1118
            $transaction->cvv($cvv); // card cvv number
            $transaction->ref_num($orderId); // your reference or invoice number
            $transaction->card_type($cardType); // card type
            $response = $transaction->authorize_and_capture(); // returns object
            if ($response->transaction_response->response_code == '1') {
                // Save transaction to database and Update order with transaction_id
                $transactionInfo = [
                    'order_id' => $orderId,
                    'transaction_id' => $response->transaction_response->trans_id,
                    'transaction_status' => $response->transaction_response->response_code,
                    'response' => $response->result_message,
                ];
                if (Transaction::create($transactionInfo))
                {
                    // Your transaction was authorized...
                    $response->success = true;
                    $response->message = 'Success! Authorization Code: ' . $response->transaction_response->auth_code;
                }
            } elseif (count(get_object_vars($response->transaction_response->errors)) > 0) {
                // response with specific errors
                $errors = '';
                foreach ($response->transaction_response->errors as $error) {
                    $errors .= $error . '<br />';
                }
                $response->success = false;
                $response->message = 'Failure!  Authorization errors: ' . $errors;
            } else {
                // Failure, but no specific errors
                $response->success = false;
                $response->message = 'Failure!  There was a problem processing your transaction';
            }
        } catch (Exception $e) {
            $response['success']['message'] = 'Failure!  There was a problem processing your transaction: ' . $e->getMessage();
        }
        return $response;
    }

    /**
     * create a full address
     * @param mixed $street_shipping
     * @param mixed $city_shipping
     * @param mixed $zip_shipping
     * @param mixed $state_shipping
     * @return string
     */
    private function getFullAddress(mixed $street_shipping, mixed $city_shipping, mixed $zip_shipping, mixed $state_shipping): string
    {
        $addressParts = array();

        if (!empty($street_shipping)) {
            $addressParts[] = trim($street_shipping);
        }
        if (!empty($city_shipping)) {
            $addressParts[] = trim($city_shipping);
        }
        if (!empty($state_shipping)) {
            $addressParts[] = trim($state_shipping);
        }
        if (!empty($zip_shipping)) {
            $addressParts[] = trim($zip_shipping);
        }

        // Join the parts with commas and return the full address
        return implode(', ', $addressParts);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {

        // Load the user related to the order
        $user = $order->user;


        // Pass order and user data to the view
        return view('order-confirmation', compact('order', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdersRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * Show the order details page.
     */
    public function orderDetails($id)
    {
        $order = auth()->user()->orders()->with(['orderItems.product'])->findOrFail($id);

        $orderItems = $order->orderItems;

        // Calculate tax details
        $province = ProvincialTaxRate::find($order->provincial_tax_rate_id);
        $pst = $order->pst;
        $gst = $order->gst;
        $hst = $order->hst;
        $subTotal = $orderItems->sum('line_price');
        $totalAmount = $order->total_amount;

        return view('order-details', compact('order', 'orderItems', 'province', 'pst', 'gst', 'hst', 'subTotal', 'totalAmount'));
    }

}
