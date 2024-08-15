@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-dark">Refund Policy</h1>
        <p class="lead text-muted">Thank you for shopping at Couture Closet. If you are not entirely satisfied with your
            purchase, we're here to help.</p>
    </div>

    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="font-weight-bold text-dark">Returns</h2>
            <p class="text-secondary">You have 30 calendar days to return an item from the date you received it. To be
                eligible for a return, your item must be unused and in the same condition that you received it. Your
                item must be in the original packaging. Your item needs to have the receipt or proof of purchase.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="font-weight-bold text-dark">Refunds</h2>
            <p class="text-secondary">Once we receive your item, we will inspect it and notify you that we have received
                your returned item. We will immediately notify you on the status of your refund after inspecting the
                item.</p>
            <p class="text-secondary">If your return is approved, we will initiate a refund to your credit card (or
                original method of payment). You will receive the credit within a certain amount of days, depending on
                your card issuer's policies.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="font-weight-bold text-dark">Shipping</h2>
            <p class="text-secondary">You will be responsible for paying for your own shipping costs for returning your
                item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be
                deducted from your refund.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="font-weight-bold text-dark">Contact Us</h2>
            <p class="text-secondary">If you have any questions on how to return your item to us, contact us at <a
                    href="mailto:support@couturecloset.com"
                    class="text-decoration-none text-dark font-weight-bold">support@couturecloset.com</a>.</p>
        </div>
    </div>
</div>

@endsection