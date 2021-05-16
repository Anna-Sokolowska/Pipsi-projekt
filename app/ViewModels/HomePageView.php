<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class HomePageView extends ViewModel
{
    public $popular;
    public $watched;
    public function __construct($popular,$watched)
    {
        $this->popular = $popular;
        $this->watched = $watched;
    }
    /**
     * @return mixed
     */public function popularMovies()
    {
        return collect($this->popular)->map(function ($popular) {
            return collect($popular)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w185' . $popular['poster_path'],
                'movie_id' => $popular['id'],
            ])->only('poster_path','title','movie_id');
        })->take(10);
    }
    public function watchedMovies()
    {
        return collect($this->watched)->map(function ($watched) {
            return collect($watched)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w185' . $watched['poster_path'],
                'movie_id' => $watched['movie_api_id'],
            ])->only('poster_path','title','id','movie_id');
        })->sortDesc()->take(10);
    }
}
