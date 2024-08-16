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
                            <h3 class="text-bold mb-10">{{ $currentOrderCount ?? 0 }}</h3>
                            @if ($orderRateOfChange > 0)
                                <p class="text-sm text-success"><i
                                        class="lni lni-arrow-up"></i>{{ (round($orderRateOfChange ?? '0', 2)) . '%' }}
                                    ,<span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @elseif($orderRateOfChange < 0)
                                <p class="text-sm text-danger"><i
                                        class="lni lni-arrow-down"></i>{{ (round($orderRateOfChange ?? '0', 2)) . '%' }}
                                    <span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @else
                                <p class="text-sm"><i class="lni"></i>{{ ($orderRateOfChange ?? '0') . '%' }} <span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @endif
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
                            <h3 class="text-bold mb-10">{{ '$' . number_format($currentTotalRevenue ?? '0', 2) }}</h3>
                            @if ($totalRevenueOfChange > 0)
                                <p class="text-sm text-success"><i
                                        class="lni lni-arrow-up"></i>{{ (round($totalRevenueOfChange ?? '0', 2)) . '%' }}
                                    ,<span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @elseif($totalRevenueOfChange < 0)
                                <p class="text-sm text-danger"><i
                                        class="lni lni-arrow-down"></i>{{ (round($totalRevenueOfChange ?? '0', 2)) . '%' }}
                                    <span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @else
                                <p class="text-sm"><i class="lni"></i>{{ ($totalRevenueOfChange ?? '0') . '%' }} <span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @endif
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
                            <h3 class="text-bold mb-10">{{ $productCount ?? 0 }}</h3>
                            <p class="text-sm text-success">
                                <i class="lni lni-layers"></i> {{ $categoryCount }}
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
                            <h6 class="mb-10">Total Users</h6>
                            <h3 class="text-bold mb-10">{{ $currentTotalUserCount ?? 0 }}</h3>
                            @if ($userRateOfChange > 0)
                                <p class="text-sm text-success"><i
                                        class="lni lni-arrow-up"></i>{{ (round($userRateOfChange ?? '0', 2)) . '%' }}
                                    ,<span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @elseif($userRateOfChange < 0)
                                <p class="text-sm text-danger"><i
                                        class="lni lni-arrow-down"></i>{{ (round($userRateOfChange ?? '0', 2)) . '%' }}
                                    <span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @else
                                <p class="text-sm"><i class="lni"></i>{{ ($userRateOfChange ?? '0') . '%' }} <span
                                        class="text-gray">(Last 7 Days)</span></p>
                            @endif
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
                                <h3 class="text-bold">{{ '$' . number_format($weeklySales ?? '0', 2) }}</h3>
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
                                        <h6 class="text-sm text-medium">SKU</h6>
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
                                    @foreach($topProducts as $item)
                                        @php
                                            $product = $item->product;
                                            $productImage = $product->primaryImage;
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="{{ $productImage->image_url ?? '' }}" alt="{{ $product->name ?? '' }}"/>
                                                    </div>
                                                    <p class="text-sm">{{ $product->name ?? '' }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm">{{ $product->sku ?? '' }}</p>
                                            </td>
                                            <td>

                                                <p class="text-sm">{{ '$' . number_format(($item->total_quantity ?? 0)  * ($product->price ?? 0), 2) }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm">{{ $item->total_quantity ?? '0' }}</p>
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
                                                            <a class="edit text-danger"
                                                                href="{{ route('admin.products.destroy', [ 'product' => $item->product_id ?? '' ]) }}"
                                                                onclick="event.preventDefault(); function deleteConfirm() {
                                                                let confirmed = confirm('Are you sure you want to delete this product?')
                                                                if (confirmed)
                                                                {
                                                                    document.getElementById('delete-product-form').submit();
                                                                } else {
                                                                    return false;
                                                                }
                                                            }
                                                            deleteConfirm()">
                                                                Delete
                                                            </a>

                                                            <form id="delete-product-form"
                                                                  action="{{ route('admin.products.destroy', [ 'product' => $item->product_id ?? '' ]) }}"
                                                                  method="POST" class="d-none">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="{{ route('admin.products.edit', ['product' => $item->product_id ?? '']) }}" class="text-gray">Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

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
