<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['sku' => 'CC-001', 'name' => 'Grey Sweater', 'description' => 'A stylish grey sweater.', 'price' => 59.99, 'stock_quantity' => 100],
            ['sku' => 'CC-002', 'name' => 'Black Cardigan', 'description' => 'A trendy black cardigan.', 'price' => 79.99, 'stock_quantity' => 50],
            ['sku' => 'CC-003', 'name' => 'Beige Cardigan', 'description' => 'A cozy beige cardigan.', 'price' => 69.99, 'stock_quantity' => 70],
            ['sku' => 'CC-004', 'name' => 'Orange Cardigan', 'description' => 'A vibrant orange cardigan.', 'price' => 75.99, 'stock_quantity' => 80],
            ['sku' => 'CC-005', 'name' => 'Grey Check Jacket', 'description' => 'A stylish grey check jacket.', 'price' => 120.99, 'stock_quantity' => 50],
            ['sku' => 'CC-006', 'name' => 'Cream Jacket', 'description' => 'A classy cream jacket.', 'price' => 110.99, 'stock_quantity' => 40],
            ['sku' => 'CC-007', 'name' => 'Yellow Jacket', 'description' => 'A bright yellow jacket.', 'price' => 115.99, 'stock_quantity' => 60],
            ['sku' => 'CC-008', 'name' => 'Pink Feather Jacket', 'description' => 'A stylish pink feather jacket.', 'price' => 130.99, 'stock_quantity' => 30],
            ['sku' => 'CC-009', 'name' => 'Grey Jacket', 'description' => 'A versatile grey jacket.', 'price' => 105.99, 'stock_quantity' => 75],
            ['sku' => 'CC-010', 'name' => 'Rust Cardigan', 'description' => 'A warm rust cardigan.', 'price' => 85.99, 'stock_quantity' => 90],
            ['sku' => 'CC-011', 'name' => 'Beige Silk Dress', 'description' => 'An elegant beige dress made from pure silk, perfect for formal occasions.', 'price' => 239.99, 'stock_quantity' => 55],
            ['sku' => 'CC-012', 'name' => 'Denim Trucker Jacket', 'description' => 'A classic denim trucker jacket, a timeless piece for every closet.', 'price' => 159.99, 'stock_quantity' => 50],
            ['sku' => 'CC-013', 'name' => 'Leather Crossbody Bag', 'description' => 'A stylish leather crossbody bag, combining functionality and chic design.', 'price' => 249.99, 'stock_quantity' => 25],
            ['sku' => 'CC-014', 'name' => 'Brown Biker Jacket', 'description' => 'A premium brown leather biker jacket, perfect for an edgy look.', 'price' => 399.99, 'stock_quantity' => 20],
            ['sku' => 'CC-015', 'name' => 'Silk Blouse', 'description' => 'A delicate silk blouse, ideal for both office wear and evening events.', 'price' => 139.99, 'stock_quantity' => 56],
            ['sku' => 'CC-016', 'name' => 'Men\'s Grey Dress Shirt', 'description' => 'A classic grey dress shirt for men, made from high-quality cotton.', 'price' => 119.99, 'stock_quantity' => 52],
            ['sku' => 'CC-017', 'name' => 'Black Leather Tote Bag', 'description' => 'A sleek black leather tote bag, perfect for everyday use.', 'price' => 329.99, 'stock_quantity' => 12],
            ['sku' => 'CC-018', 'name' => 'Yellow Satchel Bag', 'description' => 'A trendy yellow satchel bag, adding a pop of color to any outfit.', 'price' => 189.99, 'stock_quantity' => 48],
            ['sku' => 'CC-019', 'name' => 'Designer Handbag', 'description' => 'A luxury designer handbag with exquisite detailing.', 'price' => 499.99, 'stock_quantity' => 78],
            ['sku' => 'CC-020', 'name' => 'Men\'s Charcoal Dress Shirt', 'description' => 'A sophisticated charcoal dress shirt for men, perfect for formal occasions.', 'price' => 149.99, 'stock_quantity' => 96],
            ['sku' => 'CC-021', 'name' => 'Men Gray Shirt', 'description' => 'A premium brown leather jacket.', 'price' => 148.99, 'stock_quantity' => 23],
            ['sku' => 'CC-022', 'name' => 'Men Gray Shirt', 'description' => 'A premium brown leather jacket.', 'price' => 109.99, 'stock_quantity' => 55],
            ['sku' => 'CC-023', 'name' => 'Men Gray Shirt', 'description' => 'A premium brown leather jacket.', 'price' => 241.99, 'stock_quantity' => 36],
            ['sku' => 'CC-024', 'name' => 'Women\'s Wool Coat', 'description' => 'A premium brown leather jacket.', 'price' => 123.99, 'stock_quantity' => 88],
            ['sku' => 'CC-025', 'name' => 'Men\'s Leather Bomber Jacket', 'description' => 'A premium brown leather jacket.', 'price' => 357.99, 'stock_quantity' => 12],
            ['sku' => 'CC-026', 'name' => 'Women\'s Trench Coat', 'description' => 'A premium brown leather jacket.', 'price' => 348.99, 'stock_quantity' => 8],
            ['sku' => 'CC-027', 'name' => 'Women\'s Evening Gown', 'description' => 'A premium brown leather jacket.', 'price' => 210.99, 'stock_quantity' => 16],
            ['sku' => 'CC-028', 'name' => 'Men\'s Casual Jacket', 'description' => 'A premium brown leather jacket.', 'price' => 128.99, 'stock_quantity' => 20],
            ['sku' => 'CC-029', 'name' => 'Women\'s Fur Coat', 'description' => 'A premium brown leather jacket.', 'price' => 164.99, 'stock_quantity' => 45],
            ['sku' => 'CC-030', 'name' => 'Men\'s Slim Fit Jeans', 'description' => 'A premium brown leather jacket.', 'price' => 59.99, 'stock_quantity' => 85],
            ['sku' => 'CC-031', 'name' => 'Product 31', 'description' => 'A premium brown leather jacket.', 'price' => 96.99, 'stock_quantity' => 79],
            ['sku' => 'CC-032', 'name' => 'Product 32', 'description' => 'A premium brown leather jacket.', 'price' => 362.99, 'stock_quantity' => 26],
            ['sku' => 'CC-033', 'name' => 'Product 33', 'description' => 'A premium brown leather jacket.', 'price' => 241.99, 'stock_quantity' => 31],
            ['sku' => 'CC-034', 'name' => 'Product 34', 'description' => 'A premium brown leather jacket.', 'price' => 125.99, 'stock_quantity' => 42],
            ['sku' => 'CC-035', 'name' => 'Product 35', 'description' => 'A premium brown leather jacket.', 'price' => 80.99, 'stock_quantity' => 50],
            ['sku' => 'CC-036', 'name' => 'Product 36', 'description' => 'A premium brown leather jacket.', 'price' => 542.99, 'stock_quantity' => 12],
            ['sku' => 'CC-037', 'name' => 'Product 37', 'description' => 'A premium brown leather jacket.', 'price' => 123.99, 'stock_quantity' => 73],
            ['sku' => 'CC-038', 'name' => 'Product 38', 'description' => 'A premium brown leather jacket.', 'price' => 564.99, 'stock_quantity' => 17],
            ['sku' => 'CC-039', 'name' => 'Product 39', 'description' => 'A premium brown leather jacket.', 'price' => 142.99, 'stock_quantity' => 92],
            ['sku' => 'CC-040', 'name' => 'Product 40', 'description' => 'A premium brown leather jacket.', 'price' => 524.99, 'stock_quantity' => 16],
            ['sku' => 'CC-041', 'name' => 'Product 41', 'description' => 'A premium brown leather jacket.', 'price' => 1100.99, 'stock_quantity' => 1],
            ['sku' => 'CC-042', 'name' => 'Product 42', 'description' => 'A premium brown leather jacket.', 'price' => 582.99, 'stock_quantity' => 20],
            ['sku' => 'CC-043', 'name' => 'Product 43', 'description' => 'A premium brown leather jacket.', 'price' => 695.99, 'stock_quantity' => 5],
            ['sku' => 'CC-044', 'name' => 'Product 44', 'description' => 'A premium brown leather jacket.', 'price' => 785.99, 'stock_quantity' => 2],
            ['sku' => 'CC-045', 'name' => 'Product 45', 'description' => 'A premium brown leather jacket.', 'price' => 362.99, 'stock_quantity' => 3],
            ['sku' => 'CC-046', 'name' => 'Product 46', 'description' => 'A premium brown leather jacket.', 'price' => 854.99, 'stock_quantity' => 2],
            ['sku' => 'CC-047', 'name' => 'Product 47', 'description' => 'A premium brown leather jacket.', 'price' => 952.99, 'stock_quantity' => 3],
            ['sku' => 'CC-048', 'name' => 'Product 48', 'description' => 'A premium brown leather jacket.', 'price' => 752.99, 'stock_quantity' => 4],
            ['sku' => 'CC-049', 'name' => 'Product 49', 'description' => 'A premium brown leather jacket.', 'price' => 254.99, 'stock_quantity' => 25],
            ['sku' => 'CC-050', 'name' => 'Product 50', 'description' => 'A premium brown leather jacket.', 'price' => 362.99, 'stock_quantity' => 23],
            ['sku' => 'CC-051', 'name' => 'Product 46', 'description' => 'A premium brown leather jacket.', 'price' => 854.99, 'stock_quantity' => 2],
            ['sku' => 'CC-052', 'name' => 'Product 47', 'description' => 'A premium brown leather jacket.', 'price' => 952.99, 'stock_quantity' => 3],
            ['sku' => 'CC-053', 'name' => 'Product 48', 'description' => 'A premium brown leather jacket.', 'price' => 752.99, 'stock_quantity' => 4],
            ['sku' => 'CC-054', 'name' => 'Product 49', 'description' => 'A premium brown leather jacket.', 'price' => 254.99, 'stock_quantity' => 25],
            ['sku' => 'CC-055', 'name' => 'Product 50', 'description' => 'A premium brown leather jacket.', 'price' => 362.99, 'stock_quantity' => 23],

        ];

        DB::table('products')->insert($products);
    }
}