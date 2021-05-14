<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_mainPage()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies()
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('10 Most Popular Movie:');
    }
//    public function test_MoviePage()
//    {
//        Http::fake([
//            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
//            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies()
//
//        ]);
//
//        $response = $this->get('/movie/');
//
//        $response->assertStatus(200);
//    }

    private function fakePopularMovies(){
        return Http::response([
            'result' => [

                    ["adult" => false,
                      "backdrop_path" => "",
                      "genre_ids" => [
                            0 => 28,
                        1 => 14,
                        2 => 12,
                        3 => 878,
                      ],
                      "id" => 460465,
                      "original_language" => "en",
                      "original_title" => "Fake Movie",
                      "overview" => "fake plot",
                      "popularity" => 4870.197,
                      "poster_path" => "",
                      "release_date" => "2021-04-07",
                      "title" => "Fake Movie",
                      "video" => false,
                      "vote_average" => 7.8,
                      "vote_count" => 2145,
                        ]
            ]
        ],200);
    }
}
