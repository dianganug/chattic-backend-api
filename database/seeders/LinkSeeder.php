<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = DB::table('profiles')->get();

        foreach ($profiles as $profile) {
            // Create sample links for each profile
            DB::table('links')->insert([
                [
                    'profile_id' => $profile->id,
                    'title' => 'My Portfolio',
                    'url' => 'https://example.com/portfolio',
                    'order_position' => 1,
                    'is_active' => true,
                    'click_count' => rand(0, 100),
                    'icon_url' => 'https://via.placeholder.com/32',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'profile_id' => $profile->id,
                    'title' => 'My Blog',
                    'url' => 'https://example.com/blog',
                    'order_position' => 2,
                    'is_active' => true,
                    'click_count' => rand(0, 100),
                    'icon_url' => 'https://via.placeholder.com/32',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
