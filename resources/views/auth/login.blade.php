@extends('layouts.app')

@section('content')
<!--signin-section-->
<section class="container-fluid-px py-4 mt-50 pt-5 pb-80">
    <div class="container-fluid">
        <div class="invoice-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card-header accordion-header form-wrapper">
                        <a class="accordion-link text-lg">Login to Your Account</a>
                    </div>
                    <div class="invoice-card card-style mb-30">
                        <div>
                            <div class="form-wrapper">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <!-- end col -->
                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label for="email">Your Email</label>
                                                <input id="email" type="email"
                                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" placeholder="Email" required
                                                    autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label for="password">Password</label>
                                                <input id="password" type="password"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Password" required
                                                    autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-lg-12 col-md-6">
                                            <div class="form-check checkbox-style mb-30">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="checkbox-remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label ml-3" for="checkbox-remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-xxl-6 col-lg-12 col-md-6">
                                            <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="hover-underline">
                                                    Reset Password
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-12">
                                            <div class="button-group d-flex justify-content-center flex-wrap">
                                                <button type="submit"
                                                    class="main-btn primary-btn btn-hover w-100 text-center">
                                                    Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </form>
                                <div class="singin-option pt-40">
                                    <p class="text-sm text-medium text-dark text-center">
                                        Don’t have an account yet?
                                        <a href="{{ route('register') }}" class="hover-underline fw-bold"> Create an
                                            Account</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--signin-section end-->
@endsection