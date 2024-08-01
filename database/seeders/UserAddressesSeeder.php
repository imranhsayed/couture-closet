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
                'postal_code' => '12345',
                'city' => 'New York',
                'province' => 'NY',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 2,
                'street' => '456 Elm St',
                'postal_code' => '67890',
                'city' => 'Los Angeles',
                'province' => 'CA',
                'country' => 'USA',
                'is_primary' => true,
            ],
            [
                'user_id' => 3,
                'street' => '789 Oak St',
                'postal_code' => '54321',
                'city' => 'Chicago',
                'province' => 'IL',
                'country' => 'USA',
                'is_primary' => true,
            ]
        ];

        DB::table('user_addresses')->insert($userAddresses);
    }
}
