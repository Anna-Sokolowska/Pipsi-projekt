@if($users->isEmpty())
Users not found
@else
@foreach ( $users as $user )
<li class="friend list-group-item mb-2">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <img class="rounded-circle" src='images/male_user.png' width="50" />
            <span class="ms-3">{{ $user->username }}</span>
        </div>
        <div>
            <a id="btn_add_friend_{{ $user->id }}" class="btn btn-primary" onclick="sendFriendRequest({{ $user->id }})">Add</a>
        </div>
    </div>
</li>
@endforeach
@endif
