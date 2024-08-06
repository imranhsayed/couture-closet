@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center mb-4">Profile</h1>
		<div id="user-profile" class="card p-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/150" alt="User Image" class="img-fluid rounded-circle mb-3">
                </div>
                <div class="col-md-8">
                    <h4 id="user-name"><strong>First Name</strong></h4>
                    <p id="user-email"><strong>Last Name</strong></p>
                    <p id="user-address"><strong>Email</strong></p>
                    <p id="user-phone"><strong>Address</strong></p>
                </div>
            </div>
        </div>
	</div>
@endsection
