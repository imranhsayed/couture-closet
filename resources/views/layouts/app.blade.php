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

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
	    <nav class="navbar navbar-expand-lg bg-transparent border-0 shadow-0 navbar-light px-lg-5 ">
		    <a class="navbar-brand" href="index.html">
			    <img src="/images/site-logo.svg" alt="Site logo" width="200" height="50">
		    </a>

		    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
			    <svg class="svg-icon navbar-icon">
				    <use xlink:href="#menu-hamburger-1"> </use>
			    </svg>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarContent">
			    <ul class="navbar-nav mt-3 mt-lg-0">
				    <li class="nav-item dropdown active">
					    <a class="nav-link dropdown-toggle" id="homeDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
					    <div class="dropdown-menu dropdown-menu-animated" aria-labelledby="homeDropdown"><a class="dropdown-item" href="index.html">Home 1 - Fashion </a><a class="dropdown-item" href="index-2.html">Home 2 - Fashion </a><a class="dropdown-item" href="index-3.html">Home 3 - Design <span class="badge badge-primary-light ms-1">New</span> </a><a class="dropdown-item" href="index-4.html">Home 4 - Design <span class="badge badge-primary-light ms-1">New</span> </a>
					    </div>
				    </li>
				    <li class="nav-item">
					    <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">About</a>
				    </li>
				    <li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" id="shopDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
					    <div class="dropdown-menu dropdown-menu-md dropdown-menu-animated py-0" aria-labelledby="shopDropdown">
						    <div class="row">
							    <div class="col-lg-4 col-sm-6 p-lg-5">
								    <h6 class="dropdown-header h6 ps-lg-0">Shop pages</h6>
								    <a class="dropdown-item ps-lg-0" href="category-full.html">Full width </a><a class="dropdown-item ps-lg-0" href="category-full-sidebar.html">Full width with category menu </a><a class="dropdown-item ps-lg-0" href="category-big-products.html">Full width with big products </a><a class="dropdown-item ps-lg-0" href="category-boxed.html">Fixed width </a><a class="dropdown-item ps-lg-0" href="category-sidebar.html">Fixed width &amp; sidebar </a><a class="dropdown-item ps-lg-0" href="category-masonry.html">Fixed width &amp; masonry layout<span class="badge badge-primary-light ms-1">New</span> </a><a class="dropdown-item ps-lg-0" href="category-categories.html">Subcategories </a>
							    </div>
							    <div class="col-lg-4 col-sm-6 p-lg-5">
								    <h6 class="dropdown-header h6 ps-lg-0">Product pages</h6>
								    <a class="dropdown-item ps-lg-0" href="detail-1.html">Product with sticky info </a><a class="dropdown-item ps-lg-0" href="detail-2.html">Product with background </a><a class="dropdown-item ps-lg-0" href="detail-3.html">Product standard  </a>
							    </div>
							    <div class="col-lg-4 d-none d-lg-block position-relative"><img class="bg-image" src="https://d19m59y37dris4.cloudfront.net/varkala/2-1/img/product/kyle-loftus-596319-unsplash-cropped.jpg" alt=""></div>
						    </div>
					    </div>
				    </li>
			    </ul>
			    <ul class="list-inline mb-0 d-none d-lg-block">
				    <li class="list-inline-item me-3"><a class="text-dark text-primary-hover" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
						    <svg class="svg-icon navbar-icon">
							    <use xlink:href="#avatar-1"> </use>
						    </svg></a></li>
				    <li class="list-inline-item position-relative me-3"><a class="text-dark text-primary-hover" href="#" data-bs-toggle="modal" data-bs-target="#sidebarCart">
						    <svg class="svg-icon navbar-icon">
							    <use xlink:href="#retail-bag-1"> </use>
						    </svg>
						    <div class="navbar-icon-badge">5</div></a></li>
			    </ul>
		    </div>
	    </nav>

        <main>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </main>

