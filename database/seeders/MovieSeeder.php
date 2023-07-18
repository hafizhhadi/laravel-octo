<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'director_id' => 1,
                'title' => 'Transfomers',
                'description' => 'A teenagers boy found out that his car is actually a robot',
                'mpaa_rating' => 'PG-16',
                'length' => '120',
                'release' => '2023-07-18',
            ] , [
                'director_id' => 2,
                'title' => 'Transfomers: Revenge of the Fallen',
                'description' => 'Megatron came back for his revenge',
                'mpaa_rating' => 'PG-16',
                'length' => '120',
                'release' => '2023-07-19',
            ]
        ]);
    }
}
