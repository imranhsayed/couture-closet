<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;

class OrderController extends Controller
{
    public function showConfirmation(Orders $order)
    {
        $order = Orders::with('user')->findOrFail($orderId);
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
        //
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
