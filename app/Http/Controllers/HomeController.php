<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

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
        // prepare user's data
        // users profile
        // orders
        $orders = Order::latest()->paginate(10);
        
        // reviews
        return view( 'home' ,  compact( 'orders' ) );
    }
}
