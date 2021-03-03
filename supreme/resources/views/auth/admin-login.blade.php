@extends('layouts.app')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">{{ __('Admin Login') }}</h5>
                <form class="form-signin" method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                        <label for="inputEmail">{{ __('E-Mail Address') }}</label>  
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                        <label for="inputPassword">{{ __('Password')}}</label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="custom-control custom-checkbox mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                        </div>
                    </div>

                    <button class="btn btn-lg btn-block text-uppercase" type="submit" style="background: linear-gradient(to right, #ff416c, #ff4b2b);color:white;">
                        {{ __('Login') }}
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
