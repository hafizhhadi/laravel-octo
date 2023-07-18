<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoviePerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_performers')->insert([
            [
                'movie_id' => 1,
                'performer_id' => 2,
            ] , [
                'movie_id' => 1,
                'performer_id' => 1,
            ] , [
                'movie_id' => 2,
                'performer_id' => 1,
            ]
        ]);
    }
}
