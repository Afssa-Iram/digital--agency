<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
                'icon' => 'fa-share-alt',
                'description' => 'Boost your brand presence across all major social platforms. We create engaging content, manage your communities, and run targeted ad campaigns that convert followers into customers.',
                'content' => 'Full social media management and advertising services',
                'is_active' => true,
            ],
            [
                'title' => 'Search Engine Optimization',
                'slug' => 'seo',
                'icon' => 'fa-search',
                'description' => 'Dominate search results and drive organic traffic to your website. Our SEO experts use proven strategies to improve your rankings, increase visibility, and attract qualified leads.',
                'content' => 'Complete SEO optimization and strategy',
                'is_active' => true,
            ],
            [
                'title' => 'Content Marketing',
                'slug' => 'content-marketing',
                'icon' => 'fa-pen-fancy',
                'description' => 'Tell your brand story with compelling content that resonates. From blog posts to videos, we create content that educates, entertains, and converts your target audience.',
                'content' => 'Strategic content creation and distribution',
                'is_active' => true,
            ],
            [
                'title' => 'Email Marketing',
                'slug' => 'email-marketing',
                'icon' => 'fa-envelope',
                'description' => 'Build lasting relationships with personalized email campaigns. We design beautiful emails, segment your audience, and optimize for maximum open rates and conversions.',
                'content' => 'Email campaign design and automation',
                'is_active' => true,
            ],
            [
                'title' => 'Pay-Per-Click Advertising',
                'slug' => 'ppc-advertising',
                'icon' => 'fa-bullhorn',
                'description' => 'Get instant visibility with targeted PPC campaigns. We manage Google Ads, Facebook Ads, and more to deliver measurable ROI and drive qualified traffic to your business.',
                'content' => 'PPC campaign management and optimization',
                'is_active' => true,
            ],
            [
                'title' => 'Brand Strategy & Design',
                'slug' => 'brand-strategy',
                'icon' => 'fa-paint-brush',
                'description' => 'Create a memorable brand identity that stands out. We develop comprehensive brand strategies, design stunning visuals, and ensure consistency across all touchpoints.',
                'content' => 'Complete brand development and design services',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
