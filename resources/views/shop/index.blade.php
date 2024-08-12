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
                    <div class="col-xl-8">
                        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt.</p>
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
                            <div class="product-badge badge bg-secondary">Fresh</div>
                            <a href="{{ route('shop.show', ['product'=> $product->id])}}">
                                <div class="product-swap-image">
                                    <img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450"
                                        class="img-fluid product-swap-image-front"
                                        src="/{{ $product->images[0]['image_url'] ?? '' }}" alt="product">
                                    <img style="aspect-ratio: 2/3; object-fit: cover;" width="300" height="450"
                                        class="img-fluid" src="/{{ $product->images[1]['image_url'] ?? '' }}"
                                        alt="product">
                                </div>
                            </a>
                            <div class="product-hover-overlay"><a class="text-dark text-sm" href="#!">
                                    <svg class="svg-icon text-primary-hover svg-icon-heavy d-sm-none">
                                        <use xlink:href="#retail-bag-1"> </use>
                                    </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                                <div><a class="text-dark text-primary-hover me-2" href="#!">
                                        <svg class="svg-icon svg-icon-heavy">
                                            <use xlink:href="#heart-1"> </use>
                                        </svg></a><a class="text-dark text-primary-hover text-decoration-none" href="#!"
                                        data-bs-toggle="modal" data-bs-target="#quickView">
                                        <svg class="svg-icon svg-icon-heavy">
                                            <use xlink:href="#expand-1"> </use>
                                        </svg></a></div>
                            </div>
                        </div>
                        <div class="position-relative">
                            <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">{{$product->name}}</a>
                            </h3>
                            <p class="text-gray-600 text-sm">
                                <s class="me-2 text-gray-500">${{$product->price}}</s><span>${{$product->price}}</span>
                            </p>
                            <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i
                                    class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i
                                    class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
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
                    href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand<span
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
                    href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size<span
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