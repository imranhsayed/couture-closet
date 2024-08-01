<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'unit_price' => 50.00, 
                'line_price' => 100.00
            ],
            [
                'order_id' => 1, 
                'product_id' => 2, 
                'quantity' => 1, 
                'unit_price' => 5.00, 
                'line_price' => 5.00
            ],
            [
                'order_id' => 2, 
                'product_id' => 1, 
                'quantity' => 4, 
                'unit_price' => 50.00, 
                'line_price' => 200.00
            ],
            [
                'order_id' => 3, 
                'product_id' => 3, 
                'quantity' => 3, 
                'unit_price' => 100.00, 
                'line_price' => 300.00
            ],
        ]);
    }
}
