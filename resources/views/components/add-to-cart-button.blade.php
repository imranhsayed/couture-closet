@props( [
	'product_id'   => '',
	'quantity'     => '',
	'button_class' => '',
	'size'         => ''
] )

<cc-add-to-cart-button size="{{ $size }}" product-id="{{ $product_id }}" quantity="{{ $quantity }}" class="the-add-to-cart-button d-sm-inline">
	<button class="{{ $button_class }}" style="border: none; background: none; background-image: none;">Add to cart</button>
</cc-add-to-cart-button>
