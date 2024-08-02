@props( [
	'product_id' => '',
	'quantity'   => '',
] )

<cc-add-to-cart-button product-id="{{ $product_id }}" quantity="{{ $quantity }}" class="d-none d-sm-inline">
	<button>Add to cart</button>
</cc-add-to-cart-button>
