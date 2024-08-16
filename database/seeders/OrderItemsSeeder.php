<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'size' => 'XS',
                'unit_price' => 50.00,
                'line_price' => 100.00
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'size' => 'S',
                'unit_price' => 5.00,
                'line_price' => 5.00
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 4,
                'size' => 'M',
                'unit_price' => 50.00,
                'line_price' => 200.00
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 3,
                'size' => 'L',
                'unit_price' => 100.00,
                'line_price' => 300.00
            ],
            [
                'order_id' => 5,
                'product_id' => 4,
                'quantity' => 2,
                'size' => 'M',
                'unit_price' => 75.99,
                'line_price' => 151.98
            ],
            [
                'order_id' => 5,
                'product_id' => 7,
                'quantity' => 1,
                'size' => 'S',
                'unit_price' => 115.99,
                'line_price' => 115.99
            ],
            [
                'order_id' => 6,
                'product_id' => 10,
                'quantity' => 2,
                'size' => 'L',
                'unit_price' => 85.99,
                'line_price' => 171.98
            ],
            [
                'order_id' => 7,
                'product_id' => 13,
                'quantity' => 1,
                'size' => 'M',
                'unit_price' => 150.99,
                'line_price' => 150.99
            ],
            [
                'order_id' => 7,
                'product_id' => 15,
                'quantity' => 3,
                'size' => 'S',
                'unit_price' => 55.99,
                'line_price' => 167.97
            ],
            [
                'order_id' => 8,
                'product_id' => 18,
                'quantity' => 1,
                'size' => 'XL',
                'unit_price' => 200.99,
                'line_price' => 200.99
            ],
            [
                'order_id' => 9,
                'product_id' => 21,
                'quantity' => 1,
                'size' => 'L',
                'unit_price' => 150.99,
                'line_price' => 150.99
            ],
            [
                'order_id' => 9,
                'product_id' => 24,
                'quantity' => 2,
                'size' => 'M',
                'unit_price' => 20.99,
                'line_price' => 41.98
            ],
            [
                'order_id' => 10,
                'product_id' => 27,
                'quantity' => 3,
                'size' => 'L',
                'unit_price' => 25.99,
                'line_price' => 77.97
            ],
            [
                'order_id' => 10,
                'product_id' => 30,
                'quantity' => 1,
                'size' => 'M',
                'unit_price' => 110.99,
                'line_price' => 110.99
            ],
            [
                'order_id' => 11,
                'product_id' => 33,
                'quantity' => 2,
                'size' => 'S',
                'unit_price' => 95.99,
                'line_price' => 191.98
            ],
            [
                'order_id' => 12,
                'product_id' => 36,
                'quantity' => 1,
                'size' => 'M',
                'unit_price' => 65.99,
                'line_price' => 65.99
            ],
            [
                'order_id' => 12,
                'product_id' => 39,
                'quantity' => 2,
                'size' => 'L',
                'unit_price' => 85.99,
                'line_price' => 171.98
            ],
            [
                'order_id' => 13,
                'product_id' => 42,
                'quantity' => 1,
                'size' => 'XL',
                'unit_price' => 120.99,
                'line_price' => 120.99
            ],
            [
                'order_id' => 13,
                'product_id' => 45,
                'quantity' => 1,
                'size' => 'S',
                'unit_price' => 150.99,
                'line_price' => 150.99
            ],
            [
                'order_id' => 14,
                'product_id' => 48,
                'quantity' => 2,
                'size' => 'M',
                'unit_price' => 85.99,
                'line_price' => 171.98
            ],
            [
                'order_id' => 15,
                'product_id' => 2,
                'quantity' => 3,
                'size' => 'L',
                'unit_price' => 79.99,
                'line_price' => 239.97
            ],
            [
                'order_id' => 16,
                'product_id' => 5,
                'quantity' => 1,
                'size' => 'XL',
                'unit_price' => 120.99,
                'line_price' => 120.99
            ],
            [
                'order_id' => 16,
                'product_id' => 8,
                'quantity' => 1,
                'size' => 'M',
                'unit_price' => 130.99,
                'line_price' => 130.99
            ],

        ]);
    }
}
