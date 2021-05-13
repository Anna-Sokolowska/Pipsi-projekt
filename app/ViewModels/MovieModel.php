<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MovieModel extends ViewModel
{
    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return mixed
     */
    public function movie()
    {
        return collect($this->movie)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w342'.$this->movie['poster_path'],
            'genres' => collect($this->movie['genres'])->pluck('name')->implode(', '),
            'director' => collect($this->movie['credits']['crew'])->whereInStrict('job','Director')->pluck('name')->implode(''),
            'writer' => collect($this->movie['credits']['crew'])->whereInStrict('department','Writing')->pluck('name')->implode(', '),
            'cast' => collect($this->movie['credits']['cast'])->pluck('name')->implode(', '),
        ]);
    }
}
