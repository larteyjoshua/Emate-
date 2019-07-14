@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
    @csrf
    <span class="login100-form-title">
        Log In
    </span>

    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
        <input id="email" placeholder="Email" type="email" class="input100  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
        <input id="password" type="password" class="input100  {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="text-center p-t-13 p-b-23">
        <span class="txt1">
            Forgot
        </span>

        <a href="#" class="txt2">
            Username / Password?
        </a>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            Sign in
        </button>
    </div>

    <div class="flex-col-c p-t-50 p-b-40">
        <span class="txt1 p-b-9">
            Don’t have an account?
        </span>

        <a href="{{ route('register') }}" class="txt3">
            Sign up now
        </a>
    </div>
</form>
@endsection
