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
                        <h2 class="mr-40">{{ $title ?? '' }}</h2>
                        <a class="main-btn primary-btn btn-hover btn-sm" href="{{ route('admin.category.index') }}">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- title Ends -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="title mb-30">
                        <h6>New Category Form</h6>
                    </div>
                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-2">
                                    <label>Name</label>
                                    <input type="text" id="name" name="name" placeholder="category name"
                                           value="{{ old( 'name', $category->name ?? '' ) }}"
                                           >
                                    <x-val-error field="name"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-2">
                                    <label>value</label>
                                    <input type="text" id="value" name="value" placeholder="category value"
                                           value="{{ old( 'name', $category->value ?? '' ) }}"
                                           >
                                    <x-val-error field="name"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Description</label>
                                    <textarea id="description" name="description" placeholder="description" rows="6"
                                              >{{ old( 'description', $category->description ?? '' ) }}</textarea>
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
