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
                        <a class="main-btn primary-btn btn-hover btn-sm" href="{{ route('admin.reviews.index') }}">
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
                        <h6>Edit Product Form</h6>
                    </div>
                    <form action="{{ route('admin.reviews.update', $review) }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <input type="hidden" id="review_id" name="review_id" value="{{ $review->id ?? ''}}">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Title</label>
                                    <input type="text" id="title" name="title" placeholder="title"
                                           value="{{ old( 'title', $review->title ?? '' ) }}" required>
                                    <x-val-error field="title"/>
                                </div>
                            </div>

	                        <div class="col-12">
		                        <div class="input-style-1">
			                        <label>Description</label>
			                        <textarea id="review_text" name="review_text" placeholder="review_text" rows="6"
			                                  required>{{ old( 'review_text', $review->review_text ?? '' ) }}</textarea>
			                        <x-val-error field="review_text"/>
		                        </div>
	                        </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Rating</label>
                                    <input type="number" id="rating" min="1" max="5" name="rating" placeholder="5"
                                           value="{{ old( 'rating', $review->rating ?? '' ) }}"
                                           step="1" required>
                                    <x-val-error field="rating"/>
                                </div>
                            </div>

	                        <div class="col-12">
		                        <div class="input-style-1">
			                        <label>Is Approved</label>
			                        <select class="form-select focus-shadow-0" id="is_approved" name="is_approved" required>
				                        <option value="0" {{ old('is_approved', $review->is_approved) == 0 ? 'selected' : '' }}>No</option>
				                        <option value="1" {{ old('is_approved', $review->is_approved) == 1 ? 'selected' : '' }}>Yes</option>
			                        </select>
			                        <x-val-error field="is_approved"/>
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
