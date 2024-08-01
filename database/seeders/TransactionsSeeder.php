<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'order_id' => 1, 
                'transaction_id' => 'txn_001', 
                'transaction_status' => 'Completed', 
                'response' => 'Transaction completed successfully.'
            ],
            [
                'order_id' => 2, 
                'transaction_id' => 'txn_002', 
                'transaction_status' => 'Completed', 
                'response' => 'Transaction completed successfully.'
            ],
            [
                'order_id' => 3, 
                'transaction_id' => 'txn_003', 
                'transaction_status' => 'Pending', 
                'response' => 'Transaction pending.'
            ],
        ]);
    }
}
