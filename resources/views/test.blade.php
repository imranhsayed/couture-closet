<!-- Sidebar-->
<div class="sidebar col-xl-3 col-lg-4 pe-xl-5 order-lg-1">
	<div class="sidebar-block px-3 px-lg-0">
		<a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
			Product Categories<span class="block-toggler-icon"></span>
		</a>
		<div class="expand-lg collapse" id="categoriesMenu" role="menu">
			<h5 class="sidebar-heading d-none d-lg-block">Category</h5>
			<ul class="list-unstyled sidebar-icon-menu mt-4 mt-lg-0">
				<li class="sidebar-icon-menu-item">
					<div class="d-flex align-items-center">
						<img src="{{ asset('images/man.svg') }}" alt="Men's" style="width: 28.85px; height: 32.36px;">
						<a  class="sidebar-icon-menu-link fw-bold me-2" href="#">Men's</a>
						<span class="sidebar-icon-menu-count"> 120</span>
					</div>
				</li>
				<li class="sidebar-icon-menu-item">
					<div class="d-flex align-items-center">
						<img src="{{ asset('images/woman.svg') }}" alt="Women's" style="width: 28.85px; height: 32.36px;">
						<a class="sidebar-icon-menu-link fw-bold me-2" href="#">Women's</a>
						<span class="sidebar-icon-menu-count"> 55</span>
					</div>
				</li>
				<li class="sidebar-icon-menu-item">
					<div class="d-flex align-items-center">
						<img src="{{ asset('images/kids.svg') }}" alt="Kids" style="width: 28.85px; height: 32.36px;">
						<a class="sidebar-icon-menu-link fw-bold me-2" href="#">Kid's</a>
						<span class="sidebar-icon-menu-count"> 33</span>
					</div>
				</li>
				<li class="sidebar-icon-menu-item">
					<div class="d-flex align-items-center">
						<img src="{{ asset('images/accessories.svg') }}" alt="Accessories" style="width: 28.85px; height: 32.36px;">
						<a class="sidebar-icon-menu-link fw-bold me-2" href="#">Accessories</a>
						<span class="sidebar-icon-menu-count"> 13</span>
					</div>
				</li>
				<li class="sidebar-icon-menu-item">
					<div class="d-flex align-items-center">
						<img src="{{ asset('images/bags.svg') }}" alt="Bags" style="width: 28.85px; height: 32.36px;">
						<a class="sidebar-icon-menu-link fw-bold me-2" href="#">Bags</a>
						<span class="sidebar-icon-menu-count"> 12</span>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="sidebar-block px-3 px-lg-0"> <a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size<span class="block-toggler-icon"></span></a>
		<!-- Size filter menu-->
		<div class="expand-lg collapse" id="sizeFilterMenu">
			<h5 class="sidebar-heading d-none d-lg-block">Size </h5>
			<form class="mt-4 mt-lg-0" action="#">
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="size0" type="radio" name="size" checked="">
						<label class="form-check-label" for="size0">Small</label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="size1" type="radio" name="size">
						<label class="form-check-label" for="size1">Medium</label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="size2" type="radio" name="size">
						<label class="form-check-label" for="size2">Large</label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="size3" type="radio" name="size">
						<label class="form-check-label" for="size3">X-Large</label>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand<span class="block-toggler-icon"></span></a>
		<!-- Brand filter menu - this menu has .show class, so is expanded by default-->
		<div class="expand-lg collapse show" id="brandFilterMenu">
			<h5 class="sidebar-heading d-none d-lg-block">Brands </h5>
			<form class="mt-4 mt-lg-0" action="#">
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="brand0" type="checkbox" name="clothes-brand" checked="">
						<label class="form-check-label" for="brand0">Calvin Klein <small>(18)</small></label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="brand1" type="checkbox" name="clothes-brand" checked="">
						<label class="form-check-label" for="brand1">Levi Strauss <small>(30)</small></label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="brand2" type="checkbox" name="clothes-brand">
						<label class="form-check-label" for="brand2">Hugo Boss <small>(120)</small></label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="brand3" type="checkbox" name="clothes-brand">
						<label class="form-check-label" for="brand3">Tomi Hilfiger <small>(70)</small></label>
					</div>
				</div>
				<div class="mb-3 mb-1">
					<div class="form-check">
						<input class="form-check-input" id="brand4" type="checkbox" name="clothes-brand">
						<label class="form-check-label" for="brand4">Tom Ford  <small>(110)</small></label>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Sidebar end-->
