@extends('admin.layouts.app')

@section('content')
<section>
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Order Details</h2>
                        <a href="{{ route('admin.orders.index') }}" class="main-btn primary-btn btn-hover btn-sm">
                            <i class="lni lni-arrow-left mr-5"></i> Back To Orders
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.orders.index') }}">All Orders</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Order #{{ $order->id }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="invoice-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="invoice-card card-style mb-30">
                        <div class="invoice-header">
                            <div class="invoice-for">
                                <h2 class="mb-10">Order #{{ $order->id }}</h2>
                                <p class="text-sm">
                                    From {{ $order->email }}
                                </p>
                            </div>
                            <div class="invoice-date">
                                <p><span>Order Date:</span> {{ $order->order_date }}</p>
                                <p><span>Amount Paid:</span> ${{ number_format($order->total_amount, 2) }}</p>
                                <p><span>Order ID:</span> #{{ $order->id }}</p>
                                <p><span>Auth Code:</span> #{{ $authCode ?? '' }}</p>
                            </div>
                        </div>
                        <div class="invoice-address">
                            <div class="address-item">
                                <h5 class="text-bold">Placed by</h5>
                                <h1>{{ $order->user->first_name }} {{ $order->user->last_name }}</h1>
                                <p class="text-sm">
                                    Shipping Address: {{ $order->shipping_address }}
                                </p>
                                <p class="text-sm">
                                    Billing Address: {{ $order->billing_address }}
                                </p>
                                <p class="text-sm">
                                    <span class="text-medium">User #ID:</span>
                                    {{ $order->user_id }}
                                </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="invoice-table table">
                                <thead>
                                    <tr>
                                        <th class="service">
                                            <h6 class="text-sm text-medium">Product</h6>
                                        </th>
                                        <th class="desc">
                                            <h6 class="text-sm text-medium">Description(s)</h6>
                                        </th>
                                        <th class="qty">
                                            <h6 class="text-sm text-medium">Qty</h6>
                                        </th>
                                        <th class="qty">
                                            <h6 class="text-sm text-medium">Size</h6>
                                        </th>
                                        <th class="qty">
                                            <h6 class="text-sm text-medium">Auth Code</h6>
                                        </th>
                                        <th class="qty">
                                            <h6 class="text-sm text-medium">Unit Price</h6>
                                        </th>
                                        <th class="amount">
                                            <h6 class="text-sm text-medium">Line Price</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>
                                            <p class="text-sm">{{ $item->product->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">
                                                {{ Str::limit($item->product->description, 30) }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $item->quantity }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $item->size }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">#{{ $authCode ?? '' }}</p>
                                        </td>                                        
                                        <td>
                                            <p class="text-sm">${{ number_format($item->unit_price, 2) }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">${{ number_format($item->line_price, 2) }}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h6 class="text-sm text-medium">Subtotal</h6>
                                        </td>
                                        <td>
                                            <h6 class="text-sm text-bold">${{ number_format($order->sub_amount, 2) }}
                                            </h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h6 class="text-sm text-medium">Total Tax</h6>
                                        </td>
                                        <td>
                                            <h6 class="text-sm text-bold">
                                                ${{ number_format($order->pst + $order->gst + $order->hst, 2) }}</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h6 class="text-sm text-medium">Shipping Charge</h6>
                                        </td>
                                        <td>
                                            <h6 class="text-sm text-bold">Free</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h4>Total</h4>
                                        </td>
                                        <td>
                                            <h4>${{ number_format($order->total_amount, 2) }}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                            <div class="alert">
                                <p class="text-sm text-gray"> <span class="fw-bold"> Note:</span>
                                  All orders are final. 
                                  To maintain data integrity, order details may not be edited once placed.
                                  You may only update the <span class="fw-bold"> status </span> of the order.
                              </p>
                            </div>
                        </div>
                        <div class="invoice-action">
                            <ul class="d-flex flex-wrap align-items-center justify-content-center">
                                <li class="m-2">
                                    <a href="{{ route('admin.orders.index') }}"
                                        class="main-btn primary-btn-outline btn-hover">
                                        Back To Orders
                                    </a>
                                </li>
                                <li class="m-2">
                                    <a href="#" id="printOrderButton" class="main-btn primary-btn btn-hover">
                                        Print Order
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('printOrderButton').addEventListener('click', function(e) {
        e.preventDefault();
        window.print();
    });
</script>
@endsection