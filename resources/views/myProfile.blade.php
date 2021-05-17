@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-lg-4 col-sm-5 col-8">
                                <img class="rounded-circle mx-auto" width="200" height="200" 
                                src="{{ asset('images/male_user.png') }}" alt="user">
                            <h5 class="ms-5 mt-2 pb-2">{{ $user->name }}</h5>
                        </div>
                        <div class="col-xxl-8 col-lg-6 col-md-6 mt-3">
                            <h2>{{ $user->name }}</h2>
                            <ul class="list-unstyled profile-list">
                                <li><i class="fas fa-map-marker-alt"></i> {{ $user->country }}</li>
                                <li><i class="fas fa-building"></i> {{ $user->city }}</li>
                                <li><i class="fas fa-mobile-alt"></i>{{ $user->phone }}</li>
                                <li><i class="fas fa-envelope"></i>{{ $user->email }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <span>
                <button id="display-profile-data-button" class="btn btn-primary mt-3">{{ __('Profile') }}</button>
                <button id="edit-profile-data-button" class="btn btn-secondary mt-3">{{ __('Edit Profile') }}</button>
            </span>

            <section id="profile-data" >
                <div id="display-profile-data" class="card mt-3">
                    <div class="card-body p-4">
                        <div class="row profile-list">
                            <div class="col-lg-6">
                            <table class="w-75">
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('First name') }}: </td>
                                  <td>{{ $user->name }}</td>
                                </tr>
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('Last name') }}: </td>
                                  <td>{{ $user->last_name }}</td>
                                </tr>
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('Birthday') }}: </td>
                                  <td>{{ $user->date_of_birth }}</td>
                                </tr>
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('Gender') }}: </td>
                                  <td>{{ $user->gender }}</td>
                                </tr>
                              </table> 
                            </div>
                            <div class="col-lg-6">
                            <table class="w-75">
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('Country') }}: </td>
                                  <td>{{ $user->country }}</td>
                                </tr>
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('City') }}: </td>
                                  <td>{{ $user->city }}</td>
                                </tr>
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('Phone number') }}: </td>
                                  <td>{{ $user->phone }}</td>
                                </tr>
                                <tr class="d-flex">
                                  <td class="w-50">{{ __('E-mail') }}: </td>
                                  <td>{{ $user->email }}</td>
                                </tr>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="edit-profile-data" class="card mt-3 visually-hidden">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('user.update', $user->username) }}">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ __('First name') }}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Firstname" value="{{ $user->name }}" name="name" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ __('Last name') }}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lastname" value="{{ $user->last_name }}" name="last_name" required>
                              </div>

                              <span>{{ __('Gender') }}</span>
                              <div class="d-flex mt-2 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" value="male" @if($user->gender=='male') checked @endif>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      {{ __('Male') }}
                                    </label>
                                </div>
                                <div class="form-check ms-5">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" @if($user->gender=='female') checked @endif>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      {{ __('Female') }}
                                    </label>
                              </div>
                             
                            </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ __('Country') }}</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Country" value="{{ $user->country }}" name="country">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ __('City') }}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="City" value="{{ $user->city }}" name="city">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ __('Phone number') }}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone number" value="{{ $user->phone }}" name="phone">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{ __('Email address') }}</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email Adress" value="{{ $user->email }}" readonly>
                              </div>
                              <input class="btn btn-primary w-25 mt-2" type="submit" value="Save" onclick="return confirm('Are you sure to save changes?')">
                        </form>
                    </div>
                </div>
            </section>
      </div>
@endsection
@section('scripts') 
<script src="{{ asset('js/profile.js') }}"></script>
@endsection