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
            [
                'order_id' => 4,
                'transaction_id' => '16023',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16123","errors":[],"trans_id":16123}}'
            ],
            [
                'order_id' => 5,
                'transaction_id' => '16024',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16124","errors":[],"trans_id":16124}}'
            ],
            [
                'order_id' => 6,
                'transaction_id' => '16025',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16125","errors":[],"trans_id":16125}}'
            ],
            [
                'order_id' => 7,
                'transaction_id' => '16026',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16126","errors":[],"trans_id":16126}}'
            ],
            [
                'order_id' => 8,
                'transaction_id' => '16027',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16127","errors":[],"trans_id":16127}}'
            ],
            [
                'order_id' => 9,
                'transaction_id' => '16028',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16128","errors":[],"trans_id":16128}}'
            ],
            [
                'order_id' => 10,
                'transaction_id' => '16029',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16129","errors":[],"trans_id":16129}}'
            ],
            [
                'order_id' => 11,
                'transaction_id' => '16030',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16130","errors":[],"trans_id":16130}}'
            ],
            [
                'order_id' => 12,
                'transaction_id' => '16031',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16131","errors":[],"trans_id":16131}}'
            ],
            [
                'order_id' => 13,
                'transaction_id' => '16032',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16132","errors":[],"trans_id":16132}}'
            ],
            [
                'order_id' => 14,
                'transaction_id' => '16033',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16133","errors":[],"trans_id":16133}}'
            ],
            [
                'order_id' => 15,
                'transaction_id' => '16034',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16134","errors":[],"trans_id":16134}}'
            ],
            [
                'order_id' => 16,
                'transaction_id' => '16035',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16135","errors":[],"trans_id":16135}}'
            ],
            [
                'order_id' => 17,
                'transaction_id' => '16036',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16136","errors":[],"trans_id":16136}}'
            ],
            [
                'order_id' => 18,
                'transaction_id' => '16037',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16137","errors":[],"trans_id":16137}}'
            ],
            [
                'order_id' => 19,
                'transaction_id' => '16038',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16138","errors":[],"trans_id":16138}}'
            ],
            [
                'order_id' => 20,
                'transaction_id' => '16039',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16139","errors":[],"trans_id":16139}}'
            ],
            [
                'order_id' => 21,
                'transaction_id' => '16040',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16140","errors":[],"trans_id":16140}}'
            ],
            [
                'order_id' => 22,
                'transaction_id' => '16041',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16141","errors":[],"trans_id":16141}}'
            ],
            [
                'order_id' => 23,
                'transaction_id' => '16042',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16142","errors":[],"trans_id":16142}}'
            ],
            [
                'order_id' => 24,
                'transaction_id' => '16043',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16143","errors":[],"trans_id":16143}}'
            ],
            [
                'order_id' => 25,
                'transaction_id' => '16044',
                'transaction_status' => '1',
                'response' => '{"ref_number":50,"result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2024-16144","errors":[],"trans_id":16144}}'
            ], 
        ]);
    }
}
