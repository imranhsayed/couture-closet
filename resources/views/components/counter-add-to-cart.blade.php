@props( [
	'product_id' => 0,
] )

@php
	if ( empty( $product_id ) ) {
		return;
	}
@endphp

<cc-counter-add-to-cart class="input-group w-100 mb-4" product-id="{{ $product_id }}">
	<input id="product-detail-quantity-input" class="form-control form-control-lg detail-quantity" name="items" type="number" value="1" min="1">
	<div class="flex-grow-1">
		<div class="d-grid h-100">
			<button class="btn btn-dark" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
		</div>
	</div>
</cc-counter-add-to-cart>
