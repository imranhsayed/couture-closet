<div class="col-lg-4 col-sm-6 p-lg-5">
	<h6 class="dropdown-header h6 ps-lg-0">Shop</h6>
	<a class="dropdown-item ps-lg-0" href="/shop">All Products</a>
	<h6 class="dropdown-header h6 ps-lg-0">Demography</h6>
	@if(isset($categories))
		@foreach ($categories as $category)
			<a class="dropdown-item ps-lg-0" href="/shop?category={{ $category->value }}">{{ $category->value }}</a>
		@endforeach
	@else
		<p>No categories found.</p>
	@endif
</div>
<div class="col-lg-4 col-sm-6 p-lg-5">
	<h6 class="dropdown-header h6 ps-lg-0">Brand</h6>
	@if(isset($brands))
		@foreach($brands as $brand)
			<a class="dropdown-item ps-lg-0" href="/shop?brand={{ $brand->value }}">{{ $brand->value}}</a>
		@endforeach
	@else 
		<p>No Brand found.</p>
	@endif
</div>