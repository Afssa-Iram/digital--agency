<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@agency.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);

        // Call other seeders
        $this->call([
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            BannerSeeder::class,
        ]);
    }
}
