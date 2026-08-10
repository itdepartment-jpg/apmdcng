<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Seed the blog categories.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Shipping & Maritime',
                'description' => 'Insights, updates and industry developments across shipping and maritime operations.',
            ],
            [
                'name' => 'Groupage',
                'description' => 'News, guides and insights about groupage shipping and consolidated cargo solutions.',
            ],
            [
                'name' => 'Logistics & Supply Chain',
                'description' => 'Practical insights into logistics, transportation and supply chain management.',
            ],
            [
                'name' => 'Customs & Clearance',
                'description' => 'Updates and useful information on customs processes, clearance and compliance.',
            ],
            [
                'name' => 'Warehousing',
                'description' => 'Insights into warehousing, cargo storage, inventory and distribution solutions.',
            ],
            [
                'name' => 'Industry News',
                'description' => 'Important developments and news affecting the maritime and logistics industry.',
            ],
            [
                'name' => 'APMDC Updates',
                'description' => 'Company news, announcements, services and updates from APMDC.',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                [
                    'slug' => Str::slug($category['name']),
                ],
                [
                    'name' => $category['name'],
                    'description' => $category['description'],
                ]
            );
        }
    }
}