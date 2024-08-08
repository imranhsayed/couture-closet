@extends('admin.layouts.app')

@section('content')
<!-- section start -->
<section class="section">
    <div class="container-fluid">
        <!-- title starts -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">{{ $title }}</h2>
                        <button class="main-btn primary-btn btn-hover btn-sm" onclick="window.history.back();">
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- title Ends -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="title mb-30">
                        <h6>New Product Form</h6>
                    </div>
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>SKU</label>
                                    <input type="text" id="sku" name="sku" placeholder="cc-123-1234"
                                           value="{{ old( 'sku', $product->sku ?? '' ) }}" required>
                                    <x-val-error field="sku"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-2">
                                    <label>Name</label>
                                    <input type="text" id="name" name="name" placeholder="product name"
                                           value="{{ old( 'name', $product->name ?? '' ) }}"
                                           required>
                                    <span class="icon"> <i class="lni lni-user"></i> </span>
                                    <x-val-error field="name"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Price</label>
                                    <input type="number" id="price" name="price" placeholder="99.99" step=".01"
                                           value="{{ old( 'price', $product->price ?? '' ) }}"
                                           required>
                                    <x-val-error field="price"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Stock Quantity</label>
                                    <input type="number" id="stock_quantity" name="stock_quantity" placeholder="100"
                                           value="{{ old( 'stock_quantity', $product->stock_quantity ?? '' ) }}"
                                           step="1" required/>
                                    <x-val-error field="stock_quantity"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Images</label>
                                    <input type="file" id="images" name="images[]" multiple required>
                                    <x-val-error field="images.*"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="select-style-1">
                                    <label>Categories</label>
                                    <select id="category-optgroup" id="categories" name="categories[]" multiple required>
                                        @foreach($categories as $key => $category_array)
                                            <optgroup label="{{ $key ?? '' }}">
                                                @foreach($category_array as $category)
                                                        <option value="{{ $category->id ?? '' }}">{{ $category->value ?? '' }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                    <x-val-error field="categories.*"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Description</label>
                                    <textarea id="description" name="description" placeholder="description" rows="6"
                                              required>{{ old( 'description', $product->description ?? '' ) }}</textarea>
                                    <x-val-error field="description"/>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <div class="button-group d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center">
                                        Submit Form
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
</section>
@endsection
