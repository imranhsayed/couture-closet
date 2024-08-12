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
	public function index($category = null) {
		$title = "Shop";
		$productQuery = Product::with('images');
	
		if ($category) {
			$productQuery->whereHas('categories', function ($query) use ($category) {
				$query->where('id', $category);
			});
		}
	
		$selectedCategory = request()->query('category');
		if ($selectedCategory) {
			$productQuery->whereHas('categories', function ($query) use ($selectedCategory) {
				$query->where('value', $selectedCategory);
			});
		}
	
		$products = $productQuery->paginate(16);
		$categories = Category::where('name', 'Size')->get();
	
		return view('shop.index', compact('title', 'products', 'categories'));
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
