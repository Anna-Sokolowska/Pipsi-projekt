<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Illuminate\Http\Request;
use App\Models\WatchedMovies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\ViewModels\WatchedMoviesView;

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
            $id = $movie['id'];
            $details = [];
            $details = collect( Http::withToken(config('services.tmbd.token'))
                ->get('https://api.themoviedb.org/3/movie/'.$movie['movie_api_id'])
                ->json())->toArray();
            $movie = array_merge($movie, $details);
            $movie['id'] = $id;
        }
        $viewModel = new WatchedMoviesView(
            $watchedMovies,
        );

        return view('watchedMovies', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function addMovie(Request $request)
    {
        $request -> validate([
            'movie_api_id' => 'required',
        ]);
        $check = WatchedMovies::where([
            ['user_id',$this->user->id],
            ['movie_api_id',$request->input('movie_api_id')]
        ])->get()->toArray();
        if (!$check) {
            $query = DB::table('watched_movies')->insert([
                'user_id' => $this->user->id,
                'movie_api_id' => $request->input('movie_api_id'),
            ]);
            if ($query) {
                return back()->with('success', 'Add to Watched');
            } else {
                return back()->with('failed', 'Not This Time');
            }
        }
        else{
            return back()->with('failed', 'Not This Time');
        }
    }
    public function removeMovie($movie_id){
        $delete = DB::table('watched_movies')->where([
            ['user_id',$this->user->id],
        ['movie_api_id', $movie_id]])->delete();
        if ($delete){
            return back()->with('success','Movie Deleted');
        }else{
            return back()->with('failed', 'Not This Time');
        }
    }
}
