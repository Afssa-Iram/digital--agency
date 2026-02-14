<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            // [
            //     'title' => 'E-Commerce Growth Campaign',
            //     'slug' => 'ecommerce-growth-campaign',
            //     'category' => 'Social Media Marketing',
            //     'client' => 'Fashion Forward',
            //     'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=1200&auto=format&fit=crop',
            //     'description' => 'Increased online sales by 250% through strategic social media advertising and influencer partnerships.',
            //     'content' => 'Complete social media campaign with influencer marketing',
            //     'link' => null,
            //     'is_featured' => true,
            // ],
            [
                'title' => 'Local SEO Domination',
                'slug' => 'local-seo-domination',
                'category' => 'SEO',
                'client' => 'Urban Dental Care',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop',
                'description' => 'Achieved #1 rankings for 15 competitive keywords, resulting in 400% increase in appointment bookings.',
                'content' => 'Local SEO optimization and Google My Business management',
                'link' => null,
                'is_featured' => true,
            ],
            [
                'title' => 'Brand Refresh & Launch',
                'slug' => 'brand-refresh-launch',
                'category' => 'Branding',
                'client' => 'Eco Living Co',
                'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?q=80&w=1200&auto=format&fit=crop',
                'description' => 'Complete brand redesign and launch campaign that generated 50,000+ social media impressions in the first week.',
                'content' => 'Brand strategy, design, and launch campaign',
                'link' => null,
                'is_featured' => true,
            ],
            [
                'title' => 'SaaS Lead Generation',
                'slug' => 'saas-lead-generation',
                'category' => 'PPC Advertising',
                'client' => 'CloudSync Pro',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop',
                'description' => 'Generated 500+ qualified leads per month with a 35% reduction in cost per lead through optimized PPC campaigns.',
                'content' => 'Google Ads and LinkedIn advertising campaigns',
                'link' => null,
                'is_featured' => true,
            ],
            [
                'title' => 'Content Marketing Success',
                'slug' => 'content-marketing-success',
                'category' => 'Content Marketing',
                'client' => 'FinTech Insights',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1200&auto=format&fit=crop',
                'description' => 'Built authority in the fintech space with strategic content that attracted 100,000+ monthly readers.',
                'content' => 'Blog strategy, content creation, and distribution',
                'link' => null,
                'is_featured' => true,
            ],
            [
                'title' => 'Email Automation Campaign',
                'slug' => 'email-automation-campaign',
                'category' => 'Email Marketing',
                'client' => 'Learning Hub',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1200&auto=format&fit=crop',
                'description' => 'Implemented automated email sequences that increased course enrollments by 180% with 45% open rates.',
                'content' => 'Email automation and nurture campaigns',
                'link' => null,
                'is_featured' => true,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
