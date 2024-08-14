<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $productCategories = [];

        // Manually assigning categories based on logical categorization
        $categories = [
            1 => 1,  // Women
            2 => 2,  // Kids
            3 => 3,  // Men
            4 => 4,  // XS
            5 => 5,  // S
            6 => 6,  // M
            7 => 7,  // L
            8 => 8,  // XL
            9 => 9,  // XXL
            10 => 10, // Nike
            11 => 11, // Adidas
            12 => 12, // Gucci
            13 => 13, // Zara
            14 => 14, // H&M
            15 => 15, // Levi's
            16 => 16, // Ralph Lauren
            17 => 17, // Uniqlo
            18 => 18, // Gap
            19 => 19, // Calvin Klein
        ];

        // Assign categories to products (this is an example, adjust as needed)
        for ($i = 1; $i <= 50; $i++) {
            // Randomly assign a demography, size, and brand to each product
            $productCategories[] = [
                'category_id' => rand(1, 3), // Demography (Women, Kids, Men)
                'product_id'  => $i,
                'created_at'  => now(),
                'updated_at'  => now()
            ];
            $productCategories[] = [
                'category_id' => rand(4, 9), // Size (XS, S, M, L, XL, XXL)
                'product_id'  => $i,
                'created_at'  => now(),
                'updated_at'  => now()
            ];
            $productCategories[] = [
                'category_id' => rand(10, 19), // Brand (Nike, Adidas, Gucci, etc.)
                'product_id'  => $i,
                'created_at'  => now(),
                'updated_at'  => now()
            ];
        }

        DB::table('product_categories')->insert($productCategories);
    }
}
