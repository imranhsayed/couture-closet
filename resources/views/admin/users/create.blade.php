@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Create User</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('admin.users.index') }}" class="main-btn primary-btn btn-hover float-right">
                        Back
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" required>
                                    <x-val-error field="first_name"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" required>
                                    <x-val-error field="last_name"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required>
                                    <x-val-error field="email"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Password</label>
                                    <input type="password" name="password" required>
                                    <x-val-error field="password"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" required>
                                    <x-val-error field="password_confirmation"/>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" value="{{ old('telephone') }}">
                                    <x-val-error field="telephone"/>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Admin</label>
                                    <select name="is_admin">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">Create User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
