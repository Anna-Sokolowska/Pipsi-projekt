@extends('layouts.app')

@section('content')
<div id="movie-container" class="container bg-light mt-3 p-5 rounded-3">
      
    <a href="explore.html" class="btn btn-default mt-3">Go Back To Search</a>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Share
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose friends</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-unstyled px-">
                    <li class="friend list-group-item mb-2">
                        <div class="d-flex align-items-center flex-wrap">
                            <div>
                                <img class="rounded-circle" src='images/male_user.png' width="50" />
                                <span class="ms-3">Andres Iniesta</span>
                            </div>
                        </div>
                    </li>
                    <li class="friend list-group-item mb-2">
                        <div class="d-flex align-items-center flex-wrap">
                            <div>
                                <img class="rounded-circle" src='images/male_user.png' width="50" />
                                <span class="ms-3">Andres Iniesta</span>
                            </div>
                        </div>
                    </li>
                    <li class="friend list-group-item mb-2">
                      <div class="d-flex align-items-center flex-wrap">
                          <div>
                              <img class="rounded-circle" src='images/male_user.png' width="50" />
                              <span class="ms-3">Andres Iniesta</span>
                          </div>
                      </div>
                  </li>
                  <li class="friend list-group-item mb-2">
                    <div class="d-flex align-items-center flex-wrap">
                        <div>
                            <img class="rounded-circle" src='images/male_user.png' width="50" />
                            <span class="ms-3">Andres Iniesta</span>
                        </div>
                    </div>
                </li>
                <li class="friend list-group-item mb-2">
                  <div class="d-flex align-items-center flex-wrap">
                      <div>
                          <img class="rounded-circle" src='images/male_user.png' width="50" />
                          <span class="ms-3">Andres Iniesta</span>
                      </div>
                  </div>
              </li>
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
<script src="{{ asset('js/movieScript.js') }}"></script>
@endsection