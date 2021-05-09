@extends('layouts.app')

@section('content') 
 <div class="container bg-light mt-3 p-5 rounded-3">

        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-12">
            <div class="input-group mb-3 ">
              <span class="input-group-text text-light bg-primary">Search</span>
              <input id="movie-search" type="text" class="form-control" placeholder="Search for movies..." aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>
        

        <h3 class="mt-5">Results:</h3>
        <div id="movies-results" class="d-flex flex-wrap gap-5 p-4">

          <!-- <div class="card border-0 bg-transparent movie-card" style="width: 12rem;">
            <div class="card-body p-0">
              <img src="star_wars.webp" width="100" height="300" class="card-img-top" alt="...">
              <h6 class="card-title text-center mt-1">Star Wars: A New Hope</h6>
            </div>
          </div> -->
          
          <h2 class="mx-auto">Type something to search for movies :)</h2>

        </div>
      </div>
@endsection

@section('scripts') 
<script src="{{ asset('js/explore.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@endsection