<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = [];

        for ($i = 1; $i <= 50; $i++) {
            $productImages[] = [
                'product_id' => $i,
                'image_url' => 'images/product_' . $i . '_1.jpg',
                'is_primary' => true,
                'display_order' => 1
            ];

            if (rand(0, 1) == 1) {
                $productImages[] = [
                    'product_id' => $i,
                    'image_url' => 'images/product_' . $i . '_2.jpg',
                    'is_primary' => false,
                    'display_order' => 2
                ];
            }
        }

        DB::table('product_images')->insert($productImages);
    }

}
