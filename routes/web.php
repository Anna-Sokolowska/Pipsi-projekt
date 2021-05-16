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

Route::get('/user/{username}', [UserController::class, 'show'])->name('user.show');
Route::put('/user/{username}', [UserController::class, 'update'])->name('user.update');
Route::put('/friends', [FriendshipController::class, 'update']);
Route::post('/friends/sendFriendRequest', [FriendshipController::class, 'sendFriendRequest']);
Route::post('/friends/acceptFriendRequest', [FriendshipController::class, 'acceptFriendRequest']);
Route::post('/friends/declineFriendRequest', [FriendshipController::class, 'declineFriendRequest']);
Route::post('/friends/removeFriend', [FriendshipController::class, 'removeFriend']);
Route::post('/friends/search', [FriendshipController::class, 'search']);

Route::get('/movie/{movie}', [MoviesController::class, 'show']) ->name('movies.show');
Route::get('/explore',[MoviesController::class, 'explore']) ->name('movies.explore');
Route::get('/watchedMovies',[WatchedMoviesController::class, 'index']) ->name('watchedmovies.index');
Route::post('/addMovie', [WatchedMoviesController::class, 'addMovie']) ->name('watchedmovies.addMovie');
Route::get('/removeMovie/{id}', [WatchedMoviesController::class, 'removeMovie']) ->name('watchedmovies.removeMovie');

Auth::routes();


