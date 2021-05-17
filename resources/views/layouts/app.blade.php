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
@if( session('failed') )
<div class="alert alert-danger position-absolute text-center main_alert" role="alert">
    {{ session('failed') }}
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
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">{{ __('Home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('watchedMovies*') ? 'active' : '' }}" aria-current="page" href="/watchedMovies">{{ __('Watched Movies')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('friends*') ? 'active' : '' }}" aria-current="page" href="{{ route('friends') }}">{{ __('Friends') }}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('explore*') ? 'active' : '' }}" aria-current="page" href="/explore">{{ __('Explore') }}</a>
          </li>
        </ul>


        <div class="d-flex align-items-center">
            <img class="rounded-circle" src="{{ asset('images/male_user.png') }}" alt="male_user" width="50">

         <div class="dropdown">
           <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
           </button>
           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

            <li><a class="dropdown-item" href="{{ route('user.show', Auth::user()->username) }}">{{ __('My Profile') }}</a></li>
            
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  @yield('scripts')
</body>
</html>
