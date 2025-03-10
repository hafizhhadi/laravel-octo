<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theaters')->insert([
            [
                'name' => 'ABC Movies',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'name' => 'Green Screen Cinema',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
