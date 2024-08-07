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
			<div class="col-lg-6 col-xl-7 pt-4 order-2 order-lg-1 photoswipe-gallery"><a class="d-block mb-4" href="img/product/detail-3-gray.jpg" data-caption="Push-up Jeans 1 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					<div data-toggle="zoom" data-image="img/product/detail-3-gray.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-3-gray.jpg" alt="Push-up Jeans 1"><img role="presentation" alt="" src="img/product/detail-3-gray.jpg" class="zoomImg" style="position: absolute; top: -94.9611px; left: -187.658px; opacity: 0; width: 1313px; height: 1313px; border: none; max-width: none; max-height: none;"></div></a><a class="d-block mb-4" href="img/product/detail-1-gray.jpg" data-caption="Push-up Jeans 2 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					<div data-toggle="zoom" data-image="img/product/detail-1-gray.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-1-gray.jpg" alt="Push-up Jeans 2"><img role="presentation" alt="" src="img/product/detail-1-gray.jpg" class="zoomImg" style="position: absolute; top: -409.275px; left: -607.565px; opacity: 0; width: 1313px; height: 1313px; border: none; max-width: none; max-height: none;"></div></a><a class="d-block mb-4" href="img/product/detail-2-gray.jpg" data-caption="Push-up Jeans 3 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					<div data-toggle="zoom" data-image="img/product/detail-2-gray.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-2-gray.jpg" alt="Push-up Jeans 3"><img role="presentation" alt="" src="img/product/detail-2-gray.jpg" class="zoomImg" style="position: absolute; top: -517.351px; left: -389.25px; opacity: 0; width: 1313px; height: 1313px; border: none; max-width: none; max-height: none;"></div></a><a class="d-block mb-4" href="img/product/detail-4-gray.jpg" data-caption="Push-up Jeans 4 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					<div data-toggle="zoom" data-image="img/product/detail-4-gray.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-4-gray.jpg" alt="Push-up Jeans 4"><img role="presentation" alt="" src="img/product/detail-4-gray.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1313px; height: 1313px; border: none; max-width: none; max-height: none;"></div></a><a class="d-block mb-4" href="img/product/detail-5-gray.jpg" data-caption="Push-up Jeans 5 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					<div data-toggle="zoom" data-image="img/product/detail-5-gray.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-5-gray.jpg" alt="Push-up Jeans 5"><img role="presentation" alt="" src="img/product/detail-5-gray.jpg" class="zoomImg" style="position: absolute; top: -279.173px; left: -390.482px; opacity: 0; width: 1315px; height: 1315px; border: none; max-width: none; max-height: none;"></div></a><a class="d-block mb-4" href="img/product/detail-6.jpg" data-caption="Push-up Jeans 6 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200">
					<div data-toggle="zoom" data-image="img/product/detail-6.jpg" style="position: relative; overflow: hidden;"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-6.jpg" alt="Push-up Jeans 6"><img role="presentation" alt="" src="img/product/detail-6.jpg" class="zoomImg" style="position: absolute; top: -315.712px; left: -211.349px; opacity: 0; width: 1024px; height: 1024px; border: none; max-width: none; max-height: none;"></div></a>
			</div>
			<div class="col-lg-6 col-xl-4 pt-4 order-1 order-lg-2 ms-lg-auto">
				<div class="sticky-top" style="top: 100px;">
					<h1 class="mb-4">{{ $product->name}}</h1>
					<div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
						<ul class="list-inline mb-2 mb-sm-0">
							<li class="list-inline-item h4 fw-light mb-0">{{ $product->price}}</li>
							<li class="list-inline-item text-muted fw-light">
								<del>{{ $product->price}}</del>
							</li>
						</ul>
						<div class="d-flex align-items-center text-sm">
							<ul class="list-inline me-2 mb-0">
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
								<li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
							</ul><span class="text-muted text-uppercase">25 reviews</span>
						</div>
					</div>
					<p class="mb-4 text-muted">{{ $product->description}}Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
					<form id="buyForm" action="#">
						<div class="row">
							<div class="col-sm-6 col-lg-12 detail-option mb-4">
								<h6 class="detail-option-heading">Size <span>(required)</span></h6>
								<div class="dropdown bootstrap-select">
									<select class="selectpicker" name="size" data-style="btn-selectpicker">
										<option value="value_0">Small</option>
										<option value="value_1">Medium</option>
										<option value="value_2">Large</option>
									</select>
								</div>
							</div>
						</div>
						<div class="input-group w-100 mb-4">
							<input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
							<div class="flex-grow-1">
								<div class="d-grid h-100">
									<button class="btn btn-dark" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-6"><a href="#"> <i class="far fa-heart me-2"></i>Add to wishlist </a></div>
							<div class="col-6 text-end">
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-2"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-facebook-f"> </i></a></li>
									<li class="list-inline-item"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-twitter"> </i></a></li>
								</ul>
							</div>
						</div>
						<ul class="list-unstyled">
                            <div class="border-top">
                                <li><strong >Category:</strong> <a class="text-muted" href="#">Jeans</a></li>    
                            </div>
                            <div class="border-top">
                                <li><strong >Stock:</strong> <a class="text-muted" href="#">Jeans</a></li>    
                            </div>
							<div class="border-top">
                                <li><strong >Brand:</strong> <a class="text-muted" href="#">Jeans</a></li>    
                            </div>
							<li><strong>Tags:</strong> <a class="text-muted" href="#">Leisure</a>, <a class="text-muted" href="#">Elegant</a></li>
						</ul>
					</form>
				</div>
			</div>
		</div>

		{{--Description Tabs--}}
		<section class="mt-5">
			<div class="container">
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
								<p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
								<p class="text-muted">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
								<h5>You will love</h5>
								<ul class="text-muted">
									<li>He must have tried it a hundred times</li>
									<li>shut his eyes so that he wouldn't have to look</li>
									<li>at the floundering legs, and only stopped</li>
								</ul>
							</div>
							<div class="col-md-5"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/detail-3.jpg" alt=""></div>
						</div>
					</div>
					<div class="fade tab-pane" id="additional-information" role="tabpanel">
						<div class="row">
							<div class="col-lg-6">
								<table class="table text-sm">
									<tbody>
									<tr>
										<th class="font-weight-normal border-0">Product #</th>
										<td class="text-muted border-0">Lorem ipsum dolor sit amet</td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Available packaging</th>
										<td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Weight</th>
										<td class="text-muted ">dolor sit amet</td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Sunt in culpa qui</th>
										<td class="text-muted ">Lorem ipsum dolor sit amet</td>
									</tr>
									</tbody>
								</table>
							</div>
							<div class="col-lg-6">
								<table class="table text-sm">
									<tbody>
									<tr>
										<th class="font-weight-normal border-0">Weight</th>
										<td class="text-muted border-0">dolor sit amet                           </td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Sunt in culpa qui</th>
										<td class="text-muted ">Lorem ipsum dolor sit amet                           </td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Product #</th>
										<td class="text-muted ">Lorem ipsum dolor sit amet                           </td>
									</tr>
									<tr>
										<th class="font-weight-normal ">Available packaging</th>
										<td class="text-muted ">LOLDuis aute irure dolor in reprehenderit                           </td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="reviews" role="tabpanel">
						<div class="row mb-5">
							<div class="col-lg-10 col-xl-9">
								<div class="media review">
									<div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/avatar/person-1.jpg" alt="Han Solo"><span class="text-uppercase text-muted">Dec 2018</span></div>
									<div>
										<h5 class="mt-2 mb-1">Han Solo</h5>
										<div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
										</div>
										<p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
									</div>
								</div>
								<div class="media review">
									<div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/avatar/person-2.jpg" alt="Luke Skywalker"><span class="text-uppercase text-muted">Dec 2018</span></div>
									<div>
										<h5 class="mt-2 mb-1">Luke Skywalker</h5>
										<div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i>
										</div>
										<p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream.     </p>
									</div>
								</div>
								<div class="media review">
									<div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/avatar/person-3.jpg" alt="Princess Leia"><span class="text-uppercase text-muted">Dec 2018</span></div>
									<div>
										<h5 class="mt-2 mb-1">Princess Leia</h5>
										<div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
										</div>
										<p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
									</div>
								</div>
								<div class="media review">
									<div class="flex-shrink-0 text-center me-4 me-xl-5"><img class="review-image" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/avatar/person-4.jpg" alt="Jabba Hut"><span class="text-uppercase text-muted">Dec 2018</span></div>
									<div>
										<h5 class="mt-2 mb-1">Jabba Hut</h5>
										<div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
										</div>
										<p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.     </p>
									</div>
								</div>
								<div class="py-5 px-3">
									<h5 class="mb-4">Leave a review</h5>
									<form class="mb-4 form" id="reviewForm" method="post" action="{{ route('product.review.store') }}">
                                        @csrf
                                        <input type="hidden" id="product_id" name="product_id" value="{{ session('productId') ?? '' }}">
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
									<p class="text-muted text-sm"><span class="badge badge-info-light">Note</span> This form shows usage of the classic Bootstrap form controls, not their underlined variants. You can choose whichever variant you want.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{--Related Products--}}
		<section class="py-5">
			<div class="container">
				<h5 class="mb-4">You might also like these</h5>
				<div class="row row-cols-3 g-3">
					<div class="col">
						<div class="card">
							<img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill">
							<h3>Grey Sweater</h3>
							<p>$20</p>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill">
							<h3>Grey Sweater</h3>
							<p>$20</p>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill">
							<h3>Grey Sweater</h3>
							<p>$20</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
