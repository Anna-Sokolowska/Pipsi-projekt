@extends('layouts.app')

@section('content')
<div class="container bg-light mt-3 p-5 rounded-3">
    <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-12">
            <div class="input-group mb-3 ">
                <button class="input-group-text text-light bg-primary" onclick=searchfriend() data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('Search') }}</button>
                <input id="friends-search" type="text" class="form-control" placeholder="Search for user..." aria-label="Username" aria-describedby="basic-addon1" name="key">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul id="Friend-Result"  class="list-group list-unstyled px-">
                                @if (isset($users))
                                    @foreach ( $users as $user)
                                    <li class="friend list-group-item mb-2">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                                            <div>
                                                <img class="rounded-circle" src='images/male_user.png' width="50" />
                                                        <span class="ms-3">{{ $user->username }}</span>
                                            </div>
                                            <div>
                                                <a class="btn btn-primary">{{ __('Add') }}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <h3 class="mt-5">{{ __('Friends:') }}</h3>
    <ul class="list-group list-unstyled px-5">
        @foreach ($friends as $friend)
            <li class="friend list-group-item mb-2">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="rounded-circle" src='images/male_user.png' width="50" />
                        <span class="ms-3">{{ $friend->name }}</span>
                    </div>

                    <div>
                        <a href="{{ route('user.show', $friend->username) }}" class="btn btn-primary">{{ __('View profile') }}</a>
                        <a onclick = "removeFriend({{ $friend->id }})" class="btn btn-danger">{{ __('Remove') }}</a>
                    </div>
                </div>
            </li>
        @endforeach
        {{-- {{ $friends->links() }} --}}
    </ul>
    <h3 class="mt-5">{{ __('Friend request:') }}</h3>
    <ul class="list-group list-unstyled px-5">
        @foreach ($request as $user)
            <li class="friend list-group-item mb-2">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="rounded-circle" src='images/male_user.png' width="50" />
                        <span class="ms-3">{{ $user->name }}</span>
                    </div>

                    <div>
                        <a onclick="acceptFriendRequest({{ $user->id }})" class="btn btn-primary">{{ __('Accept') }}</a>
                        <a onclick="declineFriendRequest({{ $user->id }})" class="btn btn-danger">{{ __('Decline') }}</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
  </div>
@endsection
@section('scripts') 
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
function searchfriend(){
    let key = $("input[name=key]").val();
    if(key.value == ''){
        FriendResult.innerHTML = `Nie znaleziono użytkownika`
    }
    else{
        $.ajax({
            type:'POST',
            url:'/friends/search',
            data:{
                key:key,
                _token:'{{ csrf_token() }}'
            },
            cache: true,
            success:function(response) {
                $("#Friend-Result").html(response);
        }    
        });}
}


function sendFriendRequest(recipientID){
    $.ajax({
        type:'POST',
        url:'/friends/sendFriendRequest',
        data:{
            recipientID:recipientID,
            _token:'{{ csrf_token() }}'
        },
        cache: true,
        success:function(response) {
            $("#btn_add_friend_"+recipientID).css("background-color", "gray");  
        }     
    });
}

function acceptFriendRequest(senderID){
    $.ajax({
        type:'POST',
        url:'/friends/acceptFriendRequest',
        data:{
            senderID:senderID,
            _token:'{{ csrf_token() }}'
        },
        cache: false,
        success:function(response) {
            location.reload();
        }     
    });
}

function declineFriendRequest(senderID){
    $.ajax({
        type:'POST',
        url:'/friends/declineFriendRequest',
        data:{
            senderID:senderID,
            _token:'{{ csrf_token() }}'
        },
        cache: false,
        success:function(response) {
            location.reload();
        }     
    });
}

function removeFriend(friendID){
    $.ajax({
        type:'POST',
        url:'/friends/removeFriend',
        data:{
            friendID:friendID,
            _token:'{{ csrf_token() }}'
        },
        cache: false,
        success:function(response) {
            location.reload();
        }     
    });
}
</script>

@endsection