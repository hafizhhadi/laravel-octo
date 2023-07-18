<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScreentimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('screentimes')->insert([
            [
                'movie_id' => 1,
                'theater_id' => 1,
                'start_date_time' => '2023-04-21 15:00:00',
                'end_date_time' => '2023-04-21 17:00:00',
            ] , [
                'movie_id' => 2,
                'theater_id' => 1,
                'start_date_time' => '2023-04-21 21:00:00',
                'end_date_time' => '2023-04-21 23:00:00',
            ]
        ]);
    }
}
