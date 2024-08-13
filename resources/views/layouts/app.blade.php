<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS and JS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/admin/main.css', 'resources/sass/app.scss'])
</head>
<body>
    <div id="app">
	<nav class="navbar navbar-expand-lg bg-transparent border-1 shadow-1 navbar-light container-fluid-px py-4" style="background: #f6f4ee !important;">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="/images/logo.svg" alt="Site logo" width="200" height="50" class="mr-1">
    </a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="svg-icon navbar-icon">
            <use xlink:href="#menu-hamburger-1"></use>
        </svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        {{-- Menu --}}
        <ul class="navbar-nav mt-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/" aria-haspopup="true" aria-expanded="false">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about" aria-haspopup="true" aria-expanded="false">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact-us" aria-haspopup="true" aria-expanded="false">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="shopDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-animated py-0" aria-labelledby="shopDropdown">
                    <div class="row">
                        @include('partials.header')
                        <div class="col-lg-4 d-none d-lg-block position-relative">
                            <img class="bg-image" src="/images/menu_slider_image.jpg" alt="menu_slider_image">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        {{-- Search --}}
        <form class="" action="{{ route('search') }}" method="GET">
            <div class="input-group input-group-underlined">
                <input class="form-control form-control-underlined ps-3" name="query" type="text" placeholder="Search" aria-label="Search" aria-describedby="button-search">
                <button class="btn btn-underlined" id="button-search" type="button" style="margin-top: -3px">
                    <svg class="svg-icon navbar-icon">
                        <use xlink:href="#search-1"></use>
                    </svg>
                </button>
            </div>
        </form>
		<ul class="list-inline mb-0 d-none d-lg-flex align-items-center">
				    <li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle show" id="userLoginDropdown" href="#"
				                                     data-bs-toggle="dropdown" aria-haspopup="true"
				                                     aria-expanded="false">
						    <svg class="svg-icon navbar-icon">
							    <use xlink:href="#avatar-1"> </use>
						    </svg></a>
					    </a>
					    @if (\Auth::check())
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.profile') }}">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
								@if (\Auth::user()->is_admin)
									<a class="dropdown-item" href="{{ route('admin.index') }}">
										Admin Panel
									</a>
								@endif
							</div>
						@else
							<div class="dropdown-menu dropdown-menu-animated" aria-labelledby="userLoginDropdown"
								data-bs-popper="none">
								<a class="dropdown-item" href="/login">Login</a>
								<a class="dropdown-item" href="/register">Register</a>
							</div>
						@endif
				    </li>
				    <li class="list-inline-item position-relative ml-2">
					    <a class="text-dark text-primary-hover" href="/cart">
						    <svg class="svg-icon navbar-icon">
							    <use xlink:href="#retail-bag-1"> </use>
						    </svg>
						    <cc-product-count class="navbar-icon-badge">5</cc-product-count>
					    </a>
				    </li>
			    </ul>
		    </div>
	    </nav>


        <main>
            @if(session('error'))
		        <div class="d-block" id="addToCartAlert">
			        <div class="mb-4 mb-lg-5 alert alert-error alert-dismissible fade show" role="alert">
				        <div class="d-flex align-items-center">
					        <p class="mb-0">
						        {{ session('error') }}
					        </p>
				        </div>
				        <button class="btn-close btn-close-white opacity-10" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
			        </div>
		        </div>
            @endif
            @if(session('success'))
	            <div class="d-block" id="addToCartAlert">
		            <div class="mb-4 mb-lg-5 alert alert-success alert-dismissible fade show" role="alert">
			            <div class="d-flex align-items-center">
				            <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 me-3">
					            <use xlink:href="#checked-circle-1"> </use>
				            </svg>
				            <p class="mb-0">
					            {{ session('success') }}
				            </p>
			            </div>
			            <button class="btn-close btn-close-white opacity-10" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
		            </div>
	            </div>
            @endif
            @yield('content')
        </main>

<footer>
	<div class="py-6 bg-black text-white">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 pe-lg-5 pe-xl-6 mb-5 mb-lg-0">
					<a href="/"><img src="/images/site-logo-white.svg" alt="Site logo" width="200" height="50" class="mb-2"></a>
					<p class="text-sm mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum dolor doloribus harum, hic incidunt maxime reiciendis repellendus temporibus velit? Commodi, earum eveniet illum laudantium maxime minus nam pariatur voluptatum.</p>
				</div>
				<div class="col-lg-7">
					<div class="row">
					@include('partials.menu')

						<div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-bs-toggle="collapse" href="#footerMenu2" aria-expanded="false" aria-controls="footerMenu2">Your account<span class="block-toggler-icon"></span></a>
							<!-- Footer collapsible menu-->
							<div class="expand-lg collapse" id="footerMenu2">
								<h6 class="letter-spacing-1 mb-4 d-none d-lg-block">Your account</h6>
								<ul class="list-unstyled text-sm pt-2 pt-lg-0">
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/login">Login</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/register">Register</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/cart">Cart</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/checkout">Checkout</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-bs-toggle="collapse" href="#footerMenu1" aria-expanded="false" aria-controls="footerMenu1">Company<span class="block-toggler-icon"></span></a>
							<!-- Footer collapsible menu-->
							<div class="expand-lg collapse" id="footerMenu1">
								<h6 class="letter-spacing-1 mb-4 d-none d-lg-block">Company</h6>
								<ul class="list-unstyled text-sm pt-2 pt-lg-0">
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/shop">Shop</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/about">About Us</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/contact-us">Contact Us</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/refund-policy">Refund Policy</a></li>
									<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/terms">Terms &amp; Conditions</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="py-4 fw-light" style="background: #EDEDED;">
		<div class="container">
			<div class="row align-items-center text-sm">
				<div class="col-lg-4 text-center text-lg-start">
					<p class="mb-lg-0">© 2024, Your company.  All rights reserved.</p>
				</div>
				<div class="col-lg-8">
					<ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-lg-end">
						<li class="list-inline-item"> <a class="text-reset" href="/">Home</a></li>
						<li class="list-inline-item"> <a class="text-reset" href="/about">About</a></li>
						<li class="list-inline-item"> <a class="text-reset" href="/shop">Shop</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
		{{--This will show notifications via JavaScript--}}
	    <cc-notification class="notification hide"></cc-notification>
    </div>

    <!-- Custom js -->
    @vite(['resources/js/app.js'])

    <!-- Bootstrap JS and dependencies -->
    <script src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/vendor/jquery/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>

</body>
</html>
