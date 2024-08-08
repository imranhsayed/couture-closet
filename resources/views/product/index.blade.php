@extends('layouts.app')

@section('content')
	<div class="container-fluid container-fluid-px py-4">
		<div class="row">
			<!-- Grid -->
			<div class="products-grid col-xl-9 col-lg-8 order-lg-2">
				<!-- Hero Content-->
				<div class="hero-content pb-5">
					<h1>Shop</h1>
					<div class="row">
						<div class="col-xl-8"><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>                </div>
					</div>
				</div>
				<!-- Breadcrumbs -->
				<ol class="breadcrumb undefined">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active">Shop                                   </li>
				</ol>
				<header class="product-grid-header">
					<div class="me-3 mb-3">
						Showing <strong>1-12 </strong>of <strong>158 </strong>products
					</div>
				</header>
				<div class="row">
					<!-- product-->
					@foreach($products as $product)
					<div class="col-xl-3 col-sm-4 col-6">
						<div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
							<div class="product-image mb-md-3">
								<div class="product-badge badge bg-secondary">Fresh</div>
								<a href="#">
									<div class="product-swap-image">
										@foreach($product->images as $image)
										<img class="img-fluid product-swap-image-front" src="/{{ $image->image_url}}" alt="product">
										<img class="img-fluid" src="/{{ $image->image_url}}" alt="product">
										@endforeach
									</div>
								</a>
								<div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
										<svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
											<use xlink:href="#retail-bag-1"> </use>
										</svg><span class="d-none d-sm-inline">Add to cart</span></a>
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
								<h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">{{$product->name}}</a></h3>
								<p class="text-gray-600 text-sm">
									<s class="me-2 text-gray-500">${{$product->price}}</s><span>${{$product->price}}</span>
								</p>
								<div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /product -->
					
				</div>
				<nav class="d-flex justify-content-center mb-5 mt-3" aria-label="page navigation">
					<ul class="pagination">
						<li class="page-item"><a class="page-arrow" href="#" aria-label="Previous"><span aria-hidden="true">
                    <svg class="svg-icon page-icon">
                      <use xlink:href="#angle-left-1"> </use>
                    </svg></span><span class="sr-only">Previous</span></a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5 </a></li>
						<li class="page-item"><a class="page-arrow" href="#" aria-label="Next"><span aria-hidden="true">
                    <svg class="svg-icon page-icon">
                      <use xlink:href="#angle-right-1"> </use>
                    </svg></span><span class="sr-only">Next     </span></a></li>
					</ul>
				</nav>
			</div>
			<!-- Sidebar-->
			<div class="sidebar col-xl-3 col-lg-4 pe-xl-5 order-lg-1">
				<div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">Product Categories<span class="block-toggler-icon"></span></a>
					<div class="expand-lg collapse" id="categoriesMenu" role="menu">
						<h5 class="sidebar-heading d-none d-lg-block">Category  </h5>
						<div class="sidebar-icon-menu mt-4 mt-lg-0">
							
							@foreach($demographies as $demogrphy)
							<div class="sidebar-icon-menu-item" data-bs-toggle="collapse" data-bs-target="#subcategories_1" aria-controls="subcategories_1" role="menuitem">
								<div class="d-flex align-items-center">
									<svg class="svg-icon sidebar-icon">
										<use xlink:href="#woman"> </use>
									</svg><a class="sidebar-icon-menu-link fw-bold me-2" href="#">{{ $demogrphy->value}}</a><span class="sidebar-icon-menu-count"> 55</span>
								</div>
								<div class="collapse" id="subcategories_1">
									<ul class="sidebar-icon-menu sidebar-icon-submenu">
										<li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Lorem ipsum   </a></li>
										<li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Dolor   </a></li>
										<li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Sit amet   </a></li>
										<li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Donec vitae   </a></li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#priceFilterMenu" aria-expanded="false" aria-controls="priceFilterMenu">Filter by price<span class="block-toggler-icon"></span></a>
					<div class="expand-lg collapse" id="priceFilterMenu">
						<h5 class="sidebar-heading d-none d-lg-block">Price  </h5>
						<div class="mt-4 mt-lg-0 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" id="slider-snap"> <div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(16%, 0px) scale(0.28, 1);"></div></div><div class="noUi-origin" style="transform: translate(-84%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="110.0" aria-valuenow="40.0" aria-valuetext="40.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-56%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="40.0" aria-valuemax="250.0" aria-valuenow="110.0" aria-valuetext="110.00"><div class="noUi-touch-area"></div></div></div></div></div>
						<div class="nouislider-values">
							<div class="min">From $<span id="slider-snap-value-lower">40.00</span></div>
							<div class="max">To $<span id="slider-snap-value-upper">110.00</span></div>
							<input class="slider-snap-input" type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40">
							<input class="slider-snap-input" type="hidden" name="priceto" id="slider-snap-input-upper" value="110">
						</div>
					</div>
				</div>
				<div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand<span class="block-toggler-icon"></span></a>
					<!-- Brand filter menu - this menu has .show class, so is expanded by default-->
					<div class="expand-lg collapse show" id="brandFilterMenu">
						<h5 class="sidebar-heading d-none d-lg-block">Brands </h5>
						<form class="mt-4 mt-lg-0" action="#">
							@foreach($brands as $brand)
							<div class="mb-3 mb-1">
								<div class="form-check">
									<input class="form-check-input" id="brand0" type="checkbox" name="clothes-brand" checked="">
									<label class="form-check-label" for="brand0">{{ $brand->value}} <small>(18)</small></label>
								</div>
							</div>
							@endforeach
						</form>
					</div>
				</div>
				<div class="sidebar-block px-3 px-lg-0"> <a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size<span class="block-toggler-icon"></span></a>
					<!-- Size filter menu-->
					<div class="expand-lg collapse" id="sizeFilterMenu">
						<h5 class="sidebar-heading d-none d-lg-block">Size </h5>
						<form class="mt-4 mt-lg-0" action="#">
							@foreach($categories as $category)
							<div class="mb-3 mb-1">
								<div class="form-check">
									<input class="form-check-input" id="size0" type="radio" name="size" checked="">
									<label class="form-check-label" for="size0">{{$category->description}}</label>
								</div>
							</div>
							@endforeach
						</form>
					</div>
				</div>
				<div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#colourFilterMenu" aria-expanded="false" aria-controls="colourFilterMenu">Filter by colour<span class="block-toggler-icon"></span></a>
					<!-- Size filter menu-->
					<div class="expand-lg collapse" id="colourFilterMenu">
						<h5 class="sidebar-heading d-none d-lg-block">Colour </h5>
						<div class="mt-4 mt-lg-0">
							<ul class="list-inline mb-0 colours-wrapper">
								<li class="list-inline-item">
									<label class="btn-colour" for="colour_sidebar_Blue" style="background-color: #668cb9" data-allow-multiple=""> </label>
									<input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue">
								</li>
								<li class="list-inline-item">
									<label class="btn-colour" for="colour_sidebar_White" style="background-color: #fff" data-allow-multiple=""> </label>
									<input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White">
								</li>
								<li class="list-inline-item">
									<label class="btn-colour" for="colour_sidebar_Violet" style="background-color: #8b6ea4" data-allow-multiple=""> </label>
									<input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet">
								</li>
								<li class="list-inline-item">
									<label class="btn-colour" for="colour_sidebar_Red" style="background-color: #dd6265" data-allow-multiple=""> </label>
									<input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /Sidebar end-->
		</div>
	</div>
@endsection
