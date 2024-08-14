@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40 mb-3">Update Status</h2>
                        <a class="main-btn primary-btn btn-hover btn-sm mb-3" href="{{ route('admin.orders.index') }}">
                            <i class="lni lni-chevron-left me-2"></i>
                            Back to Orders
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Notice -->
            <div class="row">
                <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                    <div class="alert">
                        <p class="text-sm text-gray"> <span class="fw-bold"> Note:</span>
                            All orders are final.
                            To maintain data integrity, order details may not be edited once placed.
                            You may only update the <span class="fw-bold"> status </span> of the order.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End -->

            <!-- Order Status -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                <h6 class="mb-30">Update Order Status
                                </h6>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <!-- Select Status -->
                                <div class="col-xxl-12">
                                    <div class="select-style-2">
                                        <label for="status" class="mb-2 text-sm">Select Status</label>
                                        <div class="select-position">
                                            <select id="status" name="status" class="light-bg">
                                                <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Processing
                                                </option>
                                                <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Shipped
                                                </option>
                                                <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Delivered
                                                </option>
                                                <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Cancelled
                                                </option>
                                            </select>
                                        </div>
                                        @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /Select Status -->

                                <!-- Submit -->
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                            Update Order Status
                                        </button>
                                    </div>
                                </div>
                                <!-- /Submit -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End -->

            <!-- Shipping details Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                <h6 class="mb-30">Billing &amp; Tax Details</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">User ID</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Full Name</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">E-mail</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Province</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Billing Address</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Value</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Taxes</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Grand Total</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->user->first_name . ' ' . $order->user->last_name }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $province->province_name }}</td>
                                        <td>{{ $order->billing_address }}</td>
                                        <td>$ {{ $order->sub_amount }}</td>
                                        <td>$ {{ $order->total_amount - $order->sub_amount }}</td>
                                        <td>$ {{ $order->total_amount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->


            <!-- Order Details Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                <h6 class="mb-30">Order Details</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">Order ID</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Product</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Description(s)</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Shipping Address</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Category</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Size</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Qty</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Unit Price</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium">Line Price</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->product->description }}</td>
                                        <td>{{ $order->shipping_address }}</td>
                                        <td>{{ optional($item->product->categories->where('name', 'demography')->first())->value ?? 'N/A' }}
                                        </td>
                                        <td>{{ $item->size }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ number_format($item->unit_price, 2) }}</td>
                                        <td>${{ number_format($item->line_price, 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->


        </div>
    </div>
</section>

@endsection