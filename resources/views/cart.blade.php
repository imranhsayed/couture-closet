@extends('layouts.app')

@section('content')
<section class="hero py-6">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0 ">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Shopping cart </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
            <h1 class="hero-heading">Shopping cart</h1>
			<div>
				<p class="lead">You have <span class="fw-bold">3</span> items in your cart.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <cc-cart>
	        Loading...
        </cc-cart>
    </div>
</section>

@endsection
