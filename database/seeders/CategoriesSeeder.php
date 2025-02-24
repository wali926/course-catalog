<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["id" => "1c2a3b4d-5e6f-7a8b-9c0d-1e2f3a4b5c6d", "name" => "Technology", "parent" => null],
            ["id" => "2c3d4e5f-6a7b-8c9d-0e1f-2a3b4c5d6e7f", "name" => "Software Development", "parent" => "1c2a3b4d-5e6f-7a8b-9c0d-1e2f3a4b5c6d"],
            ["id" => "3d4e5f6a-7b8c-9d0e-1f2a-3b4c5d6e7f8a", "name" => "Hardware Engineering 2", "parent" => "2c3d4e5f-6a7b-8c9d-0e1f-2a3b4c5d6e7f"],
            ["id" => "3d4e5f6a-7b8c-9d0e-1f2a-3b4c5d6e7f82", "name" => "Hardware Engineering 3", "parent" => "3d4e5f6a-7b8c-9d0e-1f2a-3b4c5d6e7f8a"],
            ["id" => "4e5f6a7b-8c9d-0e1f-2a3b-4c5d6e7f8a9b", "name" => "Education", "parent" => null],
            ["id" => "5f6a7b8c-9d0e-1f2a-3b4c-5d6e7f8a9b0c", "name" => "Higher Education", "parent" => "4e5f6a7b-8c9d-0e1f-2a3b-4c5d6e7f8a9b"],
            ["id" => "6a7b8c9d-0e1f-2a3b-4c5d-6e7f8a9b0c1d", "name" => "K-12 Education", "parent" => "4e5f6a7b-8c9d-0e1f-2a3b-4c5d6e7f8a9b"],
            ["id" => "7b8c9d0e-1f2a-3b4c-5d6e-7f8a9b0c1d2e", "name" => "Health & Wellness", "parent" => null],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'id' => $category['id'],
                'name' => $category['name'],
                'parent_id' => $category['parent'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
