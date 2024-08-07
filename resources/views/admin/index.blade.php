@extends('admin.layouts.app')

@section('content')
<!-- section start -->
<section class="section">
    <div class="container-fluid">
        <!-- title-wrapper start -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Admin Dashboard</h2>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- title-wrapper end -->

        <!-- dash Stats section -->
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon purple">
                        <i class="lni lni-cart-full"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Orders</h6>
                        <h3 class="text-bold mb-10">37</h3>
                        <!-- // Query to count new orders in the last 7 days
                            const query = `
                            SELECT COUNT(*) AS newOrders
                            FROM orders
                            WHERE order_date >= NOW() - INTERVAL 7 DAY
                            `; -->
                        <p class="text-sm text-success"><i class="lni lni-arrow-up"></i> +2.00% <span
                                class="text-gray">(Last 7
                Days)</span></p>
                        <!-- query to count new orders in the last 7 days and the previous 7 days
                            const query = `
                                SELECT
                                (SELECT COUNT(*) FROM orders WHERE order_date >= NOW() - INTERVAL 7 DAY) AS currentPeriod,
                                (SELECT COUNT(*) FROM orders WHERE order_date >= NOW() - INTERVAL 7 DAY AND order_date < NOW() - INTERVAL 7 DAY) AS previousPeriod
                            `;
                                const rateOfChange = ((currentPeriod - previousPeriod) / previousPeriod) * 100;
                                const rateOfChangeFormatted = rateOfChange.toFixed(2) + '%';
                            -->
                        <!-- <p class="text-sm text-danger"> <i class="lni lni-arrow-down"></i> -2.00% <span class="text-gray">(1 Week)</span></p> -->
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon success">
                        <i class="lni lni-dollar"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Total Revenue</h6>
                        <h3 class="text-bold mb-10">$1,479</h3>
                        <p class="text-sm text-success">
                            <i class="lni lni-arrow-up"></i> +5.45%
                            <span class="text-gray">This Week</span>
                        </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon primary">
                        <i class="lni lni-t-shirt"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Total Products</h6>
                        <h3 class="text-bold mb-10">567</h3>
                        <p class="text-sm text-success">
                            <i class="lni lni-layers"></i> 35
                            <span class="text-gray">Categories</span>
                        </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon orange">
                        <i class="lni lni-user"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Users</h6>
                        <h3 class="text-bold mb-10">67</h3>
                        <p class="text-sm text-danger">
                            <i class="lni lni-arrow-down"></i> -5.00%
                            <span class="text-gray"> Decrease</span>
                        </p>
                    </div>
                </div>
                <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-10">Weekly Sales</h6>
                            <h3 class="text-bold">$1,479</h3>
                            <!-- Total sales for the last 7 days -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <canvas id="Chart1" style="width: 100%; height: 400px; margin-left: -35px;"></canvas>
                    </div>
                    <!-- End Chart -->
                </div>
            </div>
            <!-- End Col -->
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <!-- dash stats ends -->

        <!-- Top sellers Table card -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap justify-content-between align-items-center">
                        <div class="left">
                            <h6 class="text-medium mb-30">Top 5 Selling Clothes</h6>
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                            <tr>

                                <th>
                                    <h6 class="text-sm text-medium">Products</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">Category</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">Price</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">Sold</h6>
                                </th>
                                <th class="text-end"> Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>
                                    <div class="product">
                                        <div class="image">
                                            <img src="images/product-mini-1.jpg" alt=""/>
                                        </div>
                                        <p class="text-sm">Product</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">Interior</p>
                                </td>
                                <td>
                                    <p class="text-sm">$345</p>
                                </td>
                                <td>
                                    <p class="text-sm">43</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction1">
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Delete</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="product">
                                        <div class="image">
                                            <img src="images/product-mini-2.jpg" alt=""/>
                                        </div>
                                        <p class="text-sm">Product Two</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">Interior</p>
                                </td>
                                <td>
                                    <p class="text-sm">$145</p>
                                </td>
                                <td>
                                    <p class="text-sm">13</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction1">
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Delete</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="product">
                                        <div class="image">
                                            <img src="images/product-mini-3.jpg" alt=""/>
                                        </div>
                                        <p class="text-sm">Product Three</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">Interior</p>
                                </td>
                                <td>
                                    <p class="text-sm">$95</p>
                                </td>
                                <td>
                                    <p class="text-sm">32</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction1">
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Delete</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="product">
                                        <div class="image">
                                            <img src="images/product-mini-4.jpg" alt=""/>
                                        </div>
                                        <p class="text-sm">Product Four</p>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm">Interior</p>
                                </td>
                                <td>
                                    <p class="text-sm">$105</p>
                                </td>
                                <td>
                                    <p class="text-sm">23</p>
                                </td>
                                <td>
                                    <div class="action justify-content-end">
                                        <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <i class="lni lni-more-alt"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="moreAction1">
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Delete</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#0" class="text-gray">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table -->
                    </div>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <!-- Table Card Ends -->
    </div>
    <!-- End container -->
</section>
<!-- section end -->
@endsection
