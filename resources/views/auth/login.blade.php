@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="card-header mt-3">
            <h3 class="text-center">{{ __('Sign in') }}</h3>
            
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group form-group mb-3">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <div class="input-group-prepend">
                        
                    </div>
                    <input type="text" class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
                </div>
                @if ($errors->has('username') || $errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                    </span>
                @endif

                <div class="input-group form-group mb-4">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="row align-items-center remember mb-2">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                </div>
                <div class="form-group mb-2">
                    <input type="submit" value="{{ __('Login') }}" class="btn float-right login_btn">
                </div>
            </form>
        </div>
        <div class="card-footer pb-5">
            <div class="d-flex justify-content-center links">
                {{ __("Don't have an account?") }}<a href="{{ route('register') }}">Sign Up</a>
            </div>
            @if (Route::has('password.request'))
            <div class="d-flex justify-content-center">
                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </div>
            
            @endif
        </div>
    </div>
@endsection
   