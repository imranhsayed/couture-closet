@extends('admin.layouts.app')

@section('content')
	<!-- section start -->
	<section class="section">
		<div class="container-fluid">
			<!-- title starts -->
			<div class="title-wrapper pt-30">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="title d-flex align-items-center flex-wrap">
							<h2 class="mr-40">{{ $title }}</h2>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
			<!-- title Ends -->

			<!-- Table Section -->
			<div class="row">
				<!-- Order Col -->
				<div class="col-lg-12">
					<div class="card-style mb-30">
						<div class="title d-flex flex-wrap align-items-center justify-content-between">
							<div class="left">
								<h6 class="mb-30">Select Product to Review</h6>
							</div>
						</div>
						<!-- Responsive Table -->
						<div class="table-responsive">
							<table class="table top-selling-table">
								<thead>
								<tr>
									<th>
										<h6 class="text-sm text-medium">Id.</h6>
									</th>
									<th>
										<h6 class="text-sm text-medium">Image</h6>
									</th>
									<th>
										<h6 class="text-sm text-medium">Name</h6>
									</th>
									<th class="min-width" style="width: 40%">
										<h6 class="text-sm text-medium">Action</h6>
									</th>
								</tr>
								</thead>
								<tbody>
								<!--  Row Start  -->
								@foreach( $products as $product )
									<tr>
										<td>
											<p class="text-sm">{{ $product->id ?? '' }}</p>
										</td>
										<td>
											<img style="aspect-ratio: 1/1; object-fit: cover;" width="50" height="30" class="img-fluid" src="/{{ $product->images[0]['image_url'] ?? '' }}" alt="product">
										</td>
										<td>
											<p class="text-sm">{{ $product->name ?? '' }}</p>
										</td>
										<td>
											<a href="{{ '/shop/' . $product->id . '#reviews' }}" target="_blank" class="primary-btn btn-hover py-2 px-4 radius-4">Create Review</a>
										</td>
									</tr>
								@endforeach
								<!--  Row End  -->
								</tbody>
							</table>
							<!-- End Table -->

							<!-- product pagination -->
							<nav>
								{{ $products->links('pagination::bootstrap-5') }}
							</nav>
						</div>
					</div>
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
	</section>
@endsection
