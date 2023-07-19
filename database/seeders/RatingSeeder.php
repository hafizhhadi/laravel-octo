<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'user_id' => 1,
                'movie_id' => 1,
                'rating' => '9',
                'description' => 'Good movie!',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'user_id' => 2,
                'movie_id' => 2,
                'rating' => '7.5',
                'description' => 'Decent movie!',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        Rating::factory()->count(100)->create();
    }
}
