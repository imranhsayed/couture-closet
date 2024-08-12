@extends('layouts.app')

@section('content')
    @include('partials.flash')
	<div class="container">
		{{--BreadCrumb--}}
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item"><a href="/category?slug=jeans">Jeans</a></li>
			<li class="breadcrumb-item active">Push-up Jeans</li>
		</ul>
		{{--Product Details--}}
		<div class="row">
			<div class="col-lg-6 col-xl-7 pt-4 order-2 order-lg-1 photoswipe-gallery">
                <a class="d-block mb-4" href="img/product/detail-3-gray.jpg" data-caption="Push-up Jeans 1 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					@foreach($product->images as $image)

                    <div data-toggle="zoom" data-image="img/product/detail-3-gray.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="/{{ $image->image_url}}" alt="{{$product->name}}"><img role="presentation" alt="{{$product->name}}" src="/{{ $image->image_url}}" class="zoomImg" style="position: absolute; top: -94.9611px; left: -187.658px; opacity: 0; width: 1313px; height: 1313px; border: none; max-width: none; max-height: none;"></div></a><a class="d-block mb-4" href="#" data-caption="Push-up Jeans 2 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
                    @endforeach
                </a>
			</div>
			<div class="col-lg-6 col-xl-4 pt-4 order-1 order-lg-2 ms-lg-auto">
				<div class="sticky-top" style="top: 100px;">
					<h1 class="mb-4">{{ $product->name}}</h1>
					<div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
						<ul class="list-inline mb-2 mb-sm-0">
							<li class="list-inline-item h4 fw-light mb-0">$ {{ $product->price}}</li>
							<li class="list-inline-item text-muted fw-light">
							</li>
						</ul>
						<div class="d-flex align-items-center text-sm">
							<ul class="list-inline me-2 mb-0">
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
							</ul>
                            <span class="text-muted text-uppercase">{{ $totalReviews }} reviews</span>
						</div>
					</div>
					<h6 class="detail-option-heading d-inline">Description</h6><p class="mb-4 text-muted">{{ $product->description }}</p>
					<div id="buyForm">
						<div class="row">
							<div class="col-sm-6 col-lg-12 detail-option mb-4">
								@if($size)
									<h6 class="detail-option-heading d-inline">Size: </h6>
									<span>{{$size->description}}</span>
								@else
									<h6 class="detail-option-heading d-inline">Size: </h6>
									<span>No Size Available</span>
								@endif
							</div>
						</div>
						{{--Add to cart--}}
						<x-counter-add-to-cart product_id="{{ $product->id }}" />

						<ul class="list-unstyled border-top">
							{{--@TODO To make category and brand dyanamic--}}
                            <li class="border-top pt-2">
                                <strong class="text d-block" class="border-top pt-2">Stock:</strong>
									@if($product->stock_quantity < 1)
                                		<strong><a class="text-muted d-block" class="border-top pt-2">Not Available</a></strong>
									@else
										<strong><a class="text-muted d-block" class="border-top pt-2">Available</a></strong>
									@endif
							</li>
							@if($demography)
							<li class="border-top pt-2">
                                <strong class="text d-block" class="border-top pt-2">Demography</strong>
                                <strong><a class="text-muted d-block" href="#" class="border-top pt-2">{{$demography->value}}</a></strong>
                            </li>
							@endif
							@if($brand)
                            <li class="border-top pt-2">
                                <strong class="d-block">Brand:</strong>
                                <strong><a class="text-muted d-block" href="#">{{$brand->value}}</a></strong>
                            </li>
							@endif
                        </ul>
					</div>
				</div>
			</div>
		</div>

		{{--Description Tabs--}}
		<section class="mt-5">
			<cc-tabs class="container">
				<ul class="nav nav-tabs flex-column flex-sm-row" role="tablist">
					<li class="nav-item"><a class="nav-link detail-nav-link active" data-bs-toggle="tab" href="#description" role="tab">Description</a></li>
					<li class="nav-item"><a class="nav-link detail-nav-link" data-bs-toggle="tab" href="#additional-information" role="tab">Additional Information</a></li>
					<li class="nav-item"><a class="nav-link detail-nav-link" data-bs-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
				</ul>
				<div class="tab-content py-4">
					<div class="tab-pane fade show active px-3" id="description" role="tabpanel">
						<div class="row">
							<div class="col-md-7">
								<h5>About</h5>
								<p class="text-muted">{{$product->description}}</p>
								<p class="text-muted">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
							</div>
							<!-- <div class="col-md-5"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-3.jpg" alt="{{$product->name}}"></div> -->
						</div>
					</div>
					<div class="fade tab-pane" id="additional-information" role="tabpanel">
						<div class="row">
							<div class="col-lg-6">
								<table class="table text-sm">
									<tbody>
									<tr>
										<th class="font-weight-normal border-0">Product No</th>
										<td class="text-muted border-0">{{$product->id}}</td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Product Name</th>
										<td class="text-muted ">{{$product->name}}</td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Description</th>
										<td class="text-muted ">{{ $product->description}}</td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Quantity</th>
										<td class="text-muted ">{{$product->stock_quantity}}</td>
									</tr>
									</tbody>
								</table>
							</div>
							<div class="col-lg-6">
								<table class="table text-sm">
									<tbody>
									@foreach($reviews as $review)
									<tr>
										<th class="font-weight-normal ">Total Reviews</th>
										<td class="text-muted ">{{$totalReviews}} reviews</td>
									</tr>
									@endforeach
									@foreach($reviews as $review)
									<tr>
										<th class="font-weight-normal ">Rating</th>
										<td class="text-muted ">{{ $review->rating}}</td>
									</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="reviews" role="tabpanel">
						<div class="row mb-5">
							<div class="col-lg-10 col-xl-9">
								@foreach($reviews as $review)
								<div class="media review">
									<div class="flex-shrink-0 text-center me-4 me-xl-5">
										<img class="review-image" src="/images/review_logo.svg" alt="{{ $review->user->name }}">
										<span class="text-uppercase text-muted">{{ $review->created_at->format('M Y') }}</span>
									</div>
									<div>
										<h5 class="mt-2 mb-1">{{ $review->user->name }}</h5>
										<div class="mb-2">

										</div>
										<p class="text-muted">{{ $review->review_text }}</p>
									</div>
								</div>
								@endforeach
								<div class="py-5 px-3">
									<h5 class="mb-4">Leave a review</h5>
									<form class="mb-4 form" id="reviewForm" method="post" action="{{ route('product.review.store') }}">
                                        @csrf
                                        <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" id="order_id" name="order_id" value="{{ session('orderId') ?? '' }}">
                                        <div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
                                                    <label class="form-label" for="name">Your title *</label>
                                                    <input class="form-control" type="text" name="title" id="title" placeholder="Enter your title" required="required">
                                                </div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label" for="rating">Your rating *</label>
													<select class="form-select focus-shadow-0" name="rating" id="rating">
														<option value="5">★★★★★ (5/5)</option>
														<option value="4">★★★★☆ (4/5)</option>
														<option value="3">★★★☆☆ (3/5)</option>
														<option value="2">★★☆☆☆ (2/5)</option>
														<option value="1">★☆☆☆☆ (1/5)</option>
													</select>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="reviewReview">Review text *</label>
											<textarea class="form-control" rows="4" name="review_text" id="review_text" placeholder="Enter your review" required="required"></textarea>
										</div>
										<button class="btn btn-outline-dark" type="submit">Post review</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</cc-tabs>
		</section>

		{{--Related Products--}}


		<section class="py-5">
			<div class="container">
				<h5 class="mb-4">You might also like these</h5>
				<!-- product-->
				<div class="row">
				@foreach($all_products as $single_product)
					@foreach($single_product->images as $image)
					<div class="col-lg-3 col-md-4">
						<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
							<div class="product-image mb-md-3">
								<div class="product-badge badge bg-secondary">Fresh</div>
								<a href="{{ route('shop.show', ['product'=> $image->product->id])}}">
									<div class="product-swap-image">
										<img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450" class="img-fluid product-swap-image-front" src="/{{ $image->image_url ?? '' }}" alt="product">
										<img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450" class="img-fluid" src="/{{ $image->image_url ?? '' }}" alt="product">
									</div>
								</a>
								<div class="product-hover-overlay"><div class="text-dark text-sm">
										<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
											<use xlink:href="#retail-bag-1"> </use>
										</svg>
										<x-add-to-cart-button product_id="{{$image->product_id}}" quantity="1" />
									</div>
									<div><a class="text-dark text-primary-hover me-2" href="#!">
											<svg class="svg-icon svg-icon-heavy">
												<use xlink:href="#heart-1"> </use>
											</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
											<svg class="svg-icon svg-icon-heavy">
												<use xlink:href="#expand-1"> </use>
											</svg></a>
									</div>
								</div>
							</div>
							<div class="position-relative">
								<h3 class="text-base mb-1">
									<a class="text-dark" href="#">
										{{ $single_product->name }}
									</a>
								</h3>
								<p class="text-gray-600 text-sm">
									<span>${{ $single_product->price }}</span>
								</p>
								<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
							</div>
						</div>
					</div>
					@endforeach
				@endforeach
			</div>
			<!-- /product   -->
			</div>
		</section>
	</div>
@endsection
