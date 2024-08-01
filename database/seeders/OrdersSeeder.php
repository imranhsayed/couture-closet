<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1, 
                'provincial_tax_rate_id' => 1, 
                'email' => 'test1@example.com', 
                'pst' => 0.00, 
                'gst' => 5.00, 
                'hst' => 0.00, 
                'sub_amount' => 100.00, 
                'total_amount' => 105.00, 
                'shipping_address' => '77 Ulster St, Calgary, AB', 
                'billing_address' => '77 Ulster St, Calgary, AB'
            ],
            [
                'user_id' => 2, 
                'provincial_tax_rate_id' => 2, 
                'email' => 'test2@example.com', 
                'pst' => 7.00, 
                'gst' => 5.00, 
                'hst' => 0.00, 
                'sub_amount' => 200.00, 
                'total_amount' => 212.00, 
                'shipping_address' => '130 Main St, Vancouver, BC', 
                'billing_address' => '130 Main St, Vancouver, BC'
            ],
            [
                'user_id' => 3, 
                'provincial_tax_rate_id' => 3, 
                'email' => 'test3@example.com', 
                'pst' => 7.00, 
                'gst' => 5.00, 
                'hst' => 0.00, 
                'sub_amount' => 300.00, 
                'total_amount' => 312.00, 
                'shipping_address' => '321 Oaken St, Winnipeg, MB', 
                'billing_address' => '321 Oaken St, Winnipeg, MB'
            ],
        ]);
    }
}
