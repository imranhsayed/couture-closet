@extends('layouts.app')

@section('content')
<section class="hero mt-50 mb-50">
    <div class="container">
        @include('partials.flash')
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0 ">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">User Dashboard</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-30">
            <h1 class="hero-heading">{{ __('Welcome ' . \Auth::user()->first_name . ' ' . \Auth::user()->last_name . '!') }}</h1>
            <div>
                <p class="lead cart-items-count">See Your Account Details in the <span class="fw-bold">tabs</span> below.</p>
            </div>
        </div>
    </div>
</section>
<div class="container px-4">
    <div class="row">
        <div class="col-12">
            <!-- Tabs navigation -->
            <ul class="nav nav-tabs nav-fill bg-dark mb-4" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link activebg text-white" id="user-info-tab" data-bs-toggle="tab"
                        data-bs-target="#user-info" type="button" role="tab" aria-controls="user-info"
                        aria-selected="true">Info
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders"
                        type="button" role="tab" aria-controls="orders" aria-selected="false">Orders
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white" id="addresses-tab" data-bs-toggle="tab"
                        data-bs-target="#addresses" type="button" role="tab" aria-controls="addresses"
                        aria-selected="false">Addresses
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews
                    </button>
                </li>
            </ul>

            <!-- Tabs content -->
            <div class="tab-content" id="profileTabsContent">
                <!-- User info tab -->
                <div class="tab-pane fade show activebg" id="user-info" role="tabpanel" aria-labelledby="user-info-tab">
                    <h3 class="mb-40 mt-40">Your Account Information</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3 border-bottom border-top pt-4">
                            <h5>First Name</h5>
                            <p class="text-muted">{{ \Auth::user()->first_name ?? '' }}</p>
                        </div>
                        <div class="col-md-6 mb-3 border-bottom border-top pt-4">
                            <h5>Last Name</h5>
                            <p class="text-muted">{{ \Auth::user()->last_name ?? '' }}</p>
                        </div>
                        <div class="col-md-6 mb-3 border-bottom">
                            <h5>Email</h5>
                            <p class="text-muted">{{ \Auth::user()->email ?? '' }}</p>
                        </div>
                        <div class="col-md-6 mb-3 border-bottom">
                            <h5>Phone</h5>
                            <p class="text-muted">{{ \Auth::user()->telephone ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <!-- Orders tab -->
                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <h2 class="mb-4">Your Orders</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($orders) > 0)
                                @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $order->order_date ?? '' }}</td>
                                    <td>${{ $order->total_amount ?? '' }}</td>
                                    <td>
                                        <a class="btn btn-outline-dark" href="/order/{{ $order->id }}"
                                            role="button">View Order</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center">No records found!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <nav class="mt-4">{{ $orders->links('pagination::bootstrap-5') }}</nav>
                </div>

                <!-- Addresses tab -->
                <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
                    <div class="d-flex justify-content-between align-items-center mb-40 mt-40">
                        <h3>Your Current Addresses</h3>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addressModal"
                            data-operation="add">
                            <i class="fas fa-plus me-2"></i>Add New Address
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Street</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($userAddresses) > 0)
                                @foreach ($userAddresses as $key => $userAddress)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ Str::limit($userAddress->street ?? '', 10, '...') }}</td>
                                    <td>{{ $userAddress->postal_code ?? '' }}</td>
                                    <td>{{ $userAddress->city ?? '' }}</td>
                                    <td>{{ $userAddress->province ?? '' }}</td>
                                    <td>{{ $userAddress->country ?? '' }}</td>
                                    <td>
                                        @if ($userAddress->is_primary === 1)
                                        <span class="badge rounded-pill bg-success">Default</span>
                                        @else
                                        <a href="{{ route('user.address.default', ['id' => $userAddress->id]) }}"
                                            class="btn btn-outline-dark">Set as Default</a>
                                        @endif
                                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                            data-bs-target="#addressModal" data-operation="edit"
                                            data-id="{{ $userAddress->id }}" data-street="{{ $userAddress->street }}"
                                            data-postal-code="{{ $userAddress->postal_code }}"
                                            data-province="{{ $userAddress->province }}"
                                            data-city="{{ $userAddress->city }}"
                                            data-country="{{ $userAddress->country }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <form action="{{ route('user.address.delete', ['id' => $userAddress->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7" class="text-center">No records found!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <nav class="mt-4">{{ $userAddresses->links('pagination::bootstrap-5') }}</nav>
                    <!-- Address Modal -->
                    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="formModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-white">
                                    <h5 class="modal-title" id="modal_title">Add Address</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="user_address" class="form">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="street" class="form-label">Street</label>
                                            <input type="text" class="form-control" id="street" name="street" required>
                                            <span id="street_error" class="text-danger"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="postal_code" class="form-label">Postal Code</label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code"
                                                required>
                                            <span id="postal_code_error" class="text-danger"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="province" class="form-label">Province</label>
                                            <select id="province" class="form-select" name="province" required>
                                                <option value="">Select a province</option>
                                                <option value="AB">Alberta</option>
                                                <option value="BC">British Columbia</option>
                                                <!-- Add other provinces here -->
                                            </select>
                                            <span id="province_error" class="text-danger"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="city" name="city" required>
                                            <span id="city_error" class="text-danger"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                required>
                                            <span id="country_error" class="text-danger"></span>
                                        </div>
                                        <input type="hidden" id="address_id" name="address_id" value="">
                                        <button type="submit" class="btn btn-dark w-100">Save Address</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <h2 class="mb-4">Your Reviews</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($productReviews) > 0)
                                @foreach ($productReviews as $key => $productReview)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $productReview->title ?? '' }}</td>
                                    <td>{{ $productReview->created_at ?? '' }}</td>
                                    @if ($productReview->rating == 0 || empty($productReview->rating))
                                    <td>
                                        {!! str_repeat('&#9734;', 5) !!}
                                    </td>
                                    @else
                                    <td>
                                        {!! str_repeat('&#9733;', $productReview->getRawOriginal('rating')) .
                                        str_repeat('&#9734;', (5 - $productReview->getRawOriginal('rating'))) !!}
                                    </td>
                                    @endif

                                    @if (empty($productReview->review_text))
                                    <td>
                                        <a class="btn btn-primary btn-sm user_profile_btn"
                                            href="{{ route('product.leave.review', ['productId' => $productReview->product_id, 'orderId' => $productReview->order_id]) }}"
                                            role="button">Leave a review</a>
                                    </td>
                                    @else
                                    <td>
                                        {{ Str::limit($productReview->review_text ?? '', 20, '...') }}
                                    </td>
                                    @endif
                                    <td>
                                        @if (empty($productReview->review_text))
                                        <a class="btn btn-outline-primary"
                                            href="{{ route('product.leave.review', ['productId' => $productReview->product_id, 'orderId' => $productReview->order_id]) }}"
                                            role="button">Leave a review</a>
                                        @else
                                        {{ Str::limit($productReview->review_text ?? '', 20, '...') }}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">No records found!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <nav class="mt-4">{{ $productReviews->links('pagination::bootstrap-5') }}</nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection