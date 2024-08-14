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
            'full_name' => $validated['full_name'] ?? User::find($validated['user_id'])->first_name . ' ' . User::find($validated['user_id'])->last_name,
            'provincial_tax_rate_id' => $validated['provincial_tax_rate_id'],
            'email' => $validated['email'],
            'pst' => $subAmount * $provincialTaxRate->pst_rate,
            'gst' => $subAmount * $provincialTaxRate->gst_rate,
            'hst' => $subAmount * $provincialTaxRate->hst_rate,
            'sub_amount' => $subAmount,
            'total_amount' => $totalAmount,
            'shipping_address' => $validated['shipping_address'],
            'billing_address' => $validated['billing_address'],
            'shipping_phone_number' => $validated['shipping_phone_number'],
            'billing_phone_number' => $validated['billing_phone_number'],
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'unit_price' => $product->price,
            'line_price' => $subAmount,
            'size' => $validated['size'],
        ]);

        $getuser = User::find($validated['user_id']);
        $getfullName = $getuser->first_name . ' ' . $getuser->last_name;
        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully for User: ' . $getfullName);
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
    
        return redirect()->route('admin.orders.index')->with('success', "Status for Order # $order->id was updated successfully");
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $orders = $this->getFilteredOrders($search);
        return view('admin.orders.index', ['orders' => $orders, 'search' => $search]);
    }

    private function getFilteredOrders($search = null)
    {
        $query = Order::with('user', 'provincialTaxRate');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('id', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orWhere('shipping_address', 'LIKE', "%{$search}%")
                ->orWhereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('first_name', 'LIKE', "%{$search}%")
                        ->orWhere('last_name', 'LIKE', "%{$search}%");
                });
            });
        }

        return $query->paginate(10);
    }
}