<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'course_id' => 'L373349028',
                'title' => 'Diversity and Inclusion for a Better Business',
                'description' => 'Diversity can seem like a difficult concept to incorporate into the culture of a business...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373349028/800--v112240.jpg',
                'category_id' => '3d4e5f6a-7b8c-9d0e-1f2a-3b4c5d6e7f8a',
            ],
            [
                'course_id' => 'L373371072',
                'title' => 'Leadership for Identity Diversity',
                'description' => 'As a leader, people of many different backgrounds will look to you for guidance...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373371072/800--v112239.jpg',
                'category_id' => '3d4e5f6a-7b8c-9d0e-1f2a-3b4c5d6e7f8a',
            ],
            [
                'course_id' => 'L373324687',
                'title' => 'Applying Yourself to Diverse and Inclusive Leadership',
                'description' => 'Improving diversity in the workplace requires strategic planning and mindful consideration...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373324687/800--v112241.jpg',
                'category_id' => '3d4e5f6a-7b8c-9d0e-1f2a-3b4c5d6e7f82',
            ],
            [
                'course_id' => 'L373312762',
                'title' => 'Finance and Accounting Basics for Nonfinancial Executives',
                'description' => 'Financial knowledge is vital to an executive’s role in a business...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373312762/800--v112243.jpg',
                'category_id' => '4e5f6a7b-8c9d-0e1f-2a3b-4c5d6e7f8a9b',
            ],
            [
                'course_id' => 'L373319845',
                'title' => 'Financial Statements and Reporting for Nonfinancial Executives',
                'description' => 'Financial statements are a critical part of attracting investors...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373319845/800--v112244.jpg',
                'category_id' => '5f6a7b8c-9d0e-1f2a-3b4c-5d6e7f8a9b0c',
            ],
            [
                'course_id' => 'L373327593',
                'title' => 'Financial Planning and Analysis for Nonfinancial Executives',
                'description' => 'With constant market fluctuation and an unpredictable supply chain...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373327593/800--v112246.jpg',
                'category_id' => '7b8c9d0e-1f2a-3b4c-5d6e-7f8a9b0c1d2e',
            ],
            [
                'course_id' => 'L373395597',
                'title' => 'Valuation for Nonfinancial Executives',
                'description' => 'Investments always involve a bit of risk, but you can lower that risk...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373395597/800--v112241.jpg',
                'category_id' => '1f2a3b4c-5d6e-7f8a-9b0c-1d2e3f4a5b6c',
            ],
            [
                'course_id' => 'L373337574',
                'title' => 'Defining Cross-Cultural Leadership',
                'description' => 'The modern business landscape is noticeably globalized...',
                'image_preview' => 'https://cdn0.knowledgecity.com/opencontent/courses/previews/L373337574/800--v112262.jpg',
                'category_id' => '8a9b0c1d-2e3f-4a5b-6c7d-8e9f0a1b2c3d',
            ],
        ];

        DB::table('courses')->insert($courses);
    }
}
