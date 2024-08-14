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
            1 => ['beige_cardigan_1.jpg', 'beige_cardigan_2.jpg'],
            2 => ['beige_dress_1.jpg'],
            3 => ['beige_feather_jacket.jpg'],
            4 => ['beige_jacket.jpg'],
            5 => ['beige_tee_1.jpg', 'beige_tee_2.jpg'],
            6 => ['beigh_dress.jpg'],
            7 => ['black_cardigan_1.jpg'],
            8 => ['black_full_arm_tee_1.jpg', 'black_full_arm_tee_2.jpg'],
            9 => ['brown_leather_jacket_1.jpg'],
            10 => ['brown_sweat_shirt.jpg'],
            11 => ['classic_bag.jpg'],
            12 => ['cream_jacket_1.jpg'],
            13 => ['denim_jacket_1.jpg'],
            14 => ['grey_check_jacket.jpg'],
            15 => ['grey_jacket_1.jpg', 'grey_jacket_2.jpg'],
            16 => ['grey_sweater_1.jpg', 'grey_sweater_2.jpg'],
            17 => ['kid_blue_jacket.jpg'],
            18 => ['kids_blue_tee.jpg'],
            19 => ['kids_pink_jacket.jpg'],
            20 => ['kids_white_tee.jpg'],
            21 => ['men_bag.jpg'],
            22 => ['men_beige_long_coat.jpg'],
            23 => ['men_black_cap.jpg'],
            24 => ['men_black_coat.jpg'],
            25 => ['men_black_cord_set.jpg'],
            26 => ['men_black_long_coat.jpg'],
            27 => ['men_black_long_jacket.jpg'],
            28 => ['men_black_nike_tee.jpg'],
            29 => ['men_brown_sweater.jpg'],
            30 => ['men_brown_trousers.jpg'],
            31 => ['men_hat_1.jpg', 'men_hat_2.jpg'],
            32 => ['men_maroon_cardigan.jpg'],
            33 => ['men_red_jacket.jpg'],
            34 => ['men_rust_shirt.jpg'],
            35 => ['men_white_cardigan.jpg'],
            36 => ['olive_green_jacket.jpg'],
            37 => ['orange_cardigan_1.jpg', 'orange_cardigan_2.jpg'],
            38 => ['pink_feather_jacket_1.jpg', 'pink_feather_jacket_2.jpg'],
            39 => ['pink_off-shoulder_top.jpg'],
            40 => ['product-mini-1.jpg', 'product-mini-2.jpg', 'product-mini-3.jpg', 'product-mini-4.jpg', 'product-mini-5.jpg'],
            41 => ['red_dress.jpg'],
            42 => ['rust_cardigan_1.jpg'],
            43 => ['white_cord_set.jpg'],
            44 => ['women_bag.jpg'],
            45 => ['women_beige_cord_set.jpg'],
            46 => ['women_beige_long_coat.jpg'],
            47 => ['women_denim_cord_set_1.jpg', 'women_denim_cord_set_2.jpg'],
            48 => ['women_green_top.jpg'],
            49 => ['women_grey_cord_set.jpg'],
            50 => ['women_mustard_dress.jpg'],
            // 51 => ['women_pink_sweater.jpg'],
            // 52 => ['women_purple_bag.jpg'],
            // 53 => ['women_white_bag.jpg'],
            // 54 => ['women_white_dress.jpg'],
            // 55 => ['women_white_polka_dot_top.jpg'],
            // 56 => ['women_yellow_skirt.jpg'],
            // 57 => ['wool_thread_jacket.jpg'],
            // 58 => ['yellow_cord_set.jpg'],
            // 59 => ['yellow_jacket_1.jpg', 'yellow_jacket_2.jpg'],
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
