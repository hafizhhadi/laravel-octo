<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_languages')->insert([
            [
                'movie_id' => 1,
                'language_id' => 1,
            ] , [
                'movie_id' => 2,
                'language_id' => 2,
            ]
        ]);
    }
}
