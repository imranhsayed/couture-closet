<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\ProductReview;
use App\Models\UserAddress;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
	    $products = Product::with('images')->get();

        // prepare user's data
        $userId = \Auth::user()->id;
        $user = \Auth::user();

        // orders
        $orders = Order::where('user_id', $userId)->latest()->paginate(10);
        // addresses
        $userAddresses = UserAddress::where('user_id', $userId)->latest()->paginate(10);
        // product reviews
        $productReviews = ProductReview::where('user_id', $userId)->latest()->paginate(10);

	    return view( 'home', compact( 'user', 'products' , 'orders', 'userAddresses', 'productReviews' ) );
    }
}
