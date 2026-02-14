<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'Innovative Digital Solutions',
            'subtitle' => 'Empowering your brand through cutting-edge technology and design.',
            'image' => null,
            'button_text' => 'Explore Services',
            'button_link' => '/services',
            'order_index' => 1,
            'is_active' => true,
        ]);

        Banner::create([
            'title' => 'Strategic Marketing Growth',
            'subtitle' => 'Boost your online presence with our data-driven marketing strategies.',
            'image' => null,
            'button_text' => 'View Portfolio',
            'button_link' => '/portfolio',
            'order_index' => 2,
            'is_active' => true,
        ]);
    }
}
