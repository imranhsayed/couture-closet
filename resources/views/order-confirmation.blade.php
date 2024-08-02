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
@endsection
