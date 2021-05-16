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

            <a href="#" class="btn btn-danger mt-3">Remove</a>
            
            <h3 class="mt-4">Recommended Movies</h3>
            <div id="movies-results" class="d-flex flex-wrap gap-5 p-4 bg-white border">
              @if(Empty($watchedMovies))
                This user haven't watched any movies yet
              @endif
              @foreach ($watchedMovies as $movie)
              <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
                <div class="card-body p-0">
                  <img onclick="window.location='{{url('movie', $movie['id'])}}'" src="{{'https://image.tmdb.org/t/p/w185'.$movie['poster_path']}}" width="100" height="300" class="card-img-top" alt="{{$movie['title']}}">
                  <h6 onclick="window.location='{{url('movie', $movie['id'])}}'" class="card-title text-center mt-1">{{$movie['title']}}</h6>
                </div>
              </div>
              @endforeach
            </div>
@endsection
@section('scripts') 
<script src="{{ asset('js/profile.js') }}"></script>
@endsection