@extends('layouts.app')

@section('content')
<section class="hero py-6">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/orders') }}">Orders</a></li>
            <li class="breadcrumb-item active">Order #1735</li>
        </ol>
        <div class="hero-content">
            <h1 class="hero-heading">Order #1735</h1>
            <p>Order #1735 was placed on <strong>22/06/2013</strong> and is currently <strong>Being prepared</strong>.</p>
            <p>If you have any questions, please feel free to <a href="{{ url('/contact') }}">contact us</a>, our customer service center is working for you 24/7.</p>
        </div>
    </div>
</section>

<section class="pb-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Order Items</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="path/to/image.jpg" alt="Skull Tee" class="img-fluid" style="width: 50px; height: 50px;">
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Skull Tee</h5>
                                                    <small class="text-muted">Size: Large, Color: Green</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$65.00</td>
                                        <td>4</td>
                                        <td>$260.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="path/to/image.jpg" alt="Transparent Blouse" class="img-fluid" style="width: 50px; height: 50px;">
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Transparent Blouse</h5>
                                                    <small class="text-muted">Size: Medium</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$55.00</td>
                                        <td>3</td>
                                        <td>$165.00</td>
                                    </tr>
                                    <!-- Add more items as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="path/to/profile.jpg" alt="Jane Doe" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                        <h3>Jane Doe</h3>
                        <p class="text-muted">Los Angeles, CA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
