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
    public function run(): void
    {
        $products = DB::table('products')->get();
        $sizes = [4, 5, 6, 7, 8, 9]; // XS, S, M, L, XL, XXL
        $brands = range(10, 19); // Brand ID's from 10 to 19

        $productCategories = [];

        foreach ($products as $product) {
            // Assign demography based on product name
            if (preg_match('/\bWomen\b/i', $product->name)) {
                $demographyId = 1; // Women
            } elseif (preg_match('/\bMen\b/i', $product->name)) {
                $demographyId = 3; // Men
            } elseif (preg_match('/\bKids\b/i', $product->name)) {
                $demographyId = 2; // Kids
            } else {
                // Skip If no demography is found
                continue;
            }

            // Assign a random size
            $sizeId = $sizes[array_rand($sizes)];

            // Assign a random brand
            $brandId = $brands[array_rand($brands)];

            $productCategories[] = [
                'product_id' => $product->id,
                'category_id' => $demographyId
            ];
            $productCategories[] = [
                'product_id' => $product->id,
                'category_id' => $sizeId
            ];
            $productCategories[] = [
                'product_id' => $product->id,
                'category_id' => $brandId
            ];
        }

        DB::table('product_categories')->insert($productCategories);
    }
}