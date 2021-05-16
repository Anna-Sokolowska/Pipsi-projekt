@extends('layouts.app')

@section('content')
<div id="movie-container" class="container bg-light mt-3 p-5 rounded-3">

    <div class="row">
        <div class="col-lg-4">
            <img src="{{$movie['poster_path']}}" >
        </div>
        <div class="col-lg-8">
            <div class="d-flex pb-2">
                <button type="button" class="btn btn-primary mt-3 wid" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Share
                </button>
                <form style="text-align: right; width:100%" action="../addMovie" method="post">
                    {{csrf_field()}}
                    <input name="movie_api_id" value="{{$movie['id']}}" type="hidden">
                    <button type="submit" name="add" id="add" class="btn btn-primary mt-3" >Add</button>
                </form>
            </div>

            <h2>{{$movie['title']}}</h2>
            <ul class="list-group">
                <li class="list-group-item"><strong>Genre:</strong> {{$movie['genres']}}</li>
                <li class="list-group-item"><strong>Released:</strong> {{$movie['release_date']}}</li>
                <li class="list-group-item"><strong>Rated:</strong> {{$movie['vote_average']}}</li>
                <li class="list-group-item"><strong>Director:</strong> {{$movie['director']}}</li>
                <li class="list-group-item"><strong>Writer:</strong> {{$movie['writer']}}</li>
                <li class="list-group-item"><strong>Actors:</strong> {{$movie['cast']}}</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <div class="card p-3">
            <h3>Plot</h3>
            {{$movie['overview']}}
            <hr>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose friends</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-unstyled px-2">
                        @foreach ($friends as $friend)
                        <li class="friend list-group-item mb-2 mt-1">
                            <div class="d-flex align-items-center flex-wrap">
                                <div>
                                    <img class="rounded-circle" src='{{ asset('images/male_user.png') }}' width="50" />
                                    <span class="ms-3">
                                         {{ $friend->name . ' ' . $friend->last_name }}
                                    </span>
                                    <span class="text-muted">
                                         {{ ' (' . $friend->username . ')' }}
                                    </span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        {{ $friends->links() }}
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary disabled">Share</button>
            </div>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('scripts')
@endsection
