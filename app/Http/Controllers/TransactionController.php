<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Pagerange\Bx\_5bx;

// define 5BX credentials
define('BX_LOGIN_ID', '2257833');
define('BX_API_KEY', 'a88c8843898e4daad5646322ca06f22d');

class TransactionController extends Controller
{
    /**
     * process confirmed order and to do the transaction
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        try {
            // TODO payment id
            $paymentId = 1;
            $transaction = new _5bx(BX_LOGIN_ID, BX_API_KEY);
            $amount = 10;
            $transaction->amount($amount);
            // https://docs.uwpace.ca/docs/tags/5bx/using-the-5bx-gateway-client
            $ccNum = '4111111111111111';
            $transaction->card_num($ccNum); // credit card number
            $expDate = 1118;
            $transaction->exp_date($expDate); // eg  1118
            $cvv = 301;
            $transaction->cvv($cvv); // card cvv number
            // TODO order id
            $orderId = 1;
            $transaction->ref_num($orderId); // your reference or invoice number
            $cardType = 'visa';
            $transaction->card_type($cardType); // card type
            $response = $transaction->authorize_and_capture(); // returns object

            dd($response);
            if ($response->transaction_response->response_code == '1') {
                // Your transaction was authorized...
                session()->flash('success', 'Success! Authorization Code: ' . $response->transaction_response->auth_code);
                // Save transaction to database and Update order with transaction_id
                // redirect to thank you/invoice page
            } elseif(count($response->transaction_response->errors)) {
                // response with specific errors
                $errors = '';
                foreach($response->transaction_response->errors as $error) {
                    $errors .= $error . '<br />';
                }
                session()->flash('error', 'Failure!  Authorization errors: ' . $errors);
            } else {
                // Failure, but no specific errors
                session()->flash('error', 'Failure!  There was a problem processing your transaction');
            }
            // Redirect back to payment form with errors
            return back();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
