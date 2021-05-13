@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">

        <h3 class="mt-5">Watched movies:</h3>
        <div id="movies-results" class="d-flex flex-wrap gap-5 p-4">
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
            <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
              <div class="card-body p-0">
                <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
                <h6 class="card-title text-center mt-1">Batman</h6>
              </div>
            </div>
          </div>
      </div>
@endsection
@section('scripts') 
<script src="{{ asset('js/script.js') }}"></script>
@endsection