<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class Shop extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index() {

		$title = "Shop";

		// Initialize query for all products
		$productQuery = Product::with('images');

		// Check if a specific category, brand, or demography is selected via query parameters
		$selectedCategory = request()->query('category');
		
		$selectedBrand = request()->query('brand');
		$selectedDemography = request()->query('demography');

		if ($selectedCategory) {
			// Filter products by the selected category
			$productQuery->whereHas('categories', function ($query) use ($selectedCategory) {
				$query->where('value', $selectedCategory);
			});
		}
		
		if ($selectedBrand) {
			// Filter products by the selected brand
			$productQuery->whereHas('categories', function ($query) use ($selectedBrand) {
				$query->where('value', $selectedBrand);
			});
		}
		
		if ($selectedDemography) {
			// Filter products by the selected demography
			$productQuery->whereHas('categories', function ($query) use ($selectedDemography) {
				$query->where('value', $selectedDemography);
			});
		}
		
		// Paginate the filtered products
		$products = $productQuery->paginate(16);

		//$products     = Product::with( 'images' )->paginate( 16 );
		$categories   = Category::where( 'name', 'Size' )->get();
		// $brands       = Category::where( 'name', 'Brand' )->get();
		$brands = Category::where('name', 'Brand')->whereHas('products')->get();
		$sizeFilters   = Category::where( 'name', 'Size' )->whereHas('products')->get();

		$demographies = Category::where( 'name', 'demography' )->get();

		//$product = Product::with(['categories', 'images'])->find($product->id);

		return view( 'shop.index', compact( 'title', 'products', 'categories', 'brands', 'demographies' ) );
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Product $product)
	{
		$product = Product::with(['categories', 'images'])
		                  ->find($product->id);

		$all_products = Product::with('images')->paginate(4);

		$categories = Category::where('name', 'Size')->get();

		//return view('product.show', compact('product','all_products','categories'));

		$reviews = ProductReview::where('product_id', $product->id)
		                        ->with('user')
		                        ->get();
		
		$totalReviews = ProductReview::where('product_id', $product->id)->count();	
		
		$categoryIds = $product->categories->pluck('id');
		
		$cat_id_val = Category::whereIn('id', $categoryIds)->get();

		$demography = $cat_id_val->firstWhere('name', 'demography');
    	$size = $cat_id_val->firstWhere('name', 'size');
    	$brand = $cat_id_val->firstWhere('name', 'brand');
			
		return view('shop.show', compact('product','all_products','categories', 'reviews','totalReviews', 'demography','size','brand'));

	}
}
