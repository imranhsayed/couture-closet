@extends('layouts.app')

@section('content')
<section class="hero py-6">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Order Confirmed</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
            <h1 class="hero-heading">Order Confirmed</h1>
            <div>
                <div role="alert" class="d-flex align-items-center alert alert-success" style="background-color: #6AC17D;">
                    <svg class="svg-icon w-3rem h-3rem svg-icon-light flex-shrink-0 me-3">
                        <use xlink:href="#checked-circle-1"></use>
                    </svg>
                    <span style="color: white;">Your Order is confirmed</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-6">
    <div class="container">
        <p class="lead">Thank you, <strong>{{$user->first_name}}</strong>. Your order is confirmed.</p>
        <p class="lead mb-5">Your order hasn't shipped yet but we will send you an email when it does.</p>
        <p class="mb-6"><a class="btn btn-outline-dark" style="background-color: #EFEBDF; color: #646464;" href="/order-details/{{$order->id}}">View your order</a></p>
        <div class="p-5 bg-gray-100" style="background-color: #F8F8F8;">
            <div class="row">
                <div class="col-6 col-lg-2 mb-5 mb-lg-0 d-flex flex-column">
                    <div class="text-sm text-uppercase text-muted mb-3">Order no.</div>
                    <span class="h5">{{$order->id}}</span>
                </div>
                <div class="col-6 col-lg-3 mb-5 mb-lg-0 d-flex flex-column">
                    <div class="text-sm text-uppercase text-muted mb-3">Cust. Name</div>
                    <span class="h5">{{$user->first_name}}</span>
                </div>
                <div class="col-6 col-lg-3 mb-5 mb-lg-0 d-flex flex-column">
                    <div class="text-sm text-uppercase text-muted mb-3">Date</div>
                    <span class="h5">{{ \Carbon\Carbon::parse($order->order_date)->format('M d, Y') }}</span>
                </div>
                <div class="col-6 col-lg-2 mb-5 mb-lg-0 d-flex flex-column">
                    <div class="text-sm text-uppercase text-muted mb-3">Total</div>
                    <span class="h5">{{$order->total_amount}}</span>
                </div>
                <div class="col-6 col-lg-2 mb-5 mb-lg-0 d-flex flex-column">
                    <div class="text-sm text-uppercase text-muted mb-3">Shipped</div>
                    <span class="h5">
                        @switch($order->status)
                            @case(1)
                                Pending
                                @break
                            @case(2)
                                Processing
                                @break
                            @case(3)
                                Shipped
                                @break
                            @case(4)
                                Delivered
                                @break
                            @default
                                Unknown
                        @endswitch
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
