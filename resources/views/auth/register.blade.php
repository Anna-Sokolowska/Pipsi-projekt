@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="card-header mt-3">
            <h3 class="text-center">{{ __('Sign up') }}</h3>  
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                <div class="input-group form-group mb-3">
                    @csrf
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <div class="input-group-prepend">
                        
                    </div>
                    <input type="text" placeholder="{{ __('Name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback error_message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="input-group form-group mb-3">
                    @csrf
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <div class="input-group-prepend">
                        
                    </div>
                    <input type="text" placeholder="{{ __('Last name') }}" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>               
                    @error('last_name')
                        <span class="invalid-feedback error_message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group form-group mb-3">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <div class="input-group-prepend">
                        
                    </div>
                    <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username'))
                        <span class="invalid-feedback error_message">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="input-group form-group mb-3">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <div class="input-group-prepend">
                        
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback error_message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group form-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <div class="input-group-prepend">
                        
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback error_message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   
                </div>                     

                <div class="input-group form-group mb-4">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <div class="input-group-prepend">
                    </div>
                    <input type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                </div>

                <h5>Gender</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                    Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" @if(old('gender')=='female') checked @endif>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Female
                    </label>
                </div>

                <h5 class="mt-3">Date of Birth</h5>
                <div class="d-flex justify-content-between mb-4">
                    {{-- <input type="number" class="form-control w-25" placeholder="DD" min="1" max="31">
                    <input type="number" class="form-control w-25" placeholder="MM" min="1" max="12">
                    <input type="number" class="form-control w-25" placeholder="YYYY" min="0" max="2021"> --}}
                    <input type="date" class="form-control" name="date_of_birth" required value="{{ old('date_of_birth') }}">
                    @error('date_of_birth')
                        <span class="invalid-feedback error_message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   
                </div>

                <div class="d-flex terms mt-3 mb-2">
                    <input type="checkbox" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required> 
                    <p>I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></p>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" class="btn float-right login_btn">
                </div>
            </form>
        </div>
        <div class="card-footer mt-4 pb-5">
            <div class="d-flex justify-content-center links">
                {{ __('Do you have an account?') }}<a href="{{ route('login') }}">{{ __('Sign in') }}</a>
            </div>
        </div>
    </div>
@endsection