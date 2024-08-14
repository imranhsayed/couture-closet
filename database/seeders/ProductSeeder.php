<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['sku' => 'CC-001', 'name' => 'Men Grey Sweater', 'description' => 'A stylish grey sweater for men.', 'price' => 59.99, 'stock_quantity' => 100],
            ['sku' => 'CC-002', 'name' => 'Women Black Cardigan', 'description' => 'A trendy black cardigan for women.', 'price' => 79.99, 'stock_quantity' => 50],
            ['sku' => 'CC-003', 'name' => 'Men Beige Cardigan', 'description' => 'A cozy beige cardigan for men.', 'price' => 69.99, 'stock_quantity' => 70],
            ['sku' => 'CC-004', 'name' => 'Women Orange Cardigan', 'description' => 'A vibrant orange cardigan for women.', 'price' => 75.99, 'stock_quantity' => 80],
            ['sku' => 'CC-005', 'name' => 'Men Grey Check Jacket', 'description' => 'A stylish grey check jacket for men.', 'price' => 120.99, 'stock_quantity' => 50],
            ['sku' => 'CC-006', 'name' => 'Men Cream Jacket', 'description' => 'A classy cream jacket for men.', 'price' => 110.99, 'stock_quantity' => 40],
            ['sku' => 'CC-007', 'name' => 'Women Yellow Jacket', 'description' => 'A bright yellow jacket for women.', 'price' => 115.99, 'stock_quantity' => 60],
            ['sku' => 'CC-008', 'name' => 'Women Pink Feather Jacket', 'description' => 'A stylish pink feather jacket for women.', 'price' => 130.99, 'stock_quantity' => 30],
            ['sku' => 'CC-009', 'name' => 'Women Grey Jacket', 'description' => 'A versatile grey jacket for women.', 'price' => 105.99, 'stock_quantity' => 75],
            ['sku' => 'CC-010', 'name' => 'Men Rust Cardigan', 'description' => 'A warm rust cardigan for men.', 'price' => 85.99, 'stock_quantity' => 90],
            ['sku' => 'CC-011', 'name' => 'Women Beige Dress', 'description' => 'An elegant beige dress for women.', 'price' => 95.99, 'stock_quantity' => 55],
            ['sku' => 'CC-012', 'name' => 'Men Denim Jacket', 'description' => 'A classic denim jacket for men.', 'price' => 110.99, 'stock_quantity' => 50],
            ['sku' => 'CC-013', 'name' => 'Women Classic Bag', 'description' => 'A timeless classic bag for women.', 'price' => 150.99, 'stock_quantity' => 25],
            ['sku' => 'CC-014', 'name' => 'Women Brown Leather Jacket', 'description' => 'A premium brown leather jacket for women.', 'price' => 250.99, 'stock_quantity' => 20],
            ['sku' => 'CC-015', 'name' => 'Women Red Dress', 'description' => 'A stylish red dress for women.', 'price' => 55.99, 'stock_quantity' => 45],
            ['sku' => 'CC-016', 'name' => 'Kids Blue Jacket', 'description' => 'A cute blue jacket for kids.', 'price' => 45.99, 'stock_quantity' => 85],
            ['sku' => 'CC-017', 'name' => 'Women Pink Off-Shoulder Top', 'description' => 'A stylish pink off-shoulder top for women.', 'price' => 35.99, 'stock_quantity' => 40],
            ['sku' => 'CC-018', 'name' => 'Men Black Coat', 'description' => 'A premium black coat for men.', 'price' => 200.99, 'stock_quantity' => 35],
            ['sku' => 'CC-019', 'name' => 'Men White Cardigan', 'description' => 'A sleek white cardigan for men.', 'price' => 75.99, 'stock_quantity' => 60],
            ['sku' => 'CC-020', 'name' => 'Women Mustard Dress', 'description' => 'A vibrant mustard dress for women.', 'price' => 65.99, 'stock_quantity' => 70],
            ['sku' => 'CC-021', 'name' => 'Men Beige Long Coat', 'description' => 'A classy beige coat for men.', 'price' => 150.99, 'stock_quantity' => 30],
            ['sku' => 'CC-022', 'name' => 'Men Red Jacket', 'description' => 'A bold red jacket for men.', 'price' => 95.99, 'stock_quantity' => 55],
            ['sku' => 'CC-023', 'name' => 'Men Brown Trousers', 'description' => 'Comfortable brown trousers for men.', 'price' => 60.99, 'stock_quantity' => 70],
            ['sku' => 'CC-024', 'name' => 'Men Hat', 'description' => 'A stylish men’s hat.', 'price' => 20.99, 'stock_quantity' => 100],
            ['sku' => 'CC-025', 'name' => 'Women Denim Cord Set', 'description' => 'A chic denim cord set for women.', 'price' => 130.99, 'stock_quantity' => 40],
            ['sku' => 'CC-026', 'name' => 'Women White Polka Dot Top', 'description' => 'A playful white polka dot top for women.', 'price' => 40.99, 'stock_quantity' => 75],
            ['sku' => 'CC-027', 'name' => 'Men Black Cap', 'description' => 'A sleek black cap for men.', 'price' => 25.99, 'stock_quantity' => 100],
            ['sku' => 'CC-028', 'name' => 'Men Black Nike Tee', 'description' => 'A sporty black Nike tee for men.', 'price' => 50.99, 'stock_quantity' => 60],
            ['sku' => 'CC-029', 'name' => 'Women Grey Cord Set', 'description' => 'A cozy grey cord set for women.', 'price' => 120.99, 'stock_quantity' => 55],
            ['sku' => 'CC-030', 'name' => 'Men Black Cord Set', 'description' => 'A trendy black cord set for men.', 'price' => 110.99, 'stock_quantity' => 50],
            ['sku' => 'CC-031', 'name' => 'Women Beige Long Coat', 'description' => 'A sleek beige long coat for women.', 'price' => 145.99, 'stock_quantity' => 45],
            ['sku' => 'CC-032', 'name' => 'Women Green Top', 'description' => 'A fashionable green top for women.', 'price' => 55.99, 'stock_quantity' => 90],
            ['sku' => 'CC-033', 'name' => 'Women White Dress', 'description' => 'A classy white dress for women.', 'price' => 95.99, 'stock_quantity' => 60],
            ['sku' => 'CC-034', 'name' => 'Men Maroon Cardigan', 'description' => 'A cozy maroon cardigan for men.', 'price' => 70.99, 'stock_quantity' => 65],
            ['sku' => 'CC-035', 'name' => 'Women Purple Bag', 'description' => 'A trendy purple bag for women.', 'price' => 85.99, 'stock_quantity' => 40],
            ['sku' => 'CC-036', 'name' => 'Women Yellow Skirt', 'description' => 'A vibrant yellow skirt for women.', 'price' => 65.99, 'stock_quantity' => 70],
            ['sku' => 'CC-037', 'name' => 'Men Olive Green Jacket', 'description' => 'A stylish olive green jacket for men.', 'price' => 105.99, 'stock_quantity' => 75],
            ['sku' => 'CC-038', 'name' => 'Women Pink Sweater', 'description' => 'A cozy pink sweater for women.', 'price' => 75.99, 'stock_quantity' => 90],
            ['sku' => 'CC-039', 'name' => 'Men Rust Shirt', 'description' => 'A trendy rust shirt for men.', 'price' => 85.99, 'stock_quantity' => 50],
            ['sku' => 'CC-040', 'name' => 'Women White Bag', 'description' => 'A sleek white bag for women.', 'price' => 95.99, 'stock_quantity' => 55],
            ['sku' => 'CC-041', 'name' => 'Men Brown Sweater', 'description' => 'A comfortable brown sweater for men.', 'price' => 85.99, 'stock_quantity' => 60],
            ['sku' => 'CC-042', 'name' => 'Men Black Long Coat', 'description' => 'A formal black coat for men.', 'price' => 120.99, 'stock_quantity' => 50],
            ['sku' => 'CC-043', 'name' => 'Men Brown Leather Jacket', 'description' => 'A premium brown leather jacket for men.', 'price' => 150.99, 'stock_quantity' => 20],
            ['sku' => 'CC-044', 'name' => 'Women Beige Cord Set', 'description' => 'A cozy beige cord set for women.', 'price' => 130.99, 'stock_quantity' => 30],
            ['sku' => 'CC-045', 'name' => 'Women Pink Feather Jacket', 'description' => 'A chic pink feather jacket for women.', 'price' => 150.99, 'stock_quantity' => 25],
            ['sku' => 'CC-046', 'name' => 'Men Beige Jacket', 'description' => 'A stylish beige jacket for men.', 'price' => 110.99, 'stock_quantity' => 50],
            ['sku' => 'CC-047', 'name' => 'Women Denim Jacket', 'description' => 'A casual denim jacket for women.', 'price' => 95.99, 'stock_quantity' => 45],
            ['sku' => 'CC-048', 'name' => 'Women White Skirt', 'description' => 'A trendy white skirt for women.', 'price' => 85.99, 'stock_quantity' => 55],
            ['sku' => 'CC-049', 'name' => 'Men White Cardigan', 'description' => 'A comfortable white cardigan for men.', 'price' => 75.99, 'stock_quantity' => 60],
            ['sku' => 'CC-050', 'name' => 'Women Beige Long Coat', 'description' => 'Sleek beige long coat for women.', 'price' => 85.99, 'stock_quantity' => 60],
        ];

        DB::table('products')->insert($products);
    }
}
