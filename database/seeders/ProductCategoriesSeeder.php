<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $productCategories = [];

        for ($i = 1; $i <= 50; $i++) {
            $productCategories[] = [
                'category_id' => rand(1, 10), // Assuming you have 10 categories
                'product_id' => $i,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('product_categories')->insert($productCategories);
    }
}
