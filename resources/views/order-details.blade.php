@extends('layouts.app')

@section('content')
<section class="container-fluid-px py-4 pt-5">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Order Details</h2>
                        <a href="{{ route('user.profile') }}" class="main-btn primary-btn btn-hover">
                        <img src="/images/white-left.svg" alt="left" style=" width: 10px; height: auto;" width="11" height="19">
                        Back To Profile
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user.profile') }}">Profile</a>
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
                                <p><span>Order Date:</span> {{ $order->created_at->format('Y-m-d') }}</p>
                                <p><span>Amount Paid:</span> ${{ number_format($order->total_amount, 2) }}</p>
                                <p><span>Order ID:</span> #{{ $order->id }}</p>
                            </div>
                        </div>
                        <div class="invoice-address">
                            <div class="address-item">
                                <h5 class="text-bold">Placed by</h5>
                                <h1>
                                    {{ $order->full_name }}
                                </h1>
                                <p class="text-sm">
                                    Shipping Address: {{ $order->shipping_address }}
                                </p>
                                <p class="text-sm">
                                    Billing Address: {{ $order->billing_address }}
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
                                            <h6 class="text-sm text-medium">Description</h6>
                                        </th>
                                        <th class="qty">
                                            <h6 class="text-sm text-medium">Qty</h6>
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
                                    @foreach($orderItems as $item)
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
                                        <td>
                                            <h6 class="text-sm text-medium">Subtotal</h6>
                                        </td>
                                        <td>
                                            <h6 class="text-sm text-bold">${{ number_format($subTotal, 2) }}</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h6 class="text-sm text-medium">Total Tax</h6>
                                        </td>
                                        <td>
                                            <h6 class="text-sm text-bold">
                                                ${{ number_format($pst + $gst + $hst, 2) }}</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <h4>Total</h4>
                                        </td>
                                        <td>
                                            <h4>${{ number_format($totalAmount, 2) }}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="invoice-action pt-5">
                            <ul class="d-flex flex-wrap align-items-center justify-content-center">
                                <li class="m-2">
                                    <a href="{{ route('user.profile') }}"
                                        class="main-btn primary-btn-outline btn-hover">
                                        Back To Profile
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