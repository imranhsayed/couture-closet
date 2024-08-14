@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Create Custom Order</h2>
                        <a class="main-btn primary-btn btn-hover btn-sm" href="{{ route('admin.orders.index') }}">
                            Back to Orders
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <form action="{{ route('admin.orders.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xxl-4">
                                <div class="input-style-1">
                                    <label for="user_id">Enter User's ID</label>
                                    <input type="number" id="user_id" name="user_id" value="{{ old('user_id') }}" required>
                                    @error('user_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-8">
                                <div class="select-style-1">
                                    <label for="product_id">Select Product</label>
                                    <div class="select-position">
                                        <select name="product_id" id="product_id" class="form-control select2 light-bg" required>
                                            <option value="">-- Select Product --</option>
                                            @foreach($products as $product)
                                            <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                                                {{ $product->name }} - ${{ $product->price }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('product_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="email">Enter Order Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4">
                                <div class="input-style-1">
                                    <label for="quantity">Enter Quantity</label>
                                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity', 1) }}" min="1" required>
                                    @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4">
                                <div class="select-style-1">
                                    <label for="size">Select Size</label>
                                    <div class="select-position">
                                        <select name="size" id="size" class="light-bg" required>
                                            <option value="">-- Select Size --</option>
                                            @foreach($sizes as $id => $size)
                                                <option value="{{ $size }}">{{ $size }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('size')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-4">
                                <div class="select-style-1">
                                    <label for="provincial_tax_rate_id">Select Tax Region</label>
                                    <div class="select-position">
                                        <select name="provincial_tax_rate_id" id="provincial_tax_rate_id" class="light-bg" required>
                                            <option value="">-- Select Province --</option>
                                            @foreach($provinces as $province)
                                            <option value="{{ $province->id }}" data-rate="{{ $province->total_tax_rate }}">
                                                {{ $province->province_name }} x {{ $province->total_tax_rate }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('provincial_tax_rate_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xxl-6">
                                <div class="input-style-1">
                                    <label for="shipping_address">Shipping Address</label>
                                    <textarea id="shipping_address" name="shipping_address" required>{{ old('shipping_address') }}</textarea>
                                    @error('shipping_address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="sub_amount">Order Value</label>
                                    <input type="text" id="sub_amount" name="sub_amount" readonly>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="total_amount">Total Value</label>
                                    <input type="text" id="total_amount" name="total_amount" readonly>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="main-btn primary-btn btn-hover">Create Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const productSelect = document.getElementById('product_id');
    const quantityInput = document.getElementById('quantity');
    const taxSelect = document.getElementById('provincial_tax_rate_id');
    const subAmountInput = document.getElementById('sub_amount');
    const totalAmountInput = document.getElementById('total_amount');

    productSelect.addEventListener('change', updateTotalAmount);
    quantityInput.addEventListener('input', updateTotalAmount);
    taxSelect.addEventListener('change', updateTotalAmount);

    function updateTotalAmount() {
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const price = selectedOption ? parseFloat(selectedOption.dataset.price) : 0;
        const quantity = parseInt(quantityInput.value) || 0;
        const taxRate = parseFloat(taxSelect.options[taxSelect.selectedIndex].dataset.rate) || 0;

        const subAmount = price * quantity;
        const totalAmount = subAmount * (1 + taxRate);

        subAmountInput.value = subAmount.toFixed(2);
        totalAmountInput.value = totalAmount.toFixed(2);
    }
});
</script>
@endsection