@extends('layouts.app')

@section('content')
<!-- reset-password-section -->
<section class="container-fluid-px py-4 mt-50 pt-5 pb-80">
    <div class="container-fluid">
        <div class="invoice-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card-header accordion-header form-wrapper">
                        <a class="accordion-link text-lg">{{ __('Reset Your Password') }}</a>
                    </div>
                    <div class="invoice-card card-style mb-30">
                        <div>
                            <div class="form-wrapper">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label for="email">{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                    name="email" value="{{ $email ?? old('email') }}"
                                                    placeholder="Email" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password"
                                                    class="form-control form-control-lg" name="password_confirmation"
                                                    placeholder="Confirm Password" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="button-group d-flex justify-content-center flex-wrap">
                                                <button type="submit"
                                                    class="main-btn primary-btn btn-hover w-100 text-center">
                                                    {{ __('Reset Password') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reset-password-section end -->
@endsection