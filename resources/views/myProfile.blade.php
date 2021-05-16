@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-lg-4 col-sm-5 col-8">
                            @if (!is_null(Auth::user()->photo_path))
                                <img class="rounded-circle mx-auto" width="200" height="200" 
                                src="{{ asset('storage/' . Auth::user()->photo_path) }}" alt="user">
                            @elseif (Auth::user()->gender == 'female')
                                <img class="rounded-circle mx-auto" width="200" height="200" 
                                src="{{ asset('images/female_user.jpg') }}" alt="user">
                            @else
                                <img class="rounded-circle mx-auto" width="200" height="200" 
                                src="{{ asset('images/male_user.png') }}" alt="user">
                            @endif
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
                <button id="display-profile-data-button" class="btn btn-primary mt-3">Profile</button>
                <button id="edit-profile-data-button" class="btn btn-secondary mt-3">Edit Profile</button>
            </span>

            <section id="profile-data" >
                <div id="display-profile-data" class="card mt-3">
                    <div class="card-body p-4">
                        <div class="row profile-list">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-4 col-5">
                                        <ul class="list-unstyled">
                                            <li>Firstname: </li>
                                            <li>Lastname: </li>
                                            <li>Birthday: </li>
                                            <li>Gender: </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-8 col-7">
                                        <ul class="list-unstyled">
                                            <li>{{ $user->name  }}</li>
                                            <li>{{ $user->last_name }}</li>
                                            <li>{{ $user->birth_of_date }}</li>
                                            <li>{{ $user->gender }}</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <ul class="list-unstyled">
                                            <li>Country: </li>
                                            <li>City: </li>
                                            <li>Phone number: </li>
                                            <li>Email: </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <ul class="list-unstyled">
                                            <li>{{ $user->country }}</li>
                                            <li>{{ $user->city }}</li>
                                            <li>{{ $user->phone }}</li>
                                            <li>{{ $user->email }}</li>
                                        </ul>
                                    </div>
                                </div>    
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
                                <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Firstname" value="{{ $user->name }}" name="name" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Lastname</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lastname" value="{{ $user->last_name }}" name="last_name" required>
                              </div>

                              <span class="mt-3">Date of Birth</span>
                                <div class="row justify-content-between mb-4">
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control mt-2" placeholder="DD" min="1" max="31">
                                    </div>
                                    <div class="col-sm-4">
                                         <input type="number" class="form-control mt-2" placeholder="MM" min="1" max="12">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control mt-2" placeholder="YYYY" min="0" max="2021">
                                    </div>
                
                                </div>

                              <span>Gender</span>
                              <div class="d-flex mt-2 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" value="male" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                    </label>
                                </div>
                                <div class="form-check ms-5">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                    </label>
                              </div>
                             
                            </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Country" value="{{ $user->country }}" name="country">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="City" value="{{ $user->city }}" name="city">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone number" value="{{ $user->phone }}" name="phone">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
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