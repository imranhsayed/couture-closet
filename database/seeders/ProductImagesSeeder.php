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
