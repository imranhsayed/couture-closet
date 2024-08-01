<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['sku' => 'CC-001', 'name' => 'Grey Sweater', 'description' => 'A stylish grey sweater.', 'price' => 59.99, 'stock_quantity' => 100],
            ['sku' => 'CC-002', 'name' => 'Black Cardigan', 'description' => 'A trendy black cardigan.', 'price' => 79.99, 'stock_quantity' => 50],
        ];

        for ($i = 3; $i <= 50; $i++) {
            $products[] = [
                'sku' => 'CC-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'name' => 'Product ' . $i,
                'description' => 'Description for product ' . $i,
                'price' => rand(10, 100) + 0.99,
                'stock_quantity' => rand(10, 100)
            ];
        }

        DB::table('products')->insert($products);
    }
}
