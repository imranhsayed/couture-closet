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
		$products = Product::with('categories', 'images')->whereHas('categories', function ($query) {
			                   $query->where('name', 'size');
		                   })->paginate(12);

		$categories = Category::where( 'name', 'demography' )->distinct()->get();
		
		return view( 'welcome', compact( 'products','categories' ) );
	}
}
