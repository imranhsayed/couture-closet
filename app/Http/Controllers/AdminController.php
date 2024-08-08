<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // orders
        $currentOrderCount = Order::where('order_date', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))->count();
        $previousOrderCount = Order::where('order_date', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))
                                   ->where('order_date', '<', DB::raw('NOW() - INTERVAL 7 DAY'))->count();
        $orderRateOfChange = 0;
        if ($previousOrderCount > 0) {
            $orderRateOfChange = (($currentOrderCount - $previousOrderCount) / $previousOrderCount) * 100;
        }

        // total revenue
        $currentTotalRevenue = Order::where('order_date', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))->sum('total_amount');
        $previousTotalRevenue = Order::where('order_date', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))
            ->where('order_date', '<', DB::raw('NOW() - INTERVAL 7 DAY'))->sum('total_amount');
        $totalRevenueOfChange = 0;
        if ($previousTotalRevenue > 0) {
            $totalRevenueOfChange = (($currentTotalRevenue - $previousTotalRevenue) / $previousTotalRevenue) * 100;
        }

        // total products and category
        $productCount = Product::whereNull('deleted_at')->count();
        $categoryCount = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
                                ->distinct()
                                ->count('product_categories.category_id');

        // users
        $currentUserCount = User::where('created_at', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))->count();
        $previousUserCount = User::where('created_at', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))
                                 ->where('created_at', '<', DB::raw('NOW() - INTERVAL 7 DAY'))->count();
        $userRateOfChange = 0;
        if ($previousUserCount > 0) {
            $userRateOfChange = (($currentUserCount - $previousUserCount) / $previousUserCount) * 100;
        }

        // weekly sales amount
        $weeklySales = $currentTotalRevenue;

        // top 5 selling clothes
        $topProducts = OrderItem::select('product_id', DB::raw('count(*) as count_product'), DB::raw('sum(quantity) as total_quantity'))
                 ->groupBy('product_id')
                 ->orderBy('count_product', 'desc')
                 ->take(5)
                 ->with('product.primaryImage')
                 ->get();

        return view( 'admin.index' , compact(
                                            'currentOrderCount' ,
                                            'orderRateOfChange',
                                            'currentTotalRevenue',
                                            'totalRevenueOfChange',
                                            'productCount',
                                            'categoryCount',
                                            'currentUserCount',
                                            'userRateOfChange',
                                            'weeklySales',
                                            'topProducts'
                                            ) );
    }

    /**
     * charts for weekly sales
     */
    public function charts()
    {
        // prepare data
        $salesData = Order::where('order_date', '>=', DB::raw('NOW() - INTERVAL 7 DAY'))
                          ->select(DB::raw("DATE_FORMAT(order_date, '%d/%m') as date"), DB::raw('SUM(total_amount) as sales'))
                          ->groupBy(DB::raw("DATE_FORMAT(order_date, '%d/%m')"))
                          ->orderBy(DB::raw("DATE_FORMAT(order_date, '%d/%m')"))
                          ->pluck('sales', 'date');
        $dates = [];
        $sales = [];
        foreach ($salesData as $date => $sale)
        {
            $dates[] = $date;
            $sales[] = $sale;
        }

        // organize data
        $data = [
            'labels' => $dates,
            'label_data' => $sales,
            'success' => true
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
