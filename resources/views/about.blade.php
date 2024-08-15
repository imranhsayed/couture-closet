@extends('layouts.app')

@section('content')
<section id="company-background" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4 font-weight-bold text-dark">About Couture Closet</h1>
            <p class="lead text-muted">Where fashion meets passion</p>
        </div>

        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <p class="text-justify ">Welcome to Couture Closet, where fashion meets passion. At
                    Couture Closet, we believe that clothing is not just about what you wear; it’s about expressing who
                    you are. Our mission is to provide you with the latest trends and timeless pieces that make you feel
                    confident and stylish.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 mb-5">
                <h3 class="display-6 font-weight-bold text-dark">Our Story</h3>
                <p>Founded in 2024, Couture Closet was born out of a love for fashion and a
                    desire to make high-quality, stylish clothing accessible to everyone. What started as a small
                    boutique has now grown into a thriving online store, offering a curated selection of apparel for
                    every occasion. Our founder, John Doe, envisioned a place where fashion enthusiasts could find
                    unique pieces that reflect their personal style, and that vision continues to drive us today.</p>
                
                <h3 class="font-weight-bold text-dark">Our Collection</h3>
                <p>At Couture Closet, we offer a wide range of clothing, from chic everyday wear
                    to elegant evening dresses. Our collection is carefully selected to ensure that we provide you with
                    the best in quality and style. Whether you’re looking for the perfect outfit for a special occasion
                    or updating your wardrobe with the latest trends, you’ll find something you love at Couture Closet.
                </p>
            </div>
            <div class="col-md-6 text-center px-5">
                <img src="/images/beigh_dress.jpg" alt="Couture Closet Story" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 order-md-2">
                <h3 class="display-6 font-weight-bold text-dark">Our Values</h3>
                <ul class="list-unstyled  text-justify mt-4">
                    <li><strong>Quality:</strong> We are committed to offering high-quality clothing that is both
                        stylish and durable.</li>
                    <li><strong>Customer Satisfaction:</strong> Your satisfaction is our top priority. We strive to
                        provide excellent customer service and a seamless shopping experience.</li>
                    <li><strong>Sustainability:</strong> We believe in sustainable fashion and are dedicated to making
                        environmentally responsible choices in our products and practices.</li>
                </ul>
                
                <p>We invite you to explore our collection and discover the perfect pieces to enhance
                    your wardrobe. Join our community of fashion-forward individuals and stay updated with the latest
                    trends by following us on social media.</p>
                <p class="font-weight-bold text-dark">Thank you for choosing Couture Closet – where your style is our
                    passion.</p>
            </div>
            <div class="col-md-6 order-md-1 text-center px-5">
                <img src="/images/denim_jacket_1.jpg" alt="Couture Closet Collection" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

</section>
@endsection