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
                            <h2 class="mr-40">{{ $title }}</h2>
                            <a href="#" class="main-btn primary-btn btn-hover btn-sm">
                                <i class="lni lni-plus mr-5"></i>New Category</a>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- Search Bar  -->
                    <div class="col-md-6">
                        <div class="search-wrapper title d-flex input-style-8">
                            <form action="#" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search..."
                                       aria-label="Search">
                                <span class="icon"><i class="lni lni-search-alt"></i></span>
                            </form>
                        </div>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- title Ends -->

            <!-- Table Section -->
            <div class="row">
                <!-- Order Col -->
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                <h6 class="mb-30">List Categories</h6>
                            </div>
                        </div>
                        <!-- Responsive Table -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">
                                            <h6 class="text-sm text-medium">Id</h6>
                                        </th>
                                        <th style="width: 10%">
                                            <h6 class="text-sm text-medium">Name</h6>
                                        </th>
                                        <th style="width: 10%">
                                            <h6 class="text-sm text-medium">Value</h6>
                                        </th>
                                        <th class="min-width" style="width: 20%">
                                            <h6 class="text-sm text-medium">
                                                Description
                                            </h6>
                                        </th>
                                        <th class="min-width" style="width: 10%">
                                            <h6 class="text-sm text-medium text-end">
                                                Item Action(s)
                                            </h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--  Row Start  -->
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>
                                                <p class="text-sm">{{ $category->id ?? '' }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm">{{ $category->name ?? '' }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm">{{ $category->value ?? '' }}</p>
                                            </td>
                                            @if($category->description)
                                            <td>
                                                <p class="text-sm">{{ Str::limit($category->description ?? '', 20, '...') }}</p>
                                            </td>
                                            @else
                                            <td>
                                                <p class="text-sm">No Description Available</p>
                                            </td>
                                            @endif

                                            <td>
                                                <div class="action justify-content-end">
                                                    <!-- Update/View Link-->
                                                    <button class="edit mr-10 more-btn dropdown-toggle" id="moreAction1"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                        <i class="lni lni-pencil"></i>
                                                    </button>
                                                    <!-- Edit Dropdown -->
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                        <li class="dropdown-item">
                                                            <a href="#" class="text-gray">Edit</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="#" target="_blank" class="text-gray">View</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Delete Link -->
                                                    <a href="#">
                                                        <a class="edit text-danger ml-5" href="#" onclick="event.preventDefault(); function deleteConfirm() {
                                                            let confirmed = confirm('Are you sure you want to delete this product?')
                                                            if (confirmed)
                                                            {
                                                                document.getElementById('delete-product-form').submit();
                                                            } else {
                                                                return false;
                                                            }
                                                        }
                                                        deleteConfirm()">
                                                            <i class="lni lni-trash-can"></i>
                                                        </a>
                                                    </a>

                                                    <form id="delete-product-form" action="#" method="POST" class="d-none">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!--  Row End  -->
                                </tbody>
                            </table>
                            <!-- End Table -->

                            <!-- product pagination -->
                            <nav>
                                {{ $categories->links('pagination::bootstrap-5') }}
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
    </section>
@endsection
