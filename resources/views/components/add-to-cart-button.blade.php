@props( [
	'product_id'   => '',
	'quantity'     => '',
	'button_class' => '',
] )

<cc-add-to-cart-button product-id="{{ $product_id }}" quantity="{{ $quantity }}" class="d-none d-sm-inline">
	<button class="{{ $button_class }}">Add too cart</button>
	<a href="#">Add to Cart</a>
</cc-add-to-cart-button>
