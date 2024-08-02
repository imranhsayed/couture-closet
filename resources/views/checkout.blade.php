@extends('layouts.app')

@section('content')
<section class="hero py-6">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb ps-0 ">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
            <h1 class="hero-heading">Checkout</h1>
            <div>
                <p class="lead text-muted">Are you a returning customer? <a href="#" class="fw-bold">Login</a>.</p>
            </div>
        </div>
    </div>
</section>

<div class="container pb-6">
    <div class="row">
        <div class="col-lg-7 pe-xl-6">
            <form action="checkout-confirmed.html">
                <h5 class="text-primary mb-5">Shipping address </h5>
                <div class="row">
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="fullname_invoice">Full Name</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="fullname_invoice"
                            id="fullname_invoice">
                        <div data-lastpass-icon-root=""
                            style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                        </div>
                    </div>
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="emailaddress_invoice">Email Address</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="emailaddress_invoice"
                            id="emailaddress_invoice">
                    </div>
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="street_invoice">Street</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="street_invoice"
                            id="street_invoice">
                    </div>
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="city_invoice">City</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="city_invoice"
                            id="city_invoice">
                    </div>
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="zip_invoice">ZIP</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="zip_invoice"
                            id="zip_invoice">
                    </div>
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="state_invoice">State</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="state_invoice"
                            id="state_invoice">
                    </div>
                    <div class="mb-3 col-md-6 mb-4">
                        <label class="form-label" for="phonenumber_invoice">Phone Number</label>
                        <input class="form-control form-control-underlined ps-0" type="text" name="phonenumber_invoice"
                            id="phonenumber_invoice">
                    </div>
                    <div class="mb-3 col-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" id="show-shipping-address" type="checkbox"
                                name="show-shipping-address" data-bs-toggle="collapse"
                                data-bs-target="#shippingAddress">
                            <label class="form-check-label align-middle" for="show-shipping-address">Use a different
                                billing address</label>
                        </div>
                    </div>
                    <!-- /Shipping Address-->
                </div>
                <!-- Billing Address-->
                <div class="collapse" id="shippingAddress">
                    <h5 class="text-primary my-4">Billing address </h5>
                    <div class="row">
                        <div class="mb-3 col-md-6 mb-4">
                            <label class="form-label" for="street_shipping">Street</label>
                            <input class="form-control form-control-underlined ps-0" type="text" name="street_shipping"
                                id="street_shipping">
                        </div>
                        <div class="mb-3 col-md-6 mb-4">
                            <label class="form-label" for="city_shipping">City</label>
                            <input class="form-control form-control-underlined ps-0" type="text" name="city_shipping"
                                id="city_shipping">
                        </div>
                        <div class="mb-3 col-md-6 mb-4">
                            <label class="form-label" for="zip_shipping">ZIP</label>
                            <input class="form-control form-control-underlined ps-0" type="text" name="zip_shipping"
                                id="zip_shipping">
                        </div>
                        <div class="mb-3 col-md-6 mb-4">
                            <label class="form-label" for="state_shipping">State</label>
                            <input class="form-control form-control-underlined ps-0" type="text" name="state_shipping"
                                id="state_shipping">
                        </div>
                        <div class="mb-3 col-md-6 mb-4">
                            <label class="form-label" for="phonenumber_shipping">Phone Number</label>
                            <input class="form-control form-control-underlined ps-0" type="text"
                                name="phonenumber_shipping" id="phonenumber_shipping">
                        </div>
                    </div>
                </div>
                <!-- /Billing Address -->
            </form>
        </div>
        <div class="col-lg-5 summary">
            <h5 class="text-primary mb-5">Order Summary</h5>
            <table class="table border-bottom border-dark mb-5">
                <tbody>
                    <tr class="text-sm">
                        <th class="py-4 fw-normal text-muted">Black T-Shirt <span>x 4</span></th>
                        <td class="py-4 text-end text-muted">$260.00</td>
                    </tr>
                    <tr class="text-sm">
                        <th class="py-4 fw-normal text-muted">Zipped Blazers <span>x 3</span></th>
                        <td class="py-4 text-end text-muted">$165.00</td>
                    </tr>
                    <tr class="text-sm">
                        <th class="py-4 fw-normal text-muted">Street Wear Sweater <span>x 3</span></th>
                        <td class="py-4 text-end text-muted">$165.00</td>
                    </tr>
                    <tr>
                        <th class="py-4 text-uppercase fw-bold text-sm align-bottom">Order Subtotal </th>
                        <td class="py-4 text-end fw-bold">$390.00</td>
                    </tr>
                    <tr>
                        <th class="py-5 border-dark" colspan="2">
                            <div class="mb-4">Shipping &amp; Taxes</div>
                            <p class="fw-normal"><img src="pictures/checked.svg" alt="Right Icon" class="ms-2"
                                    style="width: 16px; height: 16px; margin-right:10px;"> GST <span class="fw-bold">
                                    $20</span></p>
                            <p class="fw-normal"><img src="pictures/checked.svg" alt="Right Icon" class="ms-2"
                                    style="width: 16px; height: 16px; margin-right:10px;"> HST <span class="fw-bold">
                                    $17.5</span></p>
                            <p class="fw-normal"><img src="pictures/checked.svg" alt="Right Icon" class="ms-2"
                                    style="width: 16px; height: 16px; margin-right:10px;"> Shipping and Handling <span
                                    class="fw-bold"> $20</span></p>
                        </th>
                    </tr>
                    <tr>
                        <th class="py-4 text-uppercase fw-bold border-dark align-bottom">Total</th>
                        <td class="py-4 text-end h3 fw-bold border-dark">$400.00</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-muted text-sm">Your personal data will be used to process your order,
                support your experience throughout this website, and for other purposes described in our<a
                    href="#">privacy policy</a>.
            </p>
            <div class="d-grid"><a class="btn btn-dark btn-lg mb-5 mt-4 text-uppercase fw-normal text-sm" href="#">Place
                    Your order</a>
            </div>
        </div>
    </div>
</div>
@endsection