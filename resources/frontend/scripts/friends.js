const FriendSearch = document.getElementById('friends-search')
const FriendResult = document.getElementById('Friend-Result')

FriendSearch.value = ''
function searchfriend(){
    if( FriendSearch.value !== ''){
        FriendResult.innerHTML = `
        <li class="friend list-group-item mb-2">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <img class="rounded-circle" src='images/male_user.png' width="50" />
                    <span class="ms-3">${FriendSearch.value}</span>
                </div>

                <div>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </li>`
    }
    else{
        FriendResult.innerHTML = `Nie znaleziono użytkownika`
    }

}
