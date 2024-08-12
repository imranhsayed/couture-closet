<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'full_name' => 'test1',
                'email' => 'test1@example.com',
                'phone_number' => '431-331-1234',
                'pst' => 0.00,
                'gst' => 5.00,
                'hst' => 0.00,
                'sub_amount' => 100.00,
                'total_amount' => 105.00,
                'shipping_address' => '77 Ulster St, Calgary, AB',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '77 Ulster St, Calgary, AB',
                'billing_phone_number' => '431-333-1234',
                'status' => 1
            ],
            [
                'user_id' => 2,
                'provincial_tax_rate_id' => 2,
                'full_name' => 'test2',
                'email' => 'test2@example.com',
                'phone_number' => '431-332-1234',
                'pst' => 7.00,
                'gst' => 5.00,
                'hst' => 0.00,
                'sub_amount' => 200.00,
                'total_amount' => 212.00,
                'shipping_address' => '130 Main St, Vancouver, BC',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '130 Main St, Vancouver, BC',
                'billing_phone_number' => '431-333-1234',
                'status' => 1
            ],
            [
                'user_id' => 3,
                'provincial_tax_rate_id' => 3,
                'full_name' => 'test3',
                'email' => 'test3@example.com',
                'phone_number' => '431-332-1234',
                'pst' => 7.00,
                'gst' => 5.00,
                'hst' => 0.00,
                'sub_amount' => 300.00,
                'total_amount' => 312.00,
                'shipping_address' => '321 Oaken St, Winnipeg, MB',
                'shipping_phone_number' => '431-333-1234',
                'billing_address' => '321 Oaken St, Winnipeg, MB',
                'billing_phone_number' => '431-333-1234',
                'status' => 1
            ],
        ]);
    }
}
