<?php

namespace App\Http\Controllers;

use App\ViewModels\MovieView;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
   
    public function explore(){
        return view('explore');
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
        return view('movie', $viewModel)->with('friends', Auth::user()->getFriends($perPage = 20));
    }

}
