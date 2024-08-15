<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = [];
        $images = [
            1 => ['grey_sweater_1.jpg', 'grey_sweater_2.jpg'],
            2 => ['black_cardigan_1.jpg'],
            3 => ['beige_cardigan_1.jpg', 'beige_cardigan_2.jpg'],
            4 => ['orange_cardigan_1.jpg', 'orange_cardigan_2.jpg'],
            5 => ['grey_check_jacket.jpg'],
            6 => ['cream_jacket_1.jpg'],
            7 => ['yellow_jacket_1.jpg', 'yellow_jacket_2.jpg'],
            8 => ['pink_feather_jacket_1.jpg', 'pink_feather_jacket_2.jpg'],
            9 => ['grey_jacket_1.jpg', 'grey_jacket_2.jpg'],
            10 => ['rust_cardigan_1.jpg'],
            11 => ['beige_dress_1.jpg'],
            12 => ['denim_jacket_1.jpg'],
            13 => ['classic_bag.jpg'],
            14 => ['brown_leather_jacket_1.jpg'],
            15 => ['women_shirt_1.jpg'],
            16 => ['red_sweater_1.jpg', 'red_sweater_2.jpg'],
            17 => ['blue_scarf_1.jpg'],
            18 => ['green_cardigan_1.jpg', 'green_cardigan_2.jpg'],
            19 => ['purple_jacket_1.jpg', 'purple_jacket_2.jpg'],
            20 => ['brown_boots_1.jpg'],
            21 => ['white_sneakers_1.jpg', 'white_sneakers_2.jpg'],
            22 => ['black_jeans_1.jpg'],
            23 => ['tan_coat_1.jpg', 'tan_coat_2.jpg'],
            24 => ['red_dress_1.jpg'],
            25 => ['navy_blazer_1.jpg', 'navy_blazer_2.jpg'],
            26 => ['gold_necklace_1.jpg'],
            27 => ['silver_ring_1.jpg'],
            28 => ['black_hat_1.jpg', 'black_hat_2.jpg'],
            29 => ['plaid_shirt_1.jpg'],
            30 => ['green_sweater_1.jpg', 'green_sweater_2.jpg'],
            31 => ['blue_jeans_1.jpg'],
            32 => ['yellow_dress_1.jpg'],
            33 => ['black_shoes_1.jpg', 'black_shoes_2.jpg'],
            34 => ['red_scarf_1.jpg'],
            35 => ['white_shirt_1.jpg', 'white_shirt_2.jpg'],
            36 => ['grey_pants_1.jpg'],
            37 => ['leather_jacket_1.jpg', 'leather_jacket_2.jpg'],
            38 => ['denim_shorts_1.jpg'],
            39 => ['purple_scarf_1.jpg'],
            40 => ['pink_dress_1.jpg', 'pink_dress_2.jpg'],
            41 => ['blue_jacket_1.jpg'],
            42 => ['beige_boots_1.jpg'],
            43 => ['black_suit_1.jpg', 'black_suit_2.jpg'],
            44 => ['red_heels_1.jpg'],
            45 => ['green_trench_coat_1.jpg'],
            46 => ['white_dress_1.jpg', 'white_dress_2.jpg'],
            47 => ['orange_sweater_1.jpg'],
            48 => ['grey_shoes_1.jpg'],
            49 => ['blue_tshirt_1.jpg', 'blue_tshirt_2.jpg'],
            50 => ['yellow_skirt_1.jpg'],
            51 => ['black_coat_1.jpg'],
            52 => ['pink_blouse_1.jpg', 'pink_blouse_2.jpg'],
            53 => ['brown_pants_1.jpg'],
            54 => ['green_shirt_1.jpg'],
            55 => ['white_cardigan_1.jpg', 'white_cardigan_2.jpg'],
        ];
        
        foreach ($images as $productId => $imageList) {
            foreach ($imageList as $index => $imageUrl) {
                $productImages[] = [
                    'product_id' => $productId,
                    'image_url' => 'images/' . $imageUrl,
                    'is_primary' => $index === 0, 
                    'display_order' => $index + 1
                ];
            }
        }

        DB::table('product_images')->insert($productImages);
    }

}
