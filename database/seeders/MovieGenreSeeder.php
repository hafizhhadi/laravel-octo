<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_genres')->insert([
            [
                'movie_id' => 1,
                'genre_id' => 2,
            ] , [
                'movie_id' => 2,
                'genre_id' => 1,
            ]
        ]);
    }
}
