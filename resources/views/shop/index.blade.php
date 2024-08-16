@extends('layouts.app')

@section('content')
<div class="container-fluid container-fluid-px py-4 pt-5">
    <div class="row">
        <!-- Grid -->
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
            <!-- Hero Content-->
             @if(isset($search) && $search)
                @if($products->isNotEmpty())             
                    <div class="alert alert-info mb-4">
                        <h4 class="alert-heading">Search Results</h4>
                        <p class="mb-0">Your search result for: <strong>{{ $search }}</strong></p>
                    </div>
                @else
                    <div class="alert alert-info mb-4">
                        <h4 class="alert-heading">No Results Found</h4>
                        <p class="mb-0">No results were found for: <strong>{{ $search }}</strong></p>
                    </div>
                @endif
            @endif
            <div class="hero-content pb-5">
                <h1>Shop</h1>
                <div class="row">
                    <div class="col-xl-8">
                        <p class="lead text-muted">Browse through our wide selection of stylish and trendy clothing and express your unique style.</p>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs -->
            <ol class="breadcrumb undefined">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Shop</li>
            </ol>
            <header class="product-grid-header">
                <div class="me-3 mb-3">
                    Showing <strong>{{ $products->firstItem() }}-{{ $products->lastItem() }} </strong>of
                    <strong>{{ $products->total() }} </strong>products
                </div>
            </header>
            <div class="row">
                <!-- product-->
                @foreach($products as $product)
                <div class="col-xl-3 col-sm-4 col-6">
                    <div class="product product-type-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                        <div class="product-image mb-md-3">
                            <a href="{{ route('shop.show', ['product'=> $product->id])}}">
                                <div class="product-swap-image">
                                    <img style="width: 100% !important; aspect-ratio: 2/3; object-fit: cover;" width="300" height="450"
                                        class="img-fluid product-swap-image-front"
                                        src="/{{ $product->images[0]['image_url'] ?? '' }}" alt="product">
                                    <img style="width: 100%; aspect-ratio: 2/3; object-fit: cover;" width="300" height="450"
                                        class="img-fluid"
                                        src="/{{ isset($product->images[1]) ? $product->images[1]['image_url'] : ($product->images[0]['image_url'] ?? '') }}"
                                        alt="product">
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
                            <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">{{$product->name}}</a>
                            </h3>
                            <p class="text-gray-600 text-sm">
                                <span>${{$product->price}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /product -->
            </div>
            <nav class="d-flex justify-content-center mb-5 mt-3" aria-label="page navigation">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    @if ($products->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-arrow" aria-label="Previous">
                                <span aria-hidden="true">
                                    <svg class="svg-icon page-icon">
                                        <use xlink:href="#angle-left-1"></use>
                                    </svg>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                    @else
                    <li class="page-item">
                        <a class="page-arrow" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">
                                <svg class="svg-icon page-icon">
                                    <use xlink:href="#angle-left-1"></use>
                                </svg>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    @endif

                    <!-- Pagination Elements -->
                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        @if ($page == $products->currentPage())
                            <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    <!-- Next Page Link -->
                    @if ($products->hasMorePages())
                    <li class="page-item">
                        <a class="page-arrow" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">
                                <svg class="svg-icon page-icon">
                                    <use xlink:href="#angle-right-1"></use>
                                </svg>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <a class="page-arrow" aria-label="Next">
                            <span aria-hidden="true">
                                <svg class="svg-icon page-icon">
                                    <use xlink:href="#angle-right-1"></use>
                                </svg>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        <!-- Sidebar-->
        <div class="sidebar col-xl-3 col-lg-4 pe-xl-5 order-lg-1">
            <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse"
                    href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">Product Categories<span
                        class="block-toggler-icon"></span></a>
                <div class="expand-lg collapse" id="categoriesMenu" role="menu">
                    <h5 class="sidebar-heading d-none d-lg-block">Category </h5>
                    <div class="sidebar-icon-menu mt-4 mt-lg-0">

                        @foreach( $demographies as $demogrphy )
                        <div class="sidebar-icon-menu-item">
                            <div class="d-flex align-items-center">
                                @php
                                    $path_asset = 'images/' . strtolower( $demogrphy->value ) . '.svg';
                                @endphp
                                <img src="{{ $path_asset }}" alt="Men's" style="width: 28.85px; height: 32.36px;">
                                <a style="margin-left: 10px !important;" class="sidebar-icon-menu-link fw-bold me-2"
                                    href="/shop?category={{ $demogrphy->value }}">{{ $demogrphy->value }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse"
                    href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Brands On Sale<span
                        class="block-toggler-icon"></span></a>
                <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
                <div class="expand-lg collapse show" id="brandFilterMenu">
                    <h5 class="sidebar-heading d-none d-lg-block">Brands </h5>

                    <div class="sidebar-icon-menu mt-4 mt-lg-0">
                        @foreach($brands as $brand)
                        <div class="sidebar-icon-menu-item">
                            <div class="d-flex align-items-center">
                                <a style="margin-left: 10px !important;" class="sidebar-icon-menu-link fw-bold me-2"
                                    href="/shop?brand={{ $brand->value}}">{{ $brand->value}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="sidebar-block px-3 px-lg-0"> <a class="d-lg-none block-toggler" data-bs-toggle="collapse"
                    href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Avaliable sizes<span
                        class="block-toggler-icon"></span></a>
                <!-- Size filter menu-->
                <div class="expand-lg collapse" id="sizeFilterMenu">
                    <h5 class="sidebar-heading d-none d-lg-block">Size </h5>

                    <div class="sidebar-icon-menu mt-4 mt-lg-0">
                        @foreach($categories as $category)
                            <div class="sidebar-icon-menu-item">
                                <div class="d-flex align-items-center">
                                    <a style="margin-left: 10px !important;" class="sidebar-icon-menu-link fw-bold me-2"
                                        href="/shop?size={{ $category->value}}">{{ $category->description}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /Sidebar end-->
    </div>
</div>
@endsection
