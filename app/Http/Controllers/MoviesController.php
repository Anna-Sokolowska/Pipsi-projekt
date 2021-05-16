<?php

namespace App\Http\Controllers;

use App\Models\WatchedMovies;
<<<<<<< Updated upstream
use App\ViewModels\MovieModel;
use App\ViewModels\MoviesModel;
use Illuminate\Http\Request;
=======
use App\ViewModels\MovieView;
use App\ViewModels\HomePageView;
use Illuminate\Support\Facades\Auth;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function explore(){
        return view('explore');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmbd.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?&append_to_response=credits')
            -> json();
        $viewModel = new MovieView(
            $movie,
        );
<<<<<<< Updated upstream

        return view('movie', $viewModel);
=======
        return view('movie', $viewModel)->with('friends', Auth::user()->getFriends($perPage = 20));
>>>>>>> Stashed changes
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
