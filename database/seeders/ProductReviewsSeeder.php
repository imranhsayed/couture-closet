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
		    'user_id' => 2,
		    'order_id' => 1,
		    'rating' => rand(3, 5),
		    'title' => 'Incredibly Comfortable and Perfect for Everyday Use',
		    'review_text' => 'I was pleasantly surprised by how comfortable this product is. It fits perfectly and has quickly become my go-to choice for daily wear. The fabric is soft and breathable, making it ideal for long hours of use. Even after multiple washes, it still looks as good as new. Highly recommend this to anyone looking for a reliable and stylish option.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 2,
		    'user_id' => 3,
		    'order_id' => 2,
		    'rating' => rand(3, 5),
		    'title' => 'Great Value for Money, A Few Minor Flaws',
		    'review_text' => 'This product offers good value for its price. The design is appealing, and the material feels durable. However, there are a few minor flaws, such as the stitching in some areas not being as strong as expected. Despite this, it’s still a good buy for the price, and I’m generally satisfied with my purchase.',
		    'is_verified_purchase' => true,
		    'is_approved' => false
	    ];

	    $productReviews[] = [
		    'product_id' => 2,
		    'user_id' => 2,
		    'order_id' => 3,
		    'rating' => rand(3, 5),
		    'title' => 'Perfect Fit, Excellent Quality',
		    'review_text' => 'This product fits me perfectly, and the quality is outstanding. I’ve worn it multiple times, and it has maintained its shape and color. The attention to detail in the craftsmanship is evident, and it’s clear that this product was made to last. I’m extremely happy with this purchase and would recommend it to others without hesitation.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 4,
		    'user_id' => 3,
		    'order_id' => 1,
		    'rating' => rand(3, 5),
		    'title' => 'Good Design, But Material Could Be Better',
		    'review_text' => 'The design of this product is definitely eye-catching, and it fits well. However, the material feels a bit thin and not as durable as I had hoped. It’s still a decent product, but I’m not sure how long it will last with regular use. If the material were a bit thicker, it would be perfect.',
		    'is_verified_purchase' => true,
		    'is_approved' => false
	    ];

	    $productReviews[] = [
		    'product_id' => 5,
		    'user_id' => 2,
		    'order_id' => 2,
		    'rating' => rand(3, 5),
		    'title' => 'Outstanding Quality, Will Definitely Purchase Again',
		    'review_text' => 'I’m very impressed with the quality of this product. It has quickly become one of my favorites due to its excellent craftsmanship and the comfort it provides. The fabric is soft yet sturdy, and it has held up well even after several washes. I will definitely be purchasing more from this brand in the future.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 1,
		    'user_id' => 3,
		    'order_id' => 3,
		    'rating' => rand(3, 5),
		    'title' => 'Decent Product, But Room for Improvement',
		    'review_text' => 'The product is decent overall, but I think there’s room for improvement. The fit is good, and the design is stylish, but the material feels a bit cheap compared to other products in the same price range. It’s not bad, but I was expecting a little more in terms of quality.',
		    'is_verified_purchase' => true,
		    'is_approved' => false
	    ];

	    $productReviews[] = [
		    'product_id' => 2,
		    'user_id' => 2,
		    'order_id' => 1,
		    'rating' => rand(3, 5),
		    'title' => 'Meets Expectations, Nothing Extraordinary',
		    'review_text' => 'This product meets the basic expectations, but it’s not exceptional. The fit is fine, and the quality is adequate, but there’s nothing about it that really stands out. It’s a good option if you’re looking for something simple and affordable, but don’t expect anything too special.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 3,
		    'user_id' => 3,
		    'order_id' => 2,
		    'rating' => rand(3, 5),
		    'title' => 'Stylish and Comfortable, Very Satisfied',
		    'review_text' => 'I’m really pleased with this product. It’s both stylish and comfortable, making it a great choice for everyday wear. The material is soft and feels great against the skin, and the fit is just right. I’ve received several compliments on it already. I’m very satisfied with this purchase and would recommend it to others.',
		    'is_verified_purchase' => true,
		    'is_approved' => false
	    ];

	    $productReviews[] = [
		    'product_id' => 4,
		    'user_id' => 2,
		    'order_id' => 3,
		    'rating' => rand(3, 5),
		    'title' => 'Average Quality, Expected More for the Price',
		    'review_text' => 'The product is okay, but I expected a bit more considering the price. The design is nice, but the material feels somewhat lacking in quality. It’s not bad, but it’s not great either. I think there are better options available in this price range, and I would probably choose something else next time.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    $productReviews[] = [
		    'product_id' => 5,
		    'user_id' => 3,
		    'order_id' => 1,
		    'rating' => rand(3, 5),
		    'title' => 'Excellent Value for Money, Highly Recommend',
		    'review_text' => 'This product offers excellent value for money. The quality is impressive, and the fit is just right. It’s a versatile piece that works well for both casual and semi-formal occasions. I’m very happy with this purchase and would highly recommend it to anyone looking for a high-quality product at a reasonable price.',
		    'is_verified_purchase' => true,
		    'is_approved' => true
	    ];

	    DB::table('product_reviews')->insert($productReviews);
    }
}
