@extends('layouts.app')

@section('content')
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item">
				<img src="/images/menu_slider_image1.png" alt="First slide" class="d-block w-100" style="aspect-ratio: 4/3; height: 512px; object-fit: cover;">
				<div class="container">
					<div class="carousel-caption text-start">
						<h1>Example headline.</h1>
						<p>Some representative placeholder content for the first slide of the carousel.</p>
						<p><a class="btn btn-lg btn-primary" href="/login">Sign up today</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
			<img src="/images/beige_cardigan_1.jpg" alt="First slide" class="d-block w-100" style="aspect-ratio: 4/3; height: 512px; object-fit: cover;">
				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Some representative placeholder content for the second slide of the carousel.</p>
						<p><a class="btn btn-lg btn-primary" href="/about">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item active">
			<img src="/images/beige_cardigan_1.jpg" alt="First slide" class="d-block w-100" style="aspect-ratio: 4/3; height: 512px; object-fit: cover;">
				<div class="container">
					<div class="carousel-caption text-end">
						<h1>One more for good measure.</h1>
						<p>Some representative placeholder content for the third slide of this carousel.</p>
						<p><a class="btn btn-lg btn-primary" href="/shop">Browse gallery</a></p>
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
									<h2 class="display-3 fw-bold mb-0" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Men</h2><a class="stretched-link" href="category-full.html"><span class="sr-only">See </span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 mb-5 mb-sm-0">
						<div class="card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center"><img class="card-img img-scale" src="{{ asset('images/women.jpg') }}" alt="Card image">
							<div class="card-img-overlay d-flex align-items-center">
								<div class="w-100 py-3">
									<h2 class="display-3 fw-bold mb-0" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Women</h2><a class="stretched-link" href="category-full.html"><span class="sr-only">See </span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		{{--Categories--}}
		<div class="row">
			<div class="col-lg-10 col-xl-8 text-center mx-auto">
				<h2 class="display-3 mb-5">New Arrivals</h2>
				<p class="lead text-muted mb-6">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
			</div>
		</div>

		<div class="row justify-content-between align-items-center mb-4">
			<div class="col-12 col-sm">
				<ul class="list-inline text-center text-sm-start mb-3 mb-sm-0">
					<li class="list-inline-item"><a class="text-dark" href="/shop">All Products </a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Clothing </a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Bags</a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Shoes</a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Accessories</a></li>
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
									<img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450" class="img-fluid" src="{{ $product->images[1]['image_url'] ?? $product->images[0]['image_url'] }}" alt="product">
								</div>
							</a>
							<div class="product-hover-overlay"><div class="text-dark text-sm">
									<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
										<use xlink:href="#retail-bag-1"> </use>
									</svg>
									<x-add-to-cart-button product_id="{{ $product->id }}" quantity="1" />
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
