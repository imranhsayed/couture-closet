<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class Welcome extends Controller
{
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$products = Product::with('images')->get();

		// Fetch all categories from the Category model
        $categories = Category::where('name','demography')->get();
        $products = Product::all();
        //dd($products);
        //dd($categories);

		return view( 'welcome', compact( 'products' , 'categories' ) );
	}
}
