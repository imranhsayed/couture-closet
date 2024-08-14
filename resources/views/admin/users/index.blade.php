@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Users</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('admin.users.create') }}" class="main-btn primary-btn btn-hover float-right">
                        <i class="lni lni-plus mr-5"></i>New User
                    </a>
                </div>
            </div>
        </div>

        @include('admin.partials.flash')

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
                                    <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-gray">Edit</a>
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
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
