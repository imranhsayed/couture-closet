<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $productReviews = [];

        for ($i = 1; $i <= 15; $i++) {
            $productReviews[] = [
                'product_id' => $i,
                'user_id' => rand(1, 3),
                'order_id' => rand(1, 3),
                'rating' => rand(1, 5),
                'title' => 'Review title for product ' . $i,
                'review_text' => 'Review text for product ' . $i,
                'is_verified_purchase' => true,
                'is_approved' => true
            ];
        }

        DB::table('product_reviews')->insert($productReviews);
    }
}
