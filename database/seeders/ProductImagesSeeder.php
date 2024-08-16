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
            1 => ['men_grey_sweater_1.jpg'],  // Grey Sweater
            2 => ['women_black_cardigan_1.jpg'],  // Black Cardigan
            3 => ['men_beige_cardigan_1.jpg', 'men_beige_cardigan_2.jpg'],  // Beige Cardigan
            4 => ['women_orange_cardigan_1.jpg', 'women_orange_cardigan_2.jpg'],  // Orange Cardigan
            5 => ['men_grey_check_jacket.jpg'],  // Grey Check Jacket
            6 => ['men_cream_jacket_1.jpg'],  // Cream Jacket
            7 => ['women_yellow_jacket_1.jpg', 'women_yellow_jacket_2.jpg'],  // Yellow Jacket
            8 => ['women_pink_feather_jacket_1.jpg', 'women_pink_feather_jacket_2.jpg'],  // Pink Feather Jacket
            9 => ['women_grey_jacket_1.jpg', 'women_grey_jacket_2.jpg'],  // Grey Jacket
            10 => ['men_rust_cardigan_1.jpg'],  // Rust Cardigan
            11 => ['women_beige_dress_1.jpg'],  // Beige Dress
            12 => ['men_denim_jacket_1.jpg'],  // Denim Jacket
            13 => ['women_classic_bag.jpg'],  // Classic Bag
            14 => ['women_brown_leather_jacket_1.jpg'],  // Brown Leather Jacket
            15 => ['women_red_dress.jpg'],  // Red Dress
            16 => ['kids_blue_jacket.jpg'],  // Kids Blue Jacket
            17 => ['women_pink_off-shoulder_top.jpg'],  // Pink Off-Shoulder Top
            18 => ['men_black_coat.jpg'],  // Men's Black Coat
            19 => ['men_white_cardigan.jpg'],  // Men's White Cardigan
            20 => ['women_mustard_dress.jpg'],  // Women's Mustard Dress
            21 => ['men_beige_long_coat.jpg'],  // Men's Beige Long Coat
            22 => ['men_red_jacket.jpg'],  // Men's Red Jacket
            23 => ['men_brown_trousers.jpg'],  // Men's Brown Trousers
            24 => ['men_hat_1.jpg', 'men_hat_2.jpg'],  // Men's Hat
            25 => ['women_denim_cord_set_1.jpg', 'women_denim_cord_set_2.jpg'],  // Women's Denim Cord Set
            26 => ['women_white_polka_dot_top.jpg'],  // Women's White Polka Dot Top
            27 => ['men_black_cap.jpg'],  // Men's Black Cap
            28 => ['men_black_nike_tee.jpg'],  // Men's Black Nike Tee
            29 => ['women_grey_cord_set.jpg'],  // Women's Grey Cord Set
            30 => ['men_black_cord_set.jpg'],  // Men's Black Cord Set
            31 => ['women_beige_long_coat.jpg'],  // Women's Beige Long Coat
            32 => ['women_green_top.jpg'],  // Women's Green Top
            33 => ['women_white_dress.jpg'],  // Women's White Dress
            34 => ['men_maroon_cardigan.jpg'],  // Men's Maroon Cardigan
            35 => ['women_purple_bag.jpg'],  // Women's Purple Bag
            36 => ['women_yellow_skirt.jpg'],  // Women's Yellow Skirt
            37 => ['men_olive_green_jacket.jpg'],  // Men's Olive Green Jacket
            38 => ['women_pink_sweater.jpg'],  // Women's Pink Sweater
            39 => ['men_rust_shirt.jpg'],  // Men's Rust Shirt
            40 => ['women_white_bag.jpg'],  // Women's White Bag
            41 => ['men_brown_sweater.jpg'],  // Men's Brown Sweater
            42 => ['men_black_long_coat.jpg'],  // Men's Black Long Coat
            43 => ['men_brown_sweat_shirt.jpg'],  // Men's Brown Leather sweatshirt
            44 => ['women_beige_cord_set.jpg'],  // Women's Beige Cord Set
            45 => ['women_pink_feather_jacket_1.jpg'],  // Women's Pink Feather Jacket
            46 => ['women_beige_jacket.jpg'],  // Women's Beige Jacket
            47 => ['men_wool_thread_jacket.jpg'],  // Men's Wool Thread Jacket
            48 => ['women_yellow_cord_set.jpg'],  // Women's Yellow Cord Set
            49 => ['men_white_cardigan.jpg'],  // "Men Blue Sweater"
            50 => ['women_beige_long_coat.jpg'],  // "Women White Skirt"
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