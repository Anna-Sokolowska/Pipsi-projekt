<?php

namespace App\Http\Controllers;

use App\Models\WatchedMovies;
use App\ViewModels\MoviesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmbd.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            -> json()['results'];
        $watchedMovies = WatchedMovies::all()->toArray();
        foreach ($watchedMovies as &$movie){
            $id = $movie['id'];
            $details = [];
            $details = collect( Http::withToken(config('services.tmbd.token'))
                ->get('https://api.themoviedb.org/3/movie/'.$movie['movie_api_id'])
                ->json())->toArray();
            $movie = array_merge($movie, $details);
            $movie['id'] = $id;
        }
        $viewModel = new MoviesModel(
            $popularMovies,
            $watchedMovies,
        );
        return view('home', $viewModel);
    }
}
