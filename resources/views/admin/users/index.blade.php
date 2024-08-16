@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Users</h2>
                        <a href="{{ route('admin.users.create') }}" class="main-btn primary-btn btn-hover btn-sm">
                            <i class="lni lni-plus mr-5"></i>New User
                        </a>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="col-md-6">
                    <div class="search-wrapper title d-flex input-style-8">
                        <form action="{{ route('admin.users.index') }}" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search..."
                                   aria-label="Search" value="{{ request('search') }}">
                            <span class="icon"><i class="lni lni-search-alt"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.partials.flash') <!-- Include flash messages here -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th> <!-- Added Telephone Column -->
                                    <th>Admin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telephone }}</td>
                                    <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <!-- Edit Dropdown -->
                                            <button class="edit mr-10 more-btn dropdown-toggle" id="moreAction{{ $user->id }}"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction{{ $user->id }}">
                                                <li class="dropdown-item">
                                                    <a href="{{ route('admin.users.edit', $user) }}" class="text-gray">Edit</a>
                                                </li>
                                            </ul>

                                            <!-- Delete Button -->
                                            <a href="#" class="delete text-danger" onclick="event.preventDefault(); deleteUser('{{ $user->id }}')">
                                                <i class="lni lni-trash-can"></i>
                                            </a>

                                            <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <script>
                                                function deleteUser(id) {
                                                    if (confirm('Are you sure you want to delete this user?')) {
                                                        document.getElementById('delete-user-form-' + id).submit();
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $users->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