<footer class="py-5">
	<div class="py-6 bg-black text-white">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 pe-lg-5 pe-xl-6 mb-5 mb-lg-0">
					<a href="/"><img src="/images/site-logo-white.svg" alt="Site logo" width="200" height="50"></a>
					<p class="text-sm mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum dolor doloribus harum, hic incidunt maxime reiciendis repellendus temporibus velit? Commodi, earum eveniet illum laudantium maxime minus nam pariatur voluptatum.</p>
				</div>
				<div class="col-lg-7">
					<div class="row">
						<div class="col-lg-4">
							<a class="d-lg-none block-toggler my-3" data-bs-toggle="collapse" href="#footerMenu0" aria-expanded="false" aria-controls="footerMenu0">Shop<span class="block-toggler-icon"></span></a>
							<!-- Footer collapsible menu-->
							<div class="expand-lg collapse" id="footerMenu0">
								<h6 class="letter-spacing-1 mb-4 d-none d-lg-block">Shop</h6>
								<ul class="list-unstyled text-sm pt-2 pt-lg-0">
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">For Women</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">For Men</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Stores</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Our Blog</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Shop</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-bs-toggle="collapse" href="#footerMenu2" aria-expanded="false" aria-controls="footerMenu2">Your account<span class="block-toggler-icon"></span></a>
							<!-- Footer collapsible menu-->
							<div class="expand-lg collapse" id="footerMenu2">
								<h6 class="letter-spacing-1 mb-4 d-none d-lg-block">Your account</h6>
								<ul class="list-unstyled text-sm pt-2 pt-lg-0">
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Login</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Register</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Wishlist</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Our Products</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Checkouts</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-bs-toggle="collapse" href="#footerMenu1" aria-expanded="false" aria-controls="footerMenu1">Company<span class="block-toggler-icon"></span></a>
							<!-- Footer collapsible menu-->
							<div class="expand-lg collapse" id="footerMenu1">
								<h6 class="letter-spacing-1 mb-4 d-none d-lg-block">Company</h6>
								<ul class="list-unstyled text-sm pt-2 pt-lg-0">
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Login</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Register</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Wishlist</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Our Products</a></li>
									<li class="mb-2"> <a class="text-muted text-dark-hover link-animated" href="#">Checkouts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="py-4 fw-light">
		<div class="container">
			<div class="row align-items-center text-sm">
				<div class="col-lg-4 text-center text-lg-start">
					<p class="mb-lg-0">© 2024, Your company.  All rights reserved.</p>
				</div>
				<div class="col-lg-8">
					<ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-lg-end">
						<li class="list-inline-item"> <a class="text-reset" href="#">Home</a></li>
						<li class="list-inline-item"> <a class="text-reset" href="#">About</a></li>
						<li class="list-inline-item"> <a class="text-reset" href="#">Shop</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

    </div>

    <!-- Bootstrap JS and dependencies -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
<svg width="0" height="0" class="hidden">
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="menu-hamburger-1">
		<title>Menu Hamburger</title>
		<desc>A line styled icon from Orion Icon Library.</desc>
		<path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M2 14h60M2 32h36" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
		<path data-name="layer1" fill="none" stroke="#202020" stroke-miterlimit="10" d="M2 50h60" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="heart-1">
		<title>Heart</title>
		<desc>A line styled icon from Orion Icon Library.</desc>
		<path data-name="layer1" d="M47 5c-6.5 0-12.9 4.2-15 10-2.1-5.8-8.5-10-15-10A15 15 0 0 0 2 20c0 13 11 26 30 39 19-13 30-26 30-39A15 15 0 0 0 47 5z" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-width="3" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="retail-bag-1">
		<title>Retail Bag</title>
		<desc>A line styled icon from Orion Icon Library.</desc>
		<path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M4 14h56v48H4zm2 0V2h52v12" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
		<path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M6.2 2.1L16 8 6 14M57.8 2.1L48 8l10 6" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
		<path data-name="layer1" d="M42 24a10 10 0 0 1-20 0" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
	</symbol>
</svg>
</html>
