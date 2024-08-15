@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" style="background-color: #EFEBDF;">
				<img src="/images/menu_slider_image1.png" alt="Slide 1" class="d-block w-100" style="height: auto; max-height: 512px; width: auto; max-width: 100%; object-fit: contain;transform: translate(20%, 10%);">
				<div class="container">
					<div class="carousel-caption text-start" style="background-color: rgb(239, 235, 223, 0.7); padding: 20px; border-radius: 10px; color: black; max-width: 600px; left: 15%; bottom: initial; top: 50%; transform: translateY(-50%); right: initial; ">
						<h1 style="font-size: 36px; font-weight: bold;">Elevate Your Style with Timeless Fashion</h1>
						<p style="font-size: 20px;">Crafting Couture for Every Occasion</p>
						<p><a class="main-btn primary-btn btn-hover text-center text-decoration-none text-uppercase mt-2" href="/shop" style="background-color: black; border-color: black; letter-spacing: .1rem;">Visit Our Shop</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item" style="background-color: #EFEBDF;">
				<img src="/images/slide2.png" alt="Slide 2" class="d-block w-100" style="height: auto; max-height: 512px; width: auto; max-width: 100%; object-fit: contain;transform: translate(20%, 10%);">
				<div class="container">
					<div class="carousel-caption" style="background-color: rgb(239, 235, 223, 0.7); padding: 20px; border-radius: 10px; color: black; max-width: 600px; left: 15%; bottom: initial; top: 50%; transform: translateY(-50%); right: initial;text-align: left;">
						<h1 style="font-size: 36px; font-weight: bold;">Discover the Latest Trends</h1>
						<p style="font-size: 20px;">Explore our wide collection of new arrivals.</p>
						<p><a class="main-btn primary-btn btn-hover text-center text-decoration-none text-uppercase mt-2" href="/shop?category=Women" style="background-color: black; border-color: black; letter-spacing: .1rem;">Shop Women</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item" style="background-color: #EFEBDF;">
				<img src="/images/slide3.png" alt="Slide 3" class="d-block w-100" style="height: auto; max-height: 512px; width: auto; max-width: 100%; object-fit: contain;transform: translate(20%, 10%);">
				<div class="container">
					<div class="carousel-caption" style="background-color: rgb(239, 235, 223, 0.7); padding: 20px; border-radius: 10px; color: black; max-width: 600px; left: 15%; bottom: initial; top: 50%; transform: translateY(-50%); right: initial; text-align: left;">
						<h1 style="font-size: 36px; font-weight: bold;">Exclusive Deals This Season</h1>
						<p style="font-size: 20px;">Unwrap the gift of fashion with our exclusive seasonal offers.</p>
						<p><a class="main-btn primary-btn btn-hover text-center text-decoration-none text-uppercase mt-2" href="/shop?category=Men" style="background-color: black; border-color: black; letter-spacing: .1rem;">Shop Men's Wear</a></p>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="container">
			<div class="container py-6">
				<div class="row">
					<div class="col-sm-6 mb-5 mb-sm-0">
						<div class="card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center"><img class="card-img img-scale" src="{{ asset('images/mens.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-center">
								<div class="w-100 py-3">
									<h2 class="display-3 fw-bold mb-0" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Men</h2><a class="stretched-link" href="/shop?category=Men"><span class="sr-only">See </span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 mb-5 mb-sm-0">
						<div class="card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center"><img class="card-img img-scale" src="{{ asset('images/women.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-center">
								<div class="w-100 py-3">
									<h2 class="display-3 fw-bold mb-0" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Women</h2><a class="stretched-link" href="/shop?category=Women"><span class="sr-only">See </span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		{{--Categories--}}
		<div class="row">
			<div class="col-lg-10 col-xl-8 text-center mx-auto">
				<h2 class="display-3 mb-5">Featured Collection</h2>
				<p class="lead text-muted mb-6">Each piece is curated to provide you with the best of seasonal fashion trends and timeless elegance. Refresh your wardrobe with our newest selections.</p>
			</div>
		</div>

		<div class="row justify-content-between align-items-center mb-4">
			<div class="col-12 col-sm">
				<ul class="list-inline text-center text-sm-start mb-3 mb-sm-0">
					<li class="list-inline-item"><a class="text-dark" href="/shop">All Products </a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="/shop?category=Women">Women</a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="/shop?category=Men">Men</a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="/shop?category=Kids">Kids</a></li>
				</ul>
			</div>
			<div class="col-12 col-sm-auto text-center"><a class="btn btn-link px-0" href="/shop">All products</a></div>
		</div>

		@if( $products->isEmpty() )
			<p>No products found.</p>
		@else
		<div class="row">
			@foreach( $products as $product )
				<!-- product-->
				<div class="col-lg-3 col-md-4">
					<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
						<div class="product-image mb-md-3">
							<a href="/shop/{{ $product->id }}">
								<div class="product-swap-image">
									<img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450" class="img-fluid product-swap-image-front" src="{{ $product->images[0]['image_url'] ?? '' }}" alt="product">
									<img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450" class="img-fluid" src="{{ $product->images[1]['image_url'] ?? $product->images[0]['image_url'] ?? '' }}" alt="product">
								</div>
							</a>
							<div class="product-hover-overlay"><div class="text-dark text-sm">
									<svg class="d-none svg-icon text-primary-hover svg-icon-heavy d-lg-inline">
										<use xlink:href="#retail-bag-1"> </use>
									</svg>
									@php $size = ''; @endphp
									@foreach( $product->categories as $category )
										@php $size = $category->value @endphp
									@endforeach
									<x-add-to-cart-button product_id="{{ $product->id }}" quantity="1" size="{{ $size }}" />
								</div>
							</div>
						</div>
						<div class="position-relative">
							<h3 class="text-base mb-1">
								<a class="text-dark" href="/shop?id={{ $product->id }}">
									{{ $product->name }}
								</a>
							</h3>
							<p class="text-gray-600 text-sm">
								<span>${{ $product->price }}</span>
							</p>
						</div>
					</div>
				</div>
				<!-- /product   -->
			@endforeach
		</div>
		@endif
	</div>

@endsection
