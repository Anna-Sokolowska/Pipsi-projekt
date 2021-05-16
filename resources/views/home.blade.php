@extends('layouts.app')

@section('content')
 <div class="container mx-auto bg-light mt-3 p-5 rounded-3">
    <h2>Last watched movies:</h2>
    @if($watchedMovies->isEmpty())
        <span class="text-muted">You haven't watched any movies yet</span>
    @endif
     <div id="watched-movie" class="d-flex flex-wrap gap-5 p-4">
         @foreach($watchedMovies as $movie)
             <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
                 <div class="card-body p-0">
                     <img onclick="window.location='{{url('movie', $movie['movie_id'])}}'" src="{{$movie['poster_path']}}" alt="{{$movie['title']}}">
                     <h6 onclick="window.location='{{url('movie', $movie['movie_id'])}}'" class="card-title text-center mt-1">{{$movie['title']}}</h6>
                 </div>
             </div>
         @endforeach
     </div>
         <h2>10 Most Popular Movie:</h2>
         <div id="popular_movies"  class="d-flex flex-wrap gap-5 p-4">
             @foreach($popularMovies as $movie)
                     <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
                         <div class="card-body p-0">
                             <img  onclick="window.location='{{url('movie', $movie['movie_id'])}}'" src="{{$movie['poster_path']}}" alt="{{$movie['title']}}">
                             <h6 onclick="window.location='{{url('movie', $movie['movie_id'])}}'" class="card-title text-center mt-1">{{$movie['title']}}</h6>
                             <form action="/addMovie" method="post">
                                 @csrf
                                 <input name="movie_api_id" value="{{$movie['movie_id']}}" type="hidden">
                                 <button type="submit" name="add" id="add" class="btn btn-primary" >Add</button>
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
