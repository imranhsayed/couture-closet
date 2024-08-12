@extends('layouts.app')

@section('content')
<section>
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Order Details</h2>
                        <a href="{{ route('user.profile') }}" class="main-btn primary-btn btn-hover">
                        <img src="/images/white-left.svg" alt="left" style=" width: 10px; height: auto;">
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

                        
                        <div class="invoice-action">
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