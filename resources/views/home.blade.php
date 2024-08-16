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
            <h1 class="hero-heading">
                {{ __('Welcome ' . \Auth::user()->first_name . ' ' . \Auth::user()->last_name . '!') }}</h1>
            <div>
                <p class="lead cart-items-count">See Your Account Details in the <span class="fw-bold">tabs</span>
                    below.</p>
            </div>
        </div>
    </div>
</section>
<div class="container px-4">
    <div class="row">
        <div class="col-12">
            <!-- Tabs navigation -->
            <ul class="nav nav-tabs nav-fill bg-primary mb-4" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-white tab-button btn-dark" id="user-info-tab" data-bs-toggle="tab"
                        data-bs-target="#user-info" type="button" role="tab" aria-controls="user-info"
                        aria-selected="true" data-tab-name="info">Info
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white tab-button btn-dark" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders"
                        type="button" role="tab" aria-controls="orders" aria-selected="false" data-tab-name="orders">Orders
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white tab-button btn-dark" id="addresses-tab" data-bs-toggle="tab"
                        data-bs-target="#addresses" type="button" role="tab" aria-controls="addresses"
                        aria-selected="false" data-tab-name="addresses">Addresses
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-white tab-button btn-dark" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab" aria-controls="reviews" aria-selected="false" data-tab-name="reviews">Reviews
                    </button>
                </li>
            </ul>

            <!-- Tabs content -->
            <div class="tab-content mb-100" id="profileTabsContent">
                <!-- User info tab -->
                <div class="tab-pane fade show active" id="user-info" role="tabpanel" aria-labelledby="user-info-tab">
                <div class="d-flex justify-content-between align-items-center mb-40 mt-40">
                    <h3>Your Account Information</h3>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#infoModal" data-operation="edit">
                        Update Info
                    </button>
                </div>

                <!-- User Information display -->
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
                <!-- Modal for editing user info -->
                <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="infoModalLabel">Update Your Information</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('user.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ \Auth::user()->first_name }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ \Auth::user()->last_name }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ \Auth::user()->email }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="telephone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone" value="{{ \Auth::user()->telephone }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Update Info</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Orders tab -->
                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <h3 class="mb-40 mt-40">Your Orders</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
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
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button
                                            class="main-btn primary-btn btn-hover btn btn-primary w-100 text-center"
                                            onclick="window.location.href='{{ route('order-details.show', $order->id) }}'">
                                            View Order
                                        </button>
                                    </div>
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
                        <h3>Current Address(es)</h3>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addressModal"
                            data-operation="add">
                            <!-- <i class="fas fa-plus me-2"></i> -->
                            New Address
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Street</th>
                                    <th>Zip</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Country</th>
                                    <th>Primary</th>
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
                                    </td>
                                    <td>
                                        <button type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#addressModal" data-operation="edit"
                                            data-id="{{ $userAddress->id }}" data-street="{{ $userAddress->street }}"
                                            data-postal-code="{{ $userAddress->postal_code }}"
                                            data-province="{{ $userAddress->province }}"
                                            data-city="{{ $userAddress->city }}"
                                            data-country="{{ $userAddress->country }}">
                                            <img src="{{ asset('images/pencil.svg') }}" style="width:20px; height:auto;"
                                                alt="Delete" class="icon">
                                        </button>
                                        <form action="{{ route('user.address.delete', ['id' => $userAddress->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete this address?')">
                                                <img src="{{ asset('images/trash.svg') }}"
                                                    style="width:20px; height:auto;" alt="Delete" class="icon">
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
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="modal_title">Add Address</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form id="user_address" class="form" action="{{ route('user.address.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" class="form-control" id="street" name="street" required>
                                        <span id="street_error" class="text-danger"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="postal_code" class="form-label">Postal Code</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                                        <span id="postal_code_error" class="text-danger"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="province" class="form-label">Province</label>
                                        <select id="province" class="form-select" name="province" required>
                                            <option value="">Select a province</option>
                                            <option value="AB">Alberta</option>
                                            <option value="BC">British Columbia</option>
                                            <option value="MB">Manitoba</option>
                                            <option value="NB">New Brunswick</option>
                                            <option value="NL">Newfoundland and Labrador</option>
                                            <option value="NS">Nova Scotia</option>
                                            <option value="ON">Ontario</option>
                                            <option value="PE">Prince Edward Island</option>
                                            <option value="QC">Quebec</option>
                                            <option value="SK">Saskatchewan</option>
                                        </select>
                                        <span id="province_error" class="text-danger user_address_error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <select id="city" class="form-select" name="city" disabled required>
                                            <option value="">Select a city</option>
                                        </select>
                                        <span id="city_error" class="text text-danger user_address_error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <select id="country" class="form-select" name="country" required>
                                            <option value="CA">Canada</option>
                                        </select>
                                    </div>
                                    <!-- <input type="hidden" id="address_id" name="address_id" value=""> -->
                                    <button type="submit" class="btn btn-primary w-100">Save Address</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <h3 class="mb-40 mt-40">Your Reviews</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Order Id</th>
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
                                    <td>
                                        <a href="{{ route('order-details.show', ['id' => $productReview->order_id] ) }}"
                                           role="button">{{ '#' . $productReview->order_id ?? '' }}</a>
                                    </td>
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

                                    <td>
                                        {{ Str::limit($productReview->review_text ?? '', 20, '...') }}
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
