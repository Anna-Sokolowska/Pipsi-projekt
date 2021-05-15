<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchedMovies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class WatchedMoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }
    
    public function index()
    {
        $watchedMovies = WatchedMovies::where('user_id', $this->user->id)->get()->toArray();
        foreach ($watchedMovies as &$movie){
            $details = [];
            $details = collect( Http::withToken(config('services.tmbd.token'))
                ->get('https://api.themoviedb.org/3/movie/'.$movie['movie_api_id'])
                ->json())->toArray();
            $movie = array_merge($movie, $details);
        }

        return view('watchedMovies', compact('watchedMovies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMovie(Request $request)
    {
        $request -> validate([
            'user_id' => 'required',
            'movie_api_id' => 'required',
        ]);
        $query = DB::table('watched_movies')->insert([
            'user_id'=>$request->input('user_id'),
            'movie_api_id'=>$request->input('movie_api_id'),
        ]);

        if ($query){
            return back()->with('success','Add to Watched');
        }else{
            return back()->with('failed', 'Not This Time');
        }
    }
}
