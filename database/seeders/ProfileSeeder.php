<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            DB::table('profiles')->insert([
                'user_id' => $user->id,
                'display_name' => ucfirst($user->username),
                'bio' => 'This is a sample bio for ' . $user->username,
                'profile_banner_url' => 'https://via.placeholder.com/1200x300',
                'theme' => json_encode([
                    'colors' => [
                        'primary' => '#007bff',
                        'secondary' => '#6c757d'
                    ],
                    'fonts' => [
                        'main' => 'Roboto',
                        'secondary' => 'Open Sans'
                    ]
                ]),
                'social_media' => json_encode([
                    'instagram' => 'instagram/' . $user->username,
                    'twitter' => 'twitter/' . $user->username
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
