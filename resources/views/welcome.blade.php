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
				<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

				<div class="container">
					<div class="carousel-caption text-start">
						<h1>Example headline.</h1>
						<p>Some representative placeholder content for the first slide of the carousel.</p>
						<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Some representative placeholder content for the second slide of the carousel.</p>
						<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item active">
				<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

				<div class="container">
					<div class="carousel-caption text-end">
						<h1>One more for good measure.</h1>
						<p>Some representative placeholder content for the third slide of this carousel.</p>
						<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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

		<div class="bg-gray-100 position-relative">
			<div class="container py-6">
				<div class="row">
					<div class="col-sm-6 mb-5 mb-sm-0">
						<div class="card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center"><img class="card-img img-scale" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/category-women.jpg" alt="Card image">
							<div class="card-img-overlay d-flex align-items-center">
								<div class="w-100 py-3">
									<h2 class="display-3 fw-bold mb-0">Women</h2><a class="stretched-link" href="category-full.html"><span class="sr-only">See </span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 mb-5 mb-sm-0">
						<div class="card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center"><img class="card-img img-scale" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/category-men.jpg" alt="Card image">
							<div class="card-img-overlay d-flex align-items-center">
								<div class="w-100 py-3">
									<h2 class="display-3 fw-bold mb-0">Men</h2><a class="stretched-link" href="category-full.html"><span class="sr-only">See </span></a>
								</div>
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
					<li class="list-inline-item"><a class="text-dark" href="#">All Products </a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Clothing </a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Bags</a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Shoes</a></li>
					<li class="list-inline-item"><a class="text-muted text-dark-hover" href="#">Accessories</a></li>
				</ul>
			</div>
			<div class="col-12 col-sm-auto text-center"><a class="btn btn-link px-0" href="#">All products</a></div>
		</div>
		<div class="row">
					
			@foreach($products as $product)
				<!-- product-->
				<div class="col-lg-3 col-md-4">
					<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
						<div class="product-image mb-md-3">
							<div class="product-badge badge bg-secondary">Fresh</div><a href="detail-1.html">
								<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="{{ $product->image_url }}" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0987188250_2_1_1.jpg" alt="product"></div></a>
							<div class="product-hover-overlay"><a class="text-dark text-sm" href="">
									<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
										<use xlink:href="#retail-bag-1"> </use>
									</svg>
									<x-add-to-cart-button quantity="{{ $product->stock_quantity}}" />
								</a>
								<div><a class="text-dark text-primary-hover me-2" href="#!">
										<svg class="svg-icon svg-icon-heavy">
											<use xlink:href="#heart-1"> </use>
										</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
										<svg class="svg-icon svg-icon-heavy">
											<use xlink:href="#expand-1"> </use>
										</svg></a></div>
							</div>
						</div>
						<div class="position-relative">
							<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">{{ $product->name }}</a></h3>
							<p class="text-gray-600 text-sm">
								<s class="me-2 text-gray-500">${{ $product->price }}</s><span>${{ $product->price }}</span>
							</p>
							<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
						</div>
					</div>
				</div>
			@endforeach
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0950354513_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0950354513_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Black blouse</a></h3>
						<p class="text-gray-600 text-sm"> <span>$40.00                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3">
						<div class="product-badge badge bg-primary">Sale</div><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/5161335400_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/5161335400_2_3_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">College jacket</a></h3>
						<p class="text-gray-600 text-sm">
							<s class="me-2 text-gray-500">$30.00</s><span>$15.00</span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0027211800_1_2_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0027211800_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Carrot-fit jeans</a></h3>
						<p class="text-gray-600 text-sm"> <span>$60.00                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0144074800_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0144074800_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Striped T-Shirt</a></h3>
						<p class="text-gray-600 text-sm"> <span>$30.99                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3">
						<div class="product-badge badge bg-dark">Sold out</div><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0693492802_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0693492802_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Short top</a></h3>
						<p class="text-gray-600 text-sm">
							<s class="me-2 text-gray-500">$40.00</s><span>$16.00</span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3">
						<div class="product-badge badge bg-dark">Sold out</div><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0364326148_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0364326148_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Ethnic Sweater</a></h3>
						<p class="text-gray-600 text-sm">
							<s class="me-2 text-gray-500">$40.00</s><span>$30.00</span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0931168712_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0931168712_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Beige</a></h3>
						<p class="text-gray-600 text-sm"> <span>$40.00                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/1000962306_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/1000962306_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Skull Tee</a></h3>
						<p class="text-gray-600 text-sm">
							<s class="me-2 text-gray-500">$40.00</s><span>$20.00</span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0915494643_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0915494643_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg>
								<x-add-to-cart-button product_id="23" quantity="1" />
							</a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Trucker jacket</a></h3>
						<p class="text-gray-600 text-sm"> <span>$40.00                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0907168607_1_1_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/0907168607_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Blouse</a></h3>
						<p class="text-gray-600 text-sm"> <span>$40.00                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
			<!-- product-->
			<div class="col-lg-3 col-md-4">
				<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
					<div class="product-image mb-md-3"><a href="detail-1.html">
							<div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/5806513505_1_2_1.jpg" alt="product"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/5806513505_2_1_1.jpg" alt="product"></div></a>
						<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
								<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
									<use xlink:href="#retail-bag-1"> </use>
								</svg><x-add-to-cart-button product_id="23" quantity="1" /></a>
							<div><a class="text-dark text-primary-hover me-2" href="#!">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#heart-1"> </use>
									</svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">
									<svg class="svg-icon svg-icon-heavy">
										<use xlink:href="#expand-1"> </use>
									</svg></a></div>
						</div>
					</div>
					<div class="position-relative">
						<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Shirt</a></h3>
						<p class="text-gray-600 text-sm"> <span>$40.00                </span>
						</p>
						<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
					</div>
				</div>
			</div>
			<!-- /product   -->
		</div>
	</div>

@endsection
