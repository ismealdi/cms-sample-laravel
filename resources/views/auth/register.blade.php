@extends('layouts.auth')

@section('content')
<!--begin::Login Sign up form-->
<div class="">
    <div class="mb-20">
        <h3>Sign Up</h3>
        <div class="text-muted font-weight-bold">Enter your details to create your account</div>
    </div>
    <form class="form" id="kt_login_signup_form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" value="{{ old('name') }}" type="text"
                placeholder="Fullname" name="name" />
            @error('name')
            <div class="fv-plugins-message-container">
                <div data-field="name" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" value="{{ old('email') }}" type="text"
                placeholder="Email" name="email" />
            @error('email')
            <div class="fv-plugins-message-container">
                <div data-field="email" data-validator="notEmpty" class="fv-help-block">{{
                    $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password"
                name="password" />
            @error('password')
            <div class="fv-plugins-message-container">
                <div data-field="password" data-validator="notEmpty" class="fv-help-block">{{ $message }}</div>
            </div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password"
                placeholder="Confirm Password" name="password_confirmation" />
        </div>
        <div class="form-group mb-5 text-left">
            <div class="checkbox-inline">
                <label class="checkbox m-0">
                    <input type="checkbox" name="agree" />
                    <span></span>I Agree the
                    <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
            </div>
            <div class="form-text text-muted text-center"></div>
        </div>
        <div class="form-group d-flex flex-wrap flex-center mt-10">
            <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign
                Up</button>
            <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</a>
        </div>
    </form>
</div>
<!--end::Login Sign up form-->
@endsection