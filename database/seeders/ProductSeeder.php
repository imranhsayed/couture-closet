<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['sku' => 'CC-003', 'name' => 'Beige Cardigan', 'description' => 'A cozy beige cardigan.', 'price' => 69.99, 'stock_quantity' => 70],
            ['sku' => 'CC-004', 'name' => 'Orange Cardigan', 'description' => 'A vibrant orange cardigan.', 'price' => 75.99, 'stock_quantity' => 80],
            ['sku' => 'CC-005', 'name' => 'Grey Check Jacket', 'description' => 'A stylish grey check jacket.', 'price' => 120.99, 'stock_quantity' => 50],
            ['sku' => 'CC-006', 'name' => 'Cream Jacket', 'description' => 'A classy cream jacket.', 'price' => 110.99, 'stock_quantity' => 40],
            ['sku' => 'CC-007', 'name' => 'Yellow Jacket', 'description' => 'A bright yellow jacket.', 'price' => 115.99, 'stock_quantity' => 60],
            ['sku' => 'CC-008', 'name' => 'Pink Feather Jacket', 'description' => 'A stylish pink feather jacket.', 'price' => 130.99, 'stock_quantity' => 30],
            ['sku' => 'CC-009', 'name' => 'Grey Jacket', 'description' => 'A versatile grey jacket.', 'price' => 105.99, 'stock_quantity' => 75],
            ['sku' => 'CC-010', 'name' => 'Rust Cardigan', 'description' => 'A warm rust cardigan.', 'price' => 85.99, 'stock_quantity' => 90],
            ['sku' => 'CC-011', 'name' => 'Beige Dress', 'description' => 'An elegant beige dress.', 'price' => 95.99, 'stock_quantity' => 55],
            ['sku' => 'CC-012', 'name' => 'Denim Jacket', 'description' => 'A classic denim jacket.', 'price' => 110.99, 'stock_quantity' => 50],
            ['sku' => 'CC-013', 'name' => 'Classic Bag', 'description' => 'A timeless classic bag.', 'price' => 150.99, 'stock_quantity' => 25],
            ['sku' => 'CC-014', 'name' => 'Brown Leather Jacket', 'description' => 'A premium brown leather jacket.', 'price' => 250.99, 'stock_quantity' => 20],
        ];
        for ($i = 15; $i <= 50; $i++) {
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