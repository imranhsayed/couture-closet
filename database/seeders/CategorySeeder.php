<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'demography',
                'value' => 'Women',
                'description' => '',
            ],
            [
                'name' => 'demography',
                'value' => 'Kids',
                'description' => '',
            ],
            [
                'name' => 'demography',
                'value' => 'Men',
                'description' => '',
            ],
            [
                'name' => 'size',
                'value' => 'XS',
                'description' => 'Extra Small'
            ],
            [
                'name' => 'size',
                'value' => 'S',
                'description' => 'Small',
            ],
            [
                'name' => 'size',
                'value' => 'M',
                'description' => 'Medium',
            ],
            [
                'name' => 'size',
                'value' => 'L',
                'description' => 'Large',
            ],
            [
                'name' => 'size',
                'value' => 'XL',
                'description' => 'Extra Large'
            ],
            [
                'name' => 'size',
                'value' => 'XXL',
                'description' => 'Double Extra Large'
            ],
            [
                'name' => 'brand',
                'value' => 'Nike',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Adidas',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Gucci',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Zara',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'H&M',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Levi\'s',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Ralph Lauren',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Uniqlo',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Gap',
                'description' => ''
            ],
            [
                'name' => 'brand',
                'value' => 'Calvin Klein',
                'description' => ''
            ]
        ];
        DB::table('category')->insert($categories);
    }
}
