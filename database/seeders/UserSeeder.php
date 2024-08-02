<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Admin user
        DB::table('users')->insert([
            'password' => Hash::make('mypass'),
            'first_name' => 'admin',
            'last_name' => '',
            'email' => 'admin@pace.com',
            'telephone' => '1234567890',
            'email_verified_at' => now(),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);

        // Regular user
        $users = [
            [
                'password' => Hash::make('password123'),
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'telephone' => '1234567890',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'password' => Hash::make('password456'),
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane@example.com',
                'telephone' => '9876543210',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
