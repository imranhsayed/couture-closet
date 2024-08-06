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
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>First Name:</strong>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-plaintext">{{ $user->first_name }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>Last Name:</strong>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-plaintext">{{ $user->last_name }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>Email:</strong>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>Phone:</strong>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-plaintext">{{ $user->telephone }}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
