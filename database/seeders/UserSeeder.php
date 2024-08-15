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
            ],
            [
                'password' => Hash::make('ruixio789'),
                'first_name' => 'Rui',
                'last_name' => 'Xio',
                'email' => 'rui@example.com',
                'telephone' => '1234567890',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],[
                'password' => Hash::make('donaldobi101'),
                'first_name' => 'Donald',
                'last_name' => 'Obi',
                'email' => 'donald@example.com',
                'telephone' => '2345678901',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'password' => Hash::make('parthkher212'),
                'first_name' => 'Parth',
                'last_name' => 'Kher',
                'email' => 'parth@example.com',
                'telephone' => '3456789012',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'password' => Hash::make('snigdhach103'),
                'first_name' => 'Snigdha',
                'last_name' => 'Ch',
                'email' => 'snigdha@example.com',
                'telephone' => '4567890123',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'password' => Hash::make('amazingimaran104'),
                'first_name' => 'Imran',
                'last_name' => 'Saiyad',
                'email' => 'imran@example.com',
                'telephone' => '5678901234',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'password' => Hash::make('manish143'),
                'first_name' => 'Manish',
                'last_name' => 'Kumar',
                'email' => 'manish@example.com',
                'telephone' => '5678901234',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'password' => Hash::make('jonny1254'),
                'first_name' => 'Aman',
                'last_name' => 'Dawar',
                'email' => 'aman@example.com',
                'telephone' => '5678901234',
                'email_verified_at' => now(),
                'is_admin' => false,
                'remember_token' => Str::random(10),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
