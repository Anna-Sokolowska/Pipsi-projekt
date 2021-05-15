@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">
        <h3 class="mt-5">Watched movies:</h3>
        <div id="watched-movie" class="d-flex flex-wrap gap-5 p-4">
        @if(Empty($watchedMovies))
            You haven't watched any movies yet
        @endif
        @foreach($watchedMovies as $movie)
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
                <div class="card-body p-0">
                    <img onclick="window.location='{{url('movie', $movie['id'])}}'" src="{{'https://image.tmdb.org/t/p/w185'.$movie['poster_path']}}" alt="{{$movie['title']}}">
                    <h6 onclick="window.location='{{url('movie', $movie['id'])}}'" class="card-title text-center mt-1">{{$movie['title']}}</h6>
                </div>
            </div>
        @endforeach
        </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endsection
