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

		$products = Product::paginate(12);
		
		return view( 'welcome', compact( 'products' ) );
	}
}
