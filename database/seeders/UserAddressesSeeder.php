<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAddresses = [
            [
                'user_id' => 1,
                'street' => '123 Main St',
                'postal_code' => 'R1A3R5',
                'city' => 'New York',
                'province' => 'NY',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 2,
                'street' => '456 Elm St',
                'postal_code' => 'R6T8A0',
                'city' => 'Los Angeles',
                'province' => 'CA',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 3,
                'street' => '789 Oak St',
                'postal_code' => 'R5C3S1',
                'city' => 'Chicago',
                'province' => 'IL',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 3,
                'street' => '789 Oak St',
                'postal_code' => 'R5Z3N1',
                'city' => 'Chicago',
                'province' => 'IL',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 4,
                'street' => '123 Maple St',
                'postal_code' => 'R67890',
                'city' => 'Winnipeg',
                'province' => 'MB',
                'country' => 'CANADA',
                'is_primary' => true,
            ],
            [
                'user_id' => 5,
                'street' => '456 Pine St',
                'postal_code' => 'R98765',
                'city' => 'Los Angeles',
                'province' => 'CA',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 6,
                'street' => '101 Birch St',
                'postal_code' => 'R11223',
                'city' => 'Winnipeg',
                'province' => 'MB',
                'country' => 'CANADA',
                'is_primary' => true,
            ],
            [
                'user_id' => 7,
                'street' => '202 Cedar St',
                'postal_code' => '233445',
                'city' => 'Houston',
                'province' => 'TX',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 8,
                'street' => '303 Elm St',
                'postal_code' => '355667',
                'city' => 'Winnipeg',
                'province' => 'MB',
                'country' => 'CANADA',
                'is_primary' => true,
            ],
            [
                'user_id' => 9,
                'street' => '404 Walnut St',
                'postal_code' => '377889',
                'city' => 'Dallas',
                'province' => 'TX',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 10,
                'street' => '505 Chestnut St',
                'postal_code' => '399001',
                'city' => 'Mohali',
                'province' => 'PB',
                'country' => 'INDIA',
                'is_primary' => true,
            ]
        ];

        DB::table('user_addresses')->insert($userAddresses);
    }
}
