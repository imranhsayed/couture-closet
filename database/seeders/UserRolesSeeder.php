<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRoles = [
            [
                'user_id' => 1,
                'role_type' => 0,
                'role_name' => 'admin',
            ],
            [
                'user_id' => 2,
                'role_type' => 1,
                'role_name' => 'customer',
            ],
            [
                'user_id' => 3,
                'role_type' => 2,
                'role_name' => 'guest',
            ],
        ];

        DB::table('user_roles')->insert($userRoles);
    }
}
