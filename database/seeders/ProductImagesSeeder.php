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
            15 => ['women_shirt_1.jpg', 'women_shirt_2.jpg'],
            16 => ['men_gray_shirt_1.jpg','men_gray_shirt_2.jpg'],
            17 => ['black_leather_bag_1.jpg'],
            18 => ['women_yellow_bag_1.jpg'],
            19 => ['H&M_bag_1.jpg'],
            20 => ['men_black_tshirt_1.jpg','men_black_tshirt_2.jpg'],
            21 => ['men_gray_shirt_1.jpg','men_gray_shirt_1.jpg'],
            22 => ['purple_white_bag_1.jpg'],
            23 => ['snigdha_black_bag_1.jpg'],
            24 => ['women_black_jacket_1.jpg','women_black_jacket_2.jpg'],
            25 => ['women_red_gucci_bag_1.jpg','women_red_gucci_bag_2.jpg'],
            26 => ['women_shirt_1.jpg','women_shirt_2.jpg'],
            27 => ['adidas_jacket_men_1.jpg'],
            28 => ['boy-casual-wear-skateboard.jpg'],
            29 => ['close-up-boy-showing-shirt.jpg'],
            30 => ['denim_jeans_1.jpg'],
            31 => ['fashionable-male-model-posing.jpg'],
            32 => ['girl-s-casual-white-t-shirt.jpg'],
            33 => ['girl-with-white-tee-denim-jacket.jpg'],
            34 => ['kid-studio-portrait-isolated.jpg'],
            35 => ['leather_jacket_women.jpg'],
            36 => ['nike_tshirt_men_1.jpg'],
            37 => ['portrait-girl-posing-looking-serious.jpg'],
            38 => ['default_1.jpg'],
            39 => ['portrait-girl-posing-looking-serious.jpg'],
            40 => ['default_1.jpg'],
            41 => ['default_1.jpg'],
            42 => ['default_1.jpg'],
            43 => ['default_1.jpg'],
            44 => ['default_1.jpg'],
            45 => ['default_1.jpg'],
            46 => ['default_1.jpg'],
            47 => ['default_1.jpg'],
            48 => ['default_1.jpg'],
            49 => ['default_1.jpg'],
            50 => ['default_1.jpg'],
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
