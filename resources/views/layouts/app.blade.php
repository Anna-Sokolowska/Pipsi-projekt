<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e0f1278a6.js" crossorigin="anonymous"></script>
</head>
<body>
@if( session('success') )
<div class="alert alert-success position-absolute text-center main_alert" role="alert">
    {{ session('success') }}
</div>
@endif
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-3 border-bottom border-primary">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('images/logo.png') }}" width="40" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Main Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('watchedMovies*') ? 'active' : '' }}" aria-current="page" href="/watchedMovies">{{ __('WatchedMovies')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('friends*') ? 'active' : '' }}" aria-current="page" href="{{ route('friends') }}">{{ __('Friends') }}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('explore*') ? 'active' : '' }}" aria-current="page" href="/explore">{{ __('Explore') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{ __('About') }}</a>
          </li>
        </ul>

        <div class="not-icon position-relative">
          <i class="fas fa-bell me-5"></i>
          <span class="position-absolute badge bg-primary">6</span>

          <div class="not-list d-none shadow-sm position-absolute border bg-white">
            <h6 class="text-center border-bottom p-1 m-0">Notifications</h6>
            <ul class="list-unstyled">
              <li class="border-bottom">
                <div class="d-flex align-items-start p-2">
                  <a href="viewProfile.html"><img class="rounded-circle" src="images/male_user.png" width="40" alt="user"></a>
                  <div class="ms-2">
                    <h6 class="not-message fw-bold"><a href="movie.html" class="text-dark text-decoration-none">Patryk Biernacki recommends star wars: empire strikes back</a></h6>
                    <span class="not-time text-secondary"><i class="far fa-clock"></i> 14 min ago</span>
                  </div>
                </div>
              </li>
              <li class="border-bottom">
                <div class="d-flex align-items-start p-2">
                  <a href="viewProfile.html"><img class="rounded-circle" src="images/male_user.png" width="40" alt="user"></a>
                  <div class="ms-2">
                    <h6 class="not-message fw-bold"><a href="movie.html" class="text-dark text-decoration-none">Patryk Biernacki recommends star wars: empire strikes back</a></h6>
                    <span class="not-time text-secondary"><i class="far fa-clock"></i> 14 min ago</span>
                  </div>
                </div>
              </li><li class="border-bottom">
                <div class="d-flex align-items-start p-2">
                  <a href="viewProfile.html"><img class="rounded-circle" src="images/male_user.png" width="40" alt="user"></a>
                  <div class="ms-2">
                    <h6 class="not-message"><a href="movie.html" class="text-dark text-decoration-none">Patryk Biernacki recommends star wars: empire strikes back</a></h6>
                    <span class="not-time text-secondary"><i class="far fa-clock"></i> 14 min ago</span>
                  </div>
                </div>
              </li>
              <li class="border-bottom">
                <div class="d-flex align-items-start p-2">
                  <a href="viewProfile.html"><img class="rounded-circle" src="images/male_user.png" width="40" alt="user"></a>
                  <div class="ms-2">
                    <h6 class="not-message fw-bold"><a href="viewProfile.html" class="text-dark text-decoration-none">Patryk Biernacki sent you a friend request</a></h6>
                    <div class="d-flex gap-1 mt-1">
                      <button class="btn btn-success">Accept</button>
                      <button class="btn btn-danger">Decline</button>
                    </div>
                    <span class="not-time text-secondary"><i class="far fa-clock"></i> 14 min ago</span>
                  </div>
                </div>
              </li>
              <li class="border-bottom">
                <div class="d-flex align-items-start p-2">
                  <a href="viewProfile.html"><img class="rounded-circle" src="images/male_user.png" width="40" alt="user"></a>
                  <div class="ms-2">
                    <h6 class="not-message"><a href="viewProfile.html" class="text-dark text-decoration-none">Patryk Biernacki sent you a friend request</a></h6>
                    <div class="d-flex gap-1 mt-1">
                      <button class="btn btn-success">Accept</button>
                      <button class="btn btn-danger">Decline</button>
                    </div>
                    <span class="not-time text-secondary"><i class="far fa-clock"></i> 14 min ago</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="d-flex align-items-center">
{{--         @if (!is_null(Auth::user()->photo_path))--}}
{{--           <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->photo_path) }}" alt="male_user" width="50">--}}
{{--          @elseif (Auth::user()->gender == 'female')--}}
            <img class="rounded-circle" src="{{ asset('images/female_user.jpg') }}" alt="male_user" width="50">
{{--         @else--}}
{{--           <img class="rounded-circle" src="{{ asset('images/male_user.png') }}" alt="male_user" width="50">--}}
{{--         @endif--}}

         <div class="dropdown">
           <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
{{--             {{ Auth::user()->name }}--}}
           </button>
           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

{{--             <li><a class="dropdown-item" href="{{ route('user.show', Auth::user()->username) }}">My Profile</a></li>--}}
             <li><a class="dropdown-item" href="notification.html">Notifications <span class="badge rounded-pill bg-primary">3</span></a></li>
             <li><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
               </form>
              </li>
           </ul>
         </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<main>
    @yield('content')
</main>
  {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/explore.js') }}"></script>
  <script src="{{ asset('js/profile.js') }}"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  @yield('scripts')
</body>
</html>
