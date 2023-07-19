<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performers')->insert([
            [
                'name' => 'Keanu Reeve',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'name' => 'Jessica Chamber',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
