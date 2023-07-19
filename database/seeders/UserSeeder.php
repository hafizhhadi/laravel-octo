<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Hafiz Hadi',
                'email' => 'hafizhadi@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ] , [
                'name' => 'Azri Irfan',
                'email' => 'azriirfan@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
