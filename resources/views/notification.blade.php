@extends('layouts.app')

@section('content')
<main>
<div class="container bg-light mt-3 p-5 rounded-3">
  <ul class="list-unstyled">
        <li>
            <div class=" border not-container bg-light mt-3 p-3 rounded-3 position-relative">
                <div class="d-flex align-items-center p-2">
                <a href="viewProfile.html"><img class="rounded-circle" src="images/male_user.png" width="60" alt="user"></a>
                <h6 class="ms-4 fw-bold"><a href="movie.html" class="text-dark text-decoration-none"></a></h6>
                {{-- <span class="not-time-2 position-absolute text-secondary"><i class="far fa-clock"></i> 14 min ago</span> --}}
                </div>
            </div>
        </li>
  </ul>
</div>
</main>
@endsection
@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script> 
@endsection