<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * payment show
     * @param string $orderId
     * @return void
     */
    public function show(string $orderId)
    {
        $paymentId = uniqid();
        dd($paymentId);
        // TODO return to ths payment page
    }
}
