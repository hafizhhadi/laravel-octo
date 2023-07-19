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
                'movie_id' => 12,
                'theater_id' => 1,
                'start_date_time' => '2023-07-20 15:00:00',
                'end_date_time' => '2023-07-20 17:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'movie_id' => 2,
                'theater_id' => 1,
                'start_date_time' => '2023-07-21 21:00:00',
                'end_date_time' => '2023-07-21 23:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'movie_id' => 1,
                'theater_id' => 1,
                'start_date_time' => '2023-07-19 21:00:00',
                'end_date_time' => '2023-07-19 23:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'movie_id' => 12,
                'theater_id' => 1,
                'start_date_time' => '2023-06-21 21:00:00',
                'end_date_time' => '2023-06-21 23:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'movie_id' => 5,
                'theater_id' => 2,
                'start_date_time' => '2023-08-10 12:00:00',
                'end_date_time' => '2023-08-10 14:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'movie_id' => 7,
                'theater_id' => 2,
                'start_date_time' => '2023-08-10 12:00:00',
                'end_date_time' => '2023-08-10 14:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
