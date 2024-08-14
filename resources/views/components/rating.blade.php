@props( [
	'rating' => 0,
] )

@switch($rating)
	@case(1)
		<h6>★☆☆☆☆</h6>
		@break

	@case(2)
		<h6>★★☆☆☆</h6>
		@break

	@case(3)
		<h6>★★★☆☆</h6>
		@break

	@case(4)
		<h6>★★★★☆</h6>
		@break

	@case(5)
		<h6>★★★★★</h6>
		@break

	@default
		<h6>No Rating</h6>
@endswitch

