<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendshipController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('friends', [
            'friends' => $this->user->getFriends(),
            'request' => $this->user->getPendingFriends()
        ]);
    }

    public function sendFriendRequest(Request $request){
        $recipient = User::find($request->recipientID);
        $this->user->befriend($recipient);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function acceptFriendRequest(Request $request){
        $sender = User::find($request->senderID);
        $this->user->acceptFriendRequest($sender);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function declineFriendRequest(Request $request){
        $sender = User::find($request->senderID);
        $this->user->denyFriendRequest($sender);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function removeFriend(Request $request){
        $friend = User::find($request->friendID);
        $this->user->unfriend($friend);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function search(Request $request){
        $key = $request->key;
        $users = User::select('id', 'username')->where('username', 'like', '%' . $key . '%')->limit(5)->get();
        return view('components.foundUser',  ['users' => $users]);
    }

}
