@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">
        <h3 class="mt-5">Watched movies:</h3>
        <div id="watched-movie" class="d-flex flex-wrap gap-5 p-4">
        @foreach($watchedMovies as $movie)
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
                <div class="card-body text-truncate p-0">
                    <img class="p-1" onclick="window.location='{{url('movie', $movie['movie_id'])}}'" src="{{$movie['poster_path']}}" alt="{{$movie['title']}}">
                    <h6 onclick="window.location='{{url('movie', $movie['movie_id'])}}'" class="card-title text-center mt-1 p-1">{{$movie['title']}}</h6>
                    <form class="p-1 align-text-bottom" action="removeMovie/{{$movie['movie_id']}}" method="get">
                        @csrf
                        <button  type="submit" class="btn btn-primary">Remove</button>
                    </form>
                </div>
            </div>
        @endforeach
        </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endsection
