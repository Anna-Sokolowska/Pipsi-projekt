@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">
    <div class="input-group mb-3 ">
        <span class="input-group-text text-light bg-primary">Search</span>
        <input id="movie-search" type="text" class="form-control" placeholder="Search for friends..." aria-label="Username" aria-describedby="basic-addon1">
      </div>
    <ul class="list-group list-unstyled px-5">
        @foreach ($friends as $friend)
            <li class="friend list-group-item mb-2">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="rounded-circle" src='images/male_user.png' width="50" />
                        <span class="ms-3">{{ $friend->name }}</span>
                    </div>

                    <div>
                        <a href="{{ url('/user/'. $friend->username) }}" class="btn btn-primary">View profile</a>
                        <a href="#" class="btn btn-danger">Remove</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <ul class="list-group list-unstyled px-5">
        @foreach ($request as $user)
            <li class="friend list-group-item mb-2">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="rounded-circle" src='images/male_user.png' width="50" />
                        <span class="ms-3">{{ $user->name }}</span>
                    </div>

                    <div>
                        <a href="{{ url('/user/'. $user->username) }}" class="btn btn-primary">Accept</a>
                        <a href="#" class="btn btn-danger">Decline</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
  </div>
@endsection
@section('scripts') 
<script src="{{ asset('js/script.js') }}"></script>
@endsection