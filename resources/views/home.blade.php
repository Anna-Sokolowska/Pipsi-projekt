@extends('layouts.app')

@section('content')
 <div class="container bg-light mt-3 p-5 rounded-3">
    <h2>10 last watched movies:</h2>
    <div id="watched-movie" class="slider d-flex gap-5 p-4">
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div>  
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
      <div class="card border-0 bg-transparent movie-card col-1" style="width: 12rem;">
        <div class="card-body p-0">
          <img src="images/batman.jpg" width="100" height="300" class="card-img-top" alt="...">
        </div>
      </div> 
    </div>
  </div>
@endsection
@section('scripts') 
<script src="{{ asset('js/script.js') }}"></script>
@endsection