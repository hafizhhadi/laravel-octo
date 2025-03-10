<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([
            [
                'name' => 'Ashley Morgan',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'name' => 'Danny Yale',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'name' => 'Michael Bay',
                'created_at' => now(),
                'updated_at' => now()
            ]
            
        ]);
    }
}
