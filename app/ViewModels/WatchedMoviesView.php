<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class WatchedMoviesView extends ViewModel
{
    public $watched;
    public function __construct($watched)
    {
        $this->watched = $watched;
    }
    public function watchedMovies()
    {
        return collect($this->watched)->map(function ($watched) {
            return collect($watched)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w185' . $watched['poster_path'],
                'movie_id' => $watched['movie_api_id'],
            ])->only('poster_path','title','id','movie_id');
        })->sortDesc();
    }
}
