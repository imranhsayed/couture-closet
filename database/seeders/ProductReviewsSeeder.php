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

	    $productReviews[] = [
		    'product_id' => 1,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Super Comfortable and Stylish',
		    'review_text' => 'I absolutely love this product. The quality is top-notch and it exceeded my expectations.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 2,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Good Value for Money, But Could Be Better',
		    'review_text' => 'The product is decent for its price. Could be better in some aspects.',
		    'is_verified_purchase' => true,
		    'is_approved' => false
	    ];

	    $productReviews[] = [
		    'product_id' => 2,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Perfect Fit and Great Quality',
		    'review_text' => 'This was exactly what I was looking for. Highly recommend to others.',
		    'is_verified_purchase' => true,
		    'is_approved' => false,
	    ];

	    $productReviews[] = [
		    'product_id' => 4,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Material Feels Cheap, Disappointed',
		    'review_text' => 'The product did not meet my expectations. The material feels cheap.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 5,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Fantastic Quality, Will Buy Again',
		    'review_text' => 'Absolutely fantastic product. Will buy again.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 1,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Poor Quality and Arrived Damaged',
		    'review_text' => 'The product arrived damaged and the quality was subpar.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 2,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Decent Quality, Meets Expectations',
		    'review_text' => 'The product meets the basic requirements but nothing exceptional.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 3,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Great Design and Perfect Fit',
		    'review_text' => 'Great design and fits perfectly. Highly satisfied.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 4,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Average Quality, Expected More',
		    'review_text' => 'It’s okay for the price, but I expected more durability.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 5,
		    'user_id' => rand(1, 3),
		    'order_id' => rand(1, 3),
		    'rating' => rand(1, 5),
		    'title' => 'Great Value for Money, Highly Recommend',
		    'review_text' => 'This is one of the best purchases I have made recently. Great value for money.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

        DB::table('product_reviews')->insert($productReviews);
    }
}
