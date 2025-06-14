<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'demouser',
                'email' => 'demo@example.com',
                'password' => Hash::make('password123'),
                'profile_picture_url' => 'https://via.placeholder.com/150',
                'date_joined' => now(),
                'last_login' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'testuser',
                'email' => 'test@example.com',
                'password' => Hash::make('password123'),
                'profile_picture_url' => 'https://via.placeholder.com/150',
                'date_joined' => now(),
                'last_login' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
