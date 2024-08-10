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

		$products     = Product::with( 'images' )->paginate( 16 );
		$categories   = Category::where( 'name', 'Size' )->get();
		$brands       = Category::where( 'name', 'Brand' )->get();
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
			
		return view('shop.show', compact('product','all_products','categories', 'reviews','totalReviews'));

	}
}
