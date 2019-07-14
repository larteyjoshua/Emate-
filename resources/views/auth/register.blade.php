@extends('layouts.auth')
@section('title', 'Register')

@section('content')
<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
    @csrf
    <span class="login100-form-title">
        Register
    </span>

    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Full Name">
        <input id="name" placeholder="Full Name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
        <input id="email" placeholder="Email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter registration numnber">
        <input id="registrationNumber" placeholder="Registration Number" type="text" class="input100 form-control{{ $errors->has('registrationNumber') ? ' is-invalid' : '' }}" name="registrationNumber" value="{{ old('registrationNumber') }}" required autofocus>

        @if ($errors->has('registrationNumber'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('registrationNumber') }}</strong>
            </span>
        @endif
        <span class="focus-input100"></span>
    </div>

    <div class="form-check form-check-inline wrap-input100">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="type" id="type" value="0" checked> Student
            <input class="form-check-input m-l-10" type="radio" name="type" id="type" value="1"> Lecturer
        </label>
    </div>
    <div class="wrap-input100 validate-input m-t-20" data-validate = "Please enter password">
        <input id="password" type="password" class="input100 form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input m-t-20" data-validate = "Please confirm password">
        <input id="password_confirmation" type="password" class="input100 form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Confirm Password">
        <span class="focus-input100"></span>
    </div>

    <div class="text-center p-t-13 p-b-23">

    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            Register
        </button>
    </div>

    <div class="flex-col-c p-t-50 p-b-40">
        <span class="txt1 p-b-9">
            Already have an account?
        </span>

        <a href="{{ route('login') }}" class="txt3">
            Login in now
        </a>
    </div>
</form>
@endsection



