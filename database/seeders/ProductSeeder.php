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
        DB::table('products')->insert([
            [
                'sku' => 'CC-NIKE-M-001',
                'name' => 'Nike T-Shirt Medium',
                'description' => 'A medium-sized Nike branded t-shirt',
                'price' => 29.99,
                'stock_quantity' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'CC-NIKE-L-001',
                'name' => 'Nike T-Shirt Large',
                'description' => 'A large-sized Nike branded t-shirt',
                'price' => 29.99,
                'stock_quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'CC-ADIDAS-M-001',
                'name' => 'Adidas T-Shirt Medium',
                'description' => 'A medium-sized Adidas branded t-shirt',
                'price' => 25.99,
                'stock_quantity' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'CC-ADIDAS-L-001',
                'name' => 'Adidas T-Shirt Large',
                'description' => 'A large-sized Adidas branded t-shirt',
                'price' => 25.99,
                'stock_quantity' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'CC-PUMA-M-001',
                'name' => 'Puma T-Shirt Medium',
                'description' => 'A medium-sized Puma branded t-shirt',
                'price' => 19.99,
                'stock_quantity' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}