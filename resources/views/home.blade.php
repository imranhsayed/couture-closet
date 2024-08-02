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
                                aria-selected="true">Orders</button>
                        </li>

                        <!-- Addresses tab -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="addresses-tab" data-bs-toggle="tab" data-bs-target="#addresses"
                                type="button" role="tab" aria-controls="addresses"
                                aria-selected="true">Addresses</button>
                        </li>

                        <!-- Reviews tab -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                                type="button" role="tab" aria-controls="reviews" aria-selected="true">Reviews</button>
                        </li>
                    </ul>

                    <!-- the tab content -->
                    <div class="tab-content" id="order_content">
                        <!-- Orders tab content -->
                        <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <p></p>
                            <h3>Your Orders</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>View Order</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->order_date }}</td>
                                            <td>${{ $order->total_amount }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="/order/{{ $order->id }}" role="button">View Order</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
                                        <th>ID</th>
                                        <th>Street</th>
                                        <th>Postal Code</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>456 Elm St</td>
                                        <td>67890</td>
                                        <td>Los Angeles</td>
                                        <td>CA</td>
                                        <td>USA</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Set As Default</a>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#" class="btn btn-primary btn-sm">Del</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

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
                                            <form>
                                                <div class="mb-3">
                                                    <label for="street" class="form-label">Street</label>
                                                    <input type="text" class="form-control" id="street" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="postal_code" class="form-label">Postal Code</label>
                                                    <input type="text" class="form-control" id="postal_code" required>
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
                                                </div>
                                                <div class="mb-3">
                                                    <label for="city" class="form-label">City</label>
                                                    <select id="city" class="form-select" disabled required>
                                                        <option value="">Select a city</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="country" class="form-label">Country</label>
                                                    <select id="country" class="form-select" required>
                                                        <option value="CA">Canada</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                            <script>
                                                const cities = {
                                                    AB: ["Calgary", "Edmonton", "Red Deer", "Lethbridge", "St. Albert"],
                                                    BC: ["Vancouver", "Victoria", "Kelowna", "Nanaimo", "Kamloops"],
                                                    MB: ["Winnipeg", "Brandon", "Steinbach", "Thompson", "Portage la Prairie"],
                                                    NB: ["Fredericton", "Saint John", "Moncton", "Dieppe", "Miramichi"],
                                                    NL: ["St. John's", "Mount Pearl", "Corner Brook", "Conception Bay South", "Grand Falls-Windsor"],
                                                    NS: ["Halifax", "Dartmouth", "Sydney", "Truro", "New Glasgow"],
                                                    ON: ["Toronto", "Ottawa", "Mississauga", "Hamilton", "London"],
                                                    PE: ["Charlottetown", "Summerside", "Stratford", "Cornwall", "Montague"],
                                                    QC: ["Montreal", "Quebec City", "Laval", "Gatineau", "Longueuil"],
                                                    SK: ["Saskatoon", "Regina", "Prince Albert", "Moose Jaw", "Swift Current"]
                                                };

                                                $(document).ready(function () {
                                                    $('#province').change(function () {
                                                        const selectedProvince = $(this).val();
                                                        const citySelect = $('#city');

                                                        citySelect.empty().append('<option value="">Select a city</option>');

                                                        if (selectedProvince) {
                                                            cities[selectedProvince].forEach(function (city) {
                                                                citySelect.append($('<option></option>').attr('value', city).text(city));
                                                            });
                                                            citySelect.prop('disabled', false);
                                                        } else {
                                                            citySelect.prop('disabled', true);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews tab content -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <p></p>
                            <h3>Your Reviews</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Date</th>
                                        <th>Rating</th>
                                        <th>Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nike Grey Jacket</td>
                                        <td>2024-08-02 10:34:55</td>
                                        <td>
                                            &#9733;&#9733;&#9733;&#9733;&#9734;
                                        </td>
                                        <td>this jacket has a good quality! ... </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nike Jordan AirForce</td>
                                        <td>2024-08-01 10:34:55</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="#" role="button">Leave a rate</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="#" role="button">Leave a review</a>
                                        </td>
                                    </tr>
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