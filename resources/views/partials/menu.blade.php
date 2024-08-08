<div class="col-lg-4">
	<a class="d-lg-none block-toggler my-3" data-bs-toggle="collapse" href="#footerMenu0" aria-expanded="false" aria-controls="footerMenu0">Shop<span class="block-toggler-icon"></span></a>
	<!-- Footer collapsible menu-->
	<div class="expand-lg collapse" id="footerMenu0">
		<h6 class="letter-spacing-1 mb-4 d-none d-lg-block">Shop</h6>
		<ul class="list-unstyled text-sm pt-2 pt-lg-0">
			@if(isset($categories))
			@foreach ($categories as $category)
			<li class="mb-2"> <a class="text-muted text-light-hover link-animated" href="/shop{category={{ $category->value }}}">{{ $category->value }}</a></li>
			@endforeach
			@else
			<p>Default</p>
			@endif
		</ul>
	</div>
</div>