<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProvincialTaxRate;
use App\Http\Requests\Admin\StoreOrderRequest;
use App\Http\Requests\Admin\UpdateOrderRequest;
use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User; 
use App\Models\Category;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $orders = $this->getFilteredOrders($search);
        return view('admin.orders.index', ['orders' => $orders, 'search' => $search]);
    }

    public function create()
    {
        $provinces = ProvincialTaxRate::all();
        $products = Product::all();
        $sizes = Category::where('name', 'Size')->pluck('value', 'id');
        return view('admin.orders.create', compact('provinces', 'products', 'sizes'));
    }

    public function store(StoreOrderRequest $request)
    {
        $validated = $request->validated();
        
        $product = Product::findOrFail($validated['product_id']);
        $provincialTaxRate = ProvincialTaxRate::findOrFail($validated['provincial_tax_rate_id']);
        
        $subAmount = $product->price * $validated['quantity'];
        $totalAmount = $subAmount * (1 + $provincialTaxRate->total_tax_rate);
        
        $order = Order::create([
            'user_id' => $validated['user_id'],
            'provincial_tax_rate_id' => $validated['provincial_tax_rate_id'],
            'email' => $validated['email'],
            'pst' => $subAmount * $provincialTaxRate->pst_rate,
            'gst' => $subAmount * $provincialTaxRate->gst_rate,
            'hst' => $subAmount * $provincialTaxRate->hst_rate,
            'sub_amount' => $subAmount,
            'total_amount' => $totalAmount,
            'shipping_address' => $validated['shipping_address'],
            'billing_address' => $validated['billing_address'],
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'unit_price' => $product->price,
            'line_price' => $subAmount,
            'size' => $validated['size'],
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully');
    }

    public function show($id)
    {
        $order = Order::with('user')->findOrFail($id);
        $orderItems = OrderItem::where('order_id', $id)->with('product')->get();

        // Calculate tax details
        $province = ProvincialTaxRate::find($order->provincial_tax_rate_id);
        $pst = $order->pst;
        $gst = $order->gst;
        $hst = $order->hst;
        $subTotal = $orderItems->sum('line_price');
        $totalAmount = $order->total_amount;

        return view('admin.orders.show', compact('order', 'orderItems', 'province', 'pst', 'gst', 'hst', 'subTotal', 'totalAmount'));
    }

    public function edit(Order $order)
    {
        $provinces = ProvincialTaxRate::all();
        $province = ProvincialTaxRate::find($order->provincial_tax_rate_id);

        return view('admin.orders.edit', [
            'order' => $order,
            'provinces' => $provinces,
            'province' => $province
        ]);
    }
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $validated = $request->validated();
    
        // Update only the status
        $order->update([
            'status' => $validated['status'],
        ]);
    
        return redirect()->route('admin.orders.index')->with('success', 'Order status updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully');
    }


}