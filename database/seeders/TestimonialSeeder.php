<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'position' => 'CEO',
                'company' => 'TechStart Inc',
                'content' => 'Working with this agency transformed our online presence completely. Our website traffic increased by 300% in just 3 months, and our conversion rates doubled. The team is professional, responsive, and truly understands digital marketing.',
                'rating' => 5,
                'avatar' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Marketing Director',
                'company' => 'GrowthHub Solutions',
                'content' => 'The ROI we\'ve seen from their PPC campaigns is incredible. They managed to reduce our cost per acquisition by 45% while increasing our lead volume. I highly recommend their services to any business looking to scale.',
                'rating' => 5,
                'avatar' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Emily Rodriguez',
                'position' => 'Founder',
                'company' => 'Bloom Beauty Co',
                'content' => 'Their social media strategy took our brand to the next level. We went from 2,000 to 50,000 engaged followers in 6 months. The content they create is always on-brand and drives real engagement. Absolutely worth every penny!',
                'rating' => 5,
                'avatar' => null,
                'is_active' => true,
            ],
            [
                'name' => 'David Thompson',
                'position' => 'Owner',
                'company' => 'Elite Fitness Studio',
                'content' => 'Best decision we made for our business! Their SEO work got us ranking on the first page for all our target keywords. We\'re now getting 10x more organic leads than before. The team is knowledgeable and always available.',
                'rating' => 5,
                'avatar' => null,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
