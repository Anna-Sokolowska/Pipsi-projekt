<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\WatchedMovies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
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
     * Display the specified resource.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::select('id', 'name', 'last_name', 'gender', 'username', 'email', 'phone', 'city', 'country', 'date_of_birth') -> where('username', $username) -> firstOrFail();
        $watchedMovies = WatchedMovies::where('user_id', $user->id)->get()->toArray();
        foreach ($watchedMovies as &$movie){
            $details = [];
            $details = collect( Http::withToken(config('services.tmbd.token'))
                ->get('https://api.themoviedb.org/3/movie/'.$movie['movie_api_id'])
                ->json())->toArray();
            $movie = array_merge($movie, $details);
        }
        $isFriend = $this->user->isFriendWith($user);
        if ($username === $this->user->username) {
            return view('myProfile', ['user' => $user]);
        }
        else{
            return view('viewProfile', ['user' => $user, 'isFriend' => $isFriend], compact('watchedMovies'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $username)
    {
        $user = User::where('username', $username) -> firstOrFail();
        $user->update($request->validated());
        return redirect()->route('user.show', $username);
    }
}
