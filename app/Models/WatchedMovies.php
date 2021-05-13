<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchedMovies extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'movie_api_id'
    ];
}
