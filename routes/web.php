<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\WatchedMoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FriendshipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/friends', [FriendshipController::class, 'index'])->name('friends');
Route::get('/user/{name}', [UserController::class, 'show'])->name('user.show');
Route::put('/user/{name}', [UserController::class, 'show'])->name('user.update');
Route::get('/movie/{movie}', [MoviesController::class, 'show']) ->name('movies.show');
Route::get('/explore',[MoviesController::class, 'explore']) ->name('movies.explore');
Route::get('/watchedMovies',[WatchedMoviesController::class, 'index']) ->name('watchedmovies.index');
Route::post('/addMovie', [WatchedMoviesController::class, 'addMovie']) ->name('watchedmovies.addMovie');
<<<<<<< Updated upstream
=======
Route::get('/removeMovie/{id}', [WatchedMoviesController::class, 'removeMovie']) ->name('watchedmovies.removeMovie');

>>>>>>> Stashed changes
Auth::routes();


