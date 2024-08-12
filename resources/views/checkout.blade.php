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

<cc-checkout class="container pb-6" cart="">
    <div class="row">
        <div class="col-lg-7 pe-xl-6">
            <form class="checkout-form" action="#">
                <h5 class="text-primary mb-5">Address </h5>
	            <div class="row">
		            <div class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="fullname">Full Name</label>
			            <input class="form-control form-control-underlined ps-0" type="text" name="fullname"
			                   id="fullname">
			            <div data-lastpass-icon-root=""
			                 style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
			            </div>
		            </div>
		            <div class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="emailaddress">Email Address</label>
			            <input class="form-control form-control-underlined ps-0" type="text" name="emailaddress"
			                   id="emailaddress">
		            </div>
		            <div class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="street_billing">Street</label>
			            <input class="form-control form-control-underlined ps-0" type="text" name="street_billing"
			                   id="street_billing">
		            </div>
		            <div class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="city_billing">City</label>
			            <input class="form-control form-control-underlined ps-0" type="text" name="city_billing"
			                   id="city_billing">
		            </div>
		            <div class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="zip_billing">Post Code</label>
			            <input class="form-control form-control-underlined ps-0" type="text" name="zip_billing"
			                   id="zip_billing">
		            </div>
		            <cc-province-select class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="state_billing">Province</label>
			            <select class="form-select" name="state_billing" id="state_billing">
				            <option value="">Select your province</option>
				            <option value="AB">Alberta (AB)</option>
				            <option value="BC">British Columbia (BC)</option>
				            <option value="MB">Manitoba (MB)</option>
				            <option value="NB">New Brunswick (NB)</option>
				            <option value="NL">Newfoundland and Labrador (NL)</option>
				            <option value="NS">Nova Scotia (NS)</option>
				            <option value="ON">Ontario (ON)</option>
				            <option value="PE">Prince Edward Island (PE)</option>
				            <option value="QC">Quebec (QC)</option>
				            <option value="SK">Saskatchewan (SK)</option>
				            <option value="NT">Northwest Territories (NT)</option>
				            <option value="NU">Nunavut (NU)</option>
				            <option value="YT">Yukon (YT)</option>
			            </select>
		            </cc-province-select>
		            <div class="mb-3 col-md-6 mb-4">
			            <label class="form-label" for="phonenumber_billing">Phone Number</label>
			            <input class="form-control form-control-underlined ps-0" type="text"
			                   name="phonenumber_billing" id="phonenumber_billing">
		            </div>
		            <div class="mb-3 col-12 mt-3">
			            <div class="form-check">
				            <input class="form-check-input" id="show-shipping-address" type="checkbox"
				                   name="show-shipping-address" data-bs-toggle="collapse"
				                   data-bs-target="#shippingAddress">
				            <label class="form-check-label align-middle" for="show-shipping-address">Use a different
					            shipping address</label>
			            </div>
		            </div>
	            </div>
                <!-- Shipping Address-->
                <div class="collapse" id="shippingAddress">
                    <h5 class="text-primary my-4">Shipping address </h5>
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
			                <label class="form-label" for="zip_shipping">Post Code</label>
			                <input class="form-control form-control-underlined ps-0" type="text" name="zip_shipping"
			                       id="zip_shipping">
		                </div>
		                <div class="mb-3 col-md-6 mb-4">
			                <label class="form-label" for="state_shipping">Province</label>
			                <select class="form-select" name="state_shipping" id="state_shipping">
				                <option value="">Select your province</option>
				                <option value="AB">Alberta (AB)</option>
				                <option value="BC">British Columbia (BC)</option>
				                <option value="MB">Manitoba (MB)</option>
				                <option value="NB">New Brunswick (NB)</option>
				                <option value="NL">Newfoundland and Labrador (NL)</option>
				                <option value="NS">Nova Scotia (NS)</option>
				                <option value="ON">Ontario (ON)</option>
				                <option value="PE">Prince Edward Island (PE)</option>
				                <option value="QC">Quebec (QC)</option>
				                <option value="SK">Saskatchewan (SK)</option>
				                <option value="NT">Northwest Territories (NT)</option>
				                <option value="NU">Nunavut (NU)</option>
				                <option value="YT">Yukon (YT)</option>
			                </select>
		                </div>
		                <div class="mb-3 col-md-6 mb-4">
			                <label class="form-label" for="phonenumber_shipping">Phone Number</label>
			                <input class="form-control form-control-underlined ps-0" type="text" name="phonenumber_shipping"
			                       id="phonenumber_shipping">
		                </div>
		                <!-- /Shipping Address-->
		                <input id="provincial_tax_rate_id" name="provincial_tax_rate_id" type="hidden" value="">
	                </div>
                </div>
                <!-- /Billing Address -->
            </form>

            <!-- Payment Method -->
            <div class="mb-5 mt-5" style="background: #f3f2ec99;">
                <div class="card-header accordion-header">
                    <a class="accordion-link">Card Information</a>
                </div>
                <div>
                    <div class="card-body py-5">
                        <form action="#">
                            <div class="row">
                                <!-- Name -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="card-name">Name on Card</label>
                                    <input class="form-control" type="text" name="card-name" placeholder="Name on card"
                                        id="card-name">
                                    <div data-lastpass-icon-root=""
                                        style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                    </div>
                                </div>
                                <!-- Card Number -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="card-number">Card Number</label>
                                    <input class="form-control" type="text" name="card-number" placeholder="Card number"
                                        id="card-number">
                                </div>
                                <!-- Expiry Date -->
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="expiry-date">Expiry Date</label>
                                    <input class="form-control" type="text" name="expiry-date" placeholder="MM/YY"
                                        id="expiry-date">
                                </div>
                                <!-- CVV -->
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="cvv">CVC/CVV</label>
                                    <input class="form-control" type="text" name="cvv" placeholder="123" id="cvv">
                                </div>
                                <!-- ZIP -->
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="zip">ZIP</label>
                                    <input class="form-control" type="text" name="zip" placeholder="123" id="zip">
                                </div>
                            </div>
                            <!-- Card Images -->
                            <div class="pt-3 pb-3">
                                <img src="/images/mastercard.svg" class="rounded float-start mr-2" alt="mastercard"
                                    width="30" height="30">
                                <img src="/images/visa.svg" class="rounded float-start mr-2" alt="visa" width="30"
                                    height="30">
                                <img src="/images/amex.svg" class="rounded float-start" alt="amex" width="30"
                                    height="30">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /Payment Method -->
        </div>
        <div class="col-lg-5 summary">
            <h5 class="text-primary mb-5">Order Summary</h5>
            <table id="checkout-cart-items" class="table border-bottom border-dark mb-5">
				{{--Content will be added via JS--}}
            </table>
            <p class="text-muted text-sm">Your personal data will be used to process your order,
                support your experience throughout this website, and for other purposes described in our<a
                    href="#">privacy policy</a>.
            </p>
            <div class="d-grid">
                <button id="place-order-btn" class="btn btn-dark btn-lg mb-5 mt-4 text-uppercase fw-normal text-sm"
                    href="/order">Place
                    Your order</button>
            </div>
        </div>
    </div>
</cc-checkout>
@endsection