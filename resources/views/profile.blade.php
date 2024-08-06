@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center mb-4">Profile</h1>
		<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>User Profile</h4>
                </div>
                <div class="card-body">
                    <h5 class="mb-3">Personal Information</h5>
                    <div class="form-group">
                        <label>First Name:</label>
                        <p>{{ $user->first_name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <p>{{ $user->last_name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <p>{{ $user->telephone }}</p>
                    </div>

                    <h5 class="mt-4 mb-3">Residential Information</h5>
                    <div class="form-group">
                        <label>House No:</label>
                        <p>{{ $user->address->house_no }}</p>
                    </div>
                    <div class="form-group">
                        <label>Street:</label>
                        <p>{{ $user->address->street }}</p>
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <p>{{ $user->address->city }}</p>
                    </div>
                    <div class="form-group">
                        <label>Province:</label>
                        <p>{{ $user->address->province }}</p>
                    </div>
                    <div class="form-group">
                        <label>Country:</label>
                        <p>{{ $user->address->country }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
@endsection
