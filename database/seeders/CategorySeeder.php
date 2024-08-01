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
                'name' => 'Size',
                'value' => 'XS',
                'description' => 'Extra Small'
            ],
            [
                'name' => 'Size',
                'value' => 'S',
                'description' => 'Small',
            ],
            [
                'name' => 'Size',
                'value' => 'M',
                'description' => 'Medium',
            ],
            [
                'name' => 'Size',
                'value' => 'L',
                'description' => 'Large',
            ],
            [
                'name' => 'Size',
                'value' => 'XL',
                'description' => 'Extra Large'
            ],
            [
                'name' => 'Size',
                'value' => 'XXL',
                'description' => 'Double Extra Large'
            ],
            [
                'name' => 'Brand',
                'value' => 'Nike',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Adidas',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Gucci',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Zara',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'H&M',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Levi\'s',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Ralph Lauren',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Uniqlo',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Gap',
                'description' => ''
            ],
            [
                'name' => 'Brand',
                'value' => 'Calvin Klein',
                'description' => ''
            ]
        ];
        DB::table('category')->insert($categories);
    }
}
