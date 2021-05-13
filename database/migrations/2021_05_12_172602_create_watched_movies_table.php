<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchedMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watched_movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('movie_api_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('watched_movies');
    }
}
