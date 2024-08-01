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
		<section class="py-5">
	        <div class="row justify-content-center row-cols-2 g-3">
		        <div class="col">
			        <div class="card">
				        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill">
			        </div>
		        </div>
		        <div class="col">
			        <div class="card">
				        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill">
			        </div>
		        </div>
	        </div>
		</section>

		<section>
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid atque consectetur distinctio doloribus est inventore odit ratione veniam. Dolorum excepturi magnam praesentium qui? Autem dolore ipsa odit officiis repellendus?</p>
		</section>

		<section>
			<ul class="product-categories">
				<li><a href="#">All products</a></li>
				<li><a href="#">Men's</a></li>
				<li><a href="#">Women's</a></li>
				<li><a href="#">Bags</a></li>
				<li><a href="#">Accessories</a></li>
			</ul>
		</section>

		<section class="product-listing py-5">
			<div class="row justify-content-center row-cols-4 g-3">
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
		</section>
	</div>

@endsection
