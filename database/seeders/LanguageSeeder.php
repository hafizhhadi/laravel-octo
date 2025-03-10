<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'name' => 'English',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'name' => 'Mandarin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
