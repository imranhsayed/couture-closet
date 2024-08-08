@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0 ">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Shopping cart </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
            <h1 class="hero-heading">Shopping cart</h1>
			<div>
				<p class="lead cart-items-count">You have <span class="fw-bold">3</span> items in your cart.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <cc-cart>
	        <div class="row mb-5">
		        <div class="col-lg-8 pe-xl-5">
			        <div class="cart mb-5">
				        <cc-cart-items class="cart-body cart-items">
					        Loading...
				        </cc-cart-items>
			        </div>
			        <div class="d-flex justify-content-between flex-column flex-lg-row mb-5 mb-lg-0">
				        <a class="btn btn-link" href="/shop">
					        <img src="pictures/black-left.svg" alt="Right Icon" style="width: 16px; height: 16px;">
					        Continue Shopping
				        </a>
			        </div>
		        </div>
		        <div class="col-lg-4">
			        <div class="card mb-5 bg-light shadow-none">
				        <div class="card-header bg-dark shadow-none">
					        <h6 class="mb-0 text-white">Order Summary</h6>
				        </div>
				        <div class="card-body py-4">
					        <table class="table card-text">
						        <tbody class="cart-summary-items">
									{{--Items will be added by JavaScript here--}}
						        </tbody>
					        </table>
					        <p class="text-muted text-sm" style="border-top: 1px solid #dee2e6; padding-top: 16px;">Proceed to checkout to calculate <span class="fw-bold">Shipping</span> and <span class="fw-bold">taxes</span></p>
				        </div>
				        <div class="card-footer overflow-hidden p-0">
					        <div class="d-grid"> <a class="btn btn-primary py-3 text-white" href="/checkout">
							        Proceed to Checkout
							        <img src="/pictures/white-right.svg" alt="Right Icon" class="ms-2"
							             style="width: 16px; height: 16px;">
						        </a>
					        </div>
				        </div>
			        </div>
		        </div>
	        </div>
        </cc-cart>
    </div>
</section>

@endsection
