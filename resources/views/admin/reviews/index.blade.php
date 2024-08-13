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
							<a href="{{ route('admin.reviews.leave-review') }}" class="main-btn primary-btn btn-hover btn-sm">
								<i class="lni lni-plus mr-5"></i>New Review</a>
						</div>
					</div>
					<!-- end col -->

					<!-- Search Bar  -->
					<div class="col-md-6">
						<div class="search-wrapper title d-flex input-style-8">
							<form action="{{ route('admin.reviews.search') }}" class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" name="search" type="text" placeholder="Search..."
								       aria-label="Search" value="{{ old('search', request('search')) }}">
								<span class="icon"><i class="lni lni-search-alt"></i></span>
							</form>
						</div>
					</div>

					<!-- end col -->
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
								<h6 class="mb-30">List Reviews</h6>
							</div>
						</div>
						<!-- Responsive Table -->
						<div class="table-responsive">
							<table class="table top-selling-table">
								<thead>
								<tr>
									<th style="width: 10%">
										<h6 class="text-sm text-medium">Id.</h6>
									</th>
									<th style="width: 10%">
										<h6 class="text-sm text-medium">Product Id.</h6>
									</th>
									<th style="width: 10%">
										<h6 class="text-sm text-medium">User Id</h6>
									</th>
									<th style="width: 10%">
										<h6 class="text-sm text-medium">Order Id</h6>
									</th>
									<th class="min-width" style="width: 10%">
										<h6 class="text-sm text-medium">
											Rating
										</h6>
									</th>
									<th class="min-width" style="width: 10%">
										<h6 class="text-sm text-medium">
											Title
										</h6>
									</th>
									<th class="min-width" style="width: 20%">
										<h6 class="text-sm text-medium">
											Review Text
										</h6>
									</th>
									<th class="min-width" style="width: 20%">
										<h6 class="text-sm text-medium">
											Verified Purchase
										</h6>
									</th>
									<th class="min-width" style="width: 20%">
										<h6 class="text-sm text-medium">
											Approved
										</h6>
									</th>
									<th class="min-width" style="width: 10%">
										<h6 class="text-sm text-medium text-end">
											Item Action(s)
										</h6>
									</th>
								</tr>
								</thead>
								<tbody>
								<!--  Row Start  -->
								@foreach($reviews as $review)
									<tr>
										<td>
											<p class="text-sm">{{ $review->id ?? '' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ $review->product_id ?? '' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ $review['user']['first_name'] . ' ' . $review['user']['last_name'] ?? '' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ $review->order_id ?? '' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ $review->rating ?? '' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ $review->title ?? '' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ Str::limit($review->review_text ?? '', 20, '...') }}</p>
										</td>
										<td>
											<p class="text-sm">{{ true === boolval( $review->is_verified_purchase ) ? 'Yes' : 'No' }}</p>
										</td>
										<td>
											<p class="text-sm">{{ true === boolval( $review->is_approved ) ? 'Yes' : 'No' }}</p>
										</td>

										<td>
											<div class="action justify-content-end">
												<!-- Update/View Link-->
												<button class="edit mr-10 more-btn dropdown-toggle" id="moreAction1"
												        data-bs-toggle="dropdown"
												        aria-expanded="false">
													<i class="lni lni-pencil"></i>
												</button>
												<!-- Edit Dropdown -->
												<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
													<li class="dropdown-item">
														<a href="{{ route('admin.reviews.edit', ['review' => $review->id ?? '']) }}" class="text-gray">Edit</a>
													</li>
													<li class="dropdown-item">
														<a href="{{ '/shop/' . $review->product_id . '#reviews' }}" target="_blank" class="text-gray">View</a>
													</li>
												</ul>

												<!-- Delete Link -->
												<a href="#">
													<a class="edit text-danger ml-5" href="{{ route('admin.reviews.destroy', [ 'review' => $review->id ?? '' ]) }}" onclick="event.preventDefault(); function deleteConfirm() {
                                                            let confirmed = confirm('Are you sure you want to delete this review?')
                                                            if (confirmed)
                                                            {
                                                                document.getElementById('delete-review-form').submit();
                                                            } else {
                                                                return false;
                                                            }
                                                        }
                                                        deleteConfirm()">
														<i class="lni lni-trash-can"></i>
													</a>
												</a>

												<form id="delete-review-form" action="{{ route('admin.reviews.destroy', [ 'review' => $review->id ?? '' ]) }}" method="POST" class="d-none">
													@csrf
													@method('delete')
												</form>
											</div>
										</td>
									</tr>
								@endforeach
								<!--  Row End  -->
								</tbody>
							</table>
							<!-- End Table -->

							<!-- product pagination -->
							<nav>
								{{ $reviews->links('pagination::bootstrap-5') }}
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
