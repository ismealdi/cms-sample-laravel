@extends('layouts.auth')

@section('content')
<!--begin::Login Sign in form-->
<div class="login-signin">
    <div class="mb-20">
        <h3>Sign In To Admin</h3>
        <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
    </div>
    <form method="POST" class="form" id="kt_login_signin_form" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="text"
                placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" name="email" autocomplete="off" />
            @error('email')
            <div class="fv-plugins-message-container">
                <div data-field="email" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password"
                placeholder="{{ __('Password') }}" value="{{ old('password') }}" name="password" />
            @error('password')
            <div class="fv-plugins-message-container">
                <div data-field="password" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
            <div class="checkbox-inline">
                <label class="checkbox m-0 text-muted">
                    <input type="checkbox" name="remember" />
                    <span></span>{{ __('Remember Me') }}</label>
            </div>
            <a href="javascript:;" id="kt_login_forgot" class="d-none text-muted text-hover-primary">{{ __('Forgot Your
                Password?') }}</a>
        </div>


        <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">{{ __('Login')
            }}</button>
    </form>
    <div class="mt-10">
        <span class="opacity-70 mr-4">Don't have an account yet?</span>
        <a href="{{ route('register') }}" class="text-muted text-hover-primary font-weight-bold">Sign Up!</a>
    </div>
</div>
<!--end::Login Sign in form-->
<!--begin::Login forgot password form-->
<div class="login-forgot">
    <div class="mb-20">
        <h3>Forgotten Password ?</h3>
        <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
    </div>
    <form class="form" id="kt_login_forgot_form">
        <div class="form-group mb-10">
            <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email"
                autocomplete="off" />
        </div>
        <div class="form-group d-flex flex-wrap flex-center mt-10">
            <button id="kt_login_forgot_submit"
                class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
            <button id="kt_login_forgot_cancel"
                class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
        </div>
    </form>
</div>
<!--end::Login forgot password form-->
@endsection