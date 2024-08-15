<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'transaction_id' => '16020',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16122","errors":[],"trans_id":16122}}'
            ],
            [
                'order_id' => 2,
                'transaction_id' => '16021',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16122","errors":[],"trans_id":16122}}'
            ],
            [
                'order_id' => 3,
                'transaction_id' => '16022',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16122","errors":[],"trans_id":16122}}'
            ],
        ]);
    }
}
