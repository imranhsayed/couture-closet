<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Product;
use App\Models\ProvincialTaxRate;

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
        //request is validated and save order info
        $requestParams = $request->all();
        $taxRateId = $requestParams['taxRateId'];
        $provincialTaxRate = ProvincialTaxRate::find($taxRateId);
        // calculate amount
        $amount = 0;
        $subAmount = 0;
        foreach ( $requestParams['cartData']['products'] ?? [] as $product ) {
            $srcProduct = Product::with( 'primaryImage' )->find( $product['productId'] );
            $totalPrice = $srcProduct->price * $product['quantity'];
            $amount += $totalPrice;
            $pst = $provincialTaxRate->pst_rate * $totalPrice;
            $gst = $provincialTaxRate->gst_rate * $totalPrice;
            $hst = $provincialTaxRate->hst_rate * $totalPrice;

            $subAmount += $pst + $gst + $hst;
        }

        $shippingAddress = $this->getFullAddress(
            $requestParams['formData']['street_shipping'] ?? '',
            $requestParams['formData']['city_shipping'] ?? '',
            $requestParams['formData']['zip_shipping'] ?? '',
            $requestParams['formData']['state_shipping'] ?? ''
        );

        if (!$requestParams['formData']['show-shipping-address'] ?? '' == "on") {
            // shipping and billing are same address
            $billingAddress = $this->getFullAddress(
                $requestParams['formData']['street_billing'] ?? '',
                $requestParams['formData']['city_billing'] ?? '',
                $requestParams['formData']['zip_billing'] ?? '',
                $requestParams['formData']['state_billing'] ?? ''
            );
        } else {
            $billingAddress = $shippingAddress;
        }

        $order = [
            'user_id' => \Auth::user()->id,
            'provincial_tax_rate_id' => $taxRateId,
            'email' => $requestParams['formData']['emailaddress'],
            'pst' => $provincialTaxRate->pst_rate ?? 0,
            'gst' => $provincialTaxRate->gst_rate ?? 0,
            'hst' => $provincialTaxRate->hst_rate ?? 0,
            'sub_amount' => number_format($subAmount, 2),
            'total_amount' => number_format($amount * (1 + $provincialTaxRate->total_tax_rate), 2),
            'shipping_address' => $shippingAddress,
            'billing_address' => $billingAddress
        ];

        if (Order::create($order)) {
            session()->flash('user.success', "Created an order successfully!");
        } else {
            session()->flash('user.error', "Created an order failed!");
        }

        return response()->json(['success' => true]);
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
        echo $order;
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
    public function orderDetails(Order $order)
    {
        // Load the order along with its items and the related products
        $order = Order::with('orderItems.product')->findOrFail($order->id);

        // Return the order details view with the order data
        return view('order-details', ['order' => $order]);
    }

}
