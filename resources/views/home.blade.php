@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome ' . \Auth::user()->first_name . ' ' . \Auth::user()->last_name . '!') }}

                        <hr>
                        <!-- the summary of user -->
                        <ul class="nav nav-tabs" id="profile" role="tablist">
                            <!-- Orders tab -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="orders-tab" data-bs-toggle="tab"
                                        data-bs-target="#orders" type="button" role="tab" aria-controls="orders"
                                        aria-selected="true">Orders
                                </button>
                            </li>

                            <!-- Addresses tab -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="addresses-tab" data-bs-toggle="tab"
                                        data-bs-target="#addresses"
                                        type="button" role="tab" aria-controls="addresses"
                                        aria-selected="true">Addresses
                                </button>
                            </li>

                            <!-- Reviews tab -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                                        type="button" role="tab" aria-controls="reviews" aria-selected="true">Reviews
                                </button>
                            </li>
                        </ul>

                        <!-- the tab content -->
                        <div class="tab-content" id="order_content">
                            <!-- Orders tab content -->
                            <div class="tab-pane fade show active" id="orders" role="tabpanel"
                                 aria-labelledby="orders-tab">
                                <p></p>
                                <h3>Your Orders</h3>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>View Order</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (count($orders) > 0)
                                        @foreach ($orders as $key=>$order)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $order->order_date }}</td>
                                                <td>${{ $order->total_amount }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="/order/{{ $order->id }}"
                                                       role="button">View Order</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">No records found!</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                <nav>
                                    {{ $orders->links('pagination::bootstrap-5') }}
                                </nav>
                            </div>

                            <!-- Addresses tab content -->
                            <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
                                <p></p>
                                <h3>Your Addresses
                                    <!-- Button to trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#formModal">
                                        Add New Address
                                    </button>
                                </h3>

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Street</th>
                                        <th>Postal Code</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($userAddresses) > 0)
                                        @foreach ($userAddresses as $key=>$userAddress)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $userAddress->street }}</td>
                                                <td>{{ $userAddress->postal_code }}</td>
                                                <td>{{ $userAddress->city }}</td>
                                                <td>{{ $userAddress->province }}</td>
                                                <td>{{ $userAddress->country }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm">Set As Default</a>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-primary btn-sm">Del</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7">No records found!</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

                                <nav>
                                    {{ $userAddresses->links('pagination::bootstrap-5') }}
                                </nav>

                                <!-- modal for add a new address -->
                                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModalLabel">Add Address
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="user_address" method="POST" action="{{ route( 'user.address.store' ) }}" class="form">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="street" class="form-label">Street</label>
                                                        <input type="text" class="form-control" id="street" required>
                                                        <x-val-error field="street"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="postal_code" class="form-label">Postal Code</label>
                                                        <input type="text" class="form-control" id="postal_code"
                                                               required>
                                                        <x-val-error field="postal_code"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="province" class="form-label">Province</label>
                                                        <select id="province" class="form-select" required>
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
                                                        <x-val-error field="province"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="city" class="form-label">City</label>
                                                        <select id="city" class="form-select" disabled required>
                                                            <option value="">Select a city</option>
                                                        </select>
                                                        <x-val-error field="city"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="country" class="form-label">Country</label>
                                                        <select id="country" class="form-select" required>
                                                            <option value="CA">Canada</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
{{--                                    @if ($errors->any())--}}
{{--                                        $('#formModal').show();--}}
{{--                                    @endif--}}
                                </script>
                            </div>

                            <!-- Reviews tab content -->
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <p></p>
                                <h3>Your Reviews</h3>
                                <table class="table table-striped">
                                    <thead>
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
                                        @foreach ($productReviews as $key=>$productReview)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $productReview->title }}</td>
                                                <td>{{ $productReview->created_at }}</td>
                                                @if ($productReview->rating = 0 || empty($productReview->rating))
                                                    <td>
                                                        {!! str_repeat('&#9734;', 5) !!}
                                                    </td>
                                                @else
                                                    <td>
                                                        {!! str_repeat('&#9733;', $productReview->getRawOriginal('rating')) !!}
                                                    </td>
                                                @endif

                                                @if (empty($productReview->review_text))
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="#" role="button">Leave a
                                                            review</a>
                                                    </td>
                                                @else
                                                    <td>
                                                        {{ Str::limit($productReview->review_text, 20, '...') }}
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">No records found!</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
