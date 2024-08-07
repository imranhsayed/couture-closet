<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\UserAddressController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RequireAdmin;
use App\Http\Middleware\EnsureUserIsAuthenticated;


Route::get( '/', [ App\Http\Controllers\Welcome::class, 'index' ] )->name( 'welcome' );

// Public Routes
Route::get( '/shop', fn() => view( 'shop' ) )->name( 'shop' );
Route::get( '/about', fn() => view( 'about' ) )->name( 'about' );
Route::get( '/thank-you', fn() => view( 'thank-you' ) )->name( 'thank-you' );
Route::get('/categories', [ProductController::class, 'fetchCategories']);

/**
 * Product Route.
 */
Route::get( '/product', [ ProductController::class, 'index' ] )->name( 'product.index' );
Route::get('/product/{product}', [ ProductController::class, 'show' ])->name( 'product.show' );
Route::get( '/product/review/', [ ProductReviewController::class, 'create' ] )->name( 'product.leave.review' );
Route::post( '/product/review', [ ProductReviewController::class, 'store' ] )->name( 'product.review.store' );

// Route for the cart page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Cart Details.
Route::post( '/cart-details', function () {
    $requestPayload = request()->all();
    $products = [];
    $amount = 0;
    foreach ($requestPayload['products'] as $product)
    {
        $srcProduct = Product::with('primaryImage')->find($product['productId']);
        $totalPrice = $srcProduct->price * $product['quantity'];
        $amount += $totalPrice;
        $products[] = [
            'id' => $srcProduct->id,
            'name' => $srcProduct->name,
            'size' => $product['size'],
            'image_url' => $srcProduct['primaryImage']['image_url'],
            'unit_price' => $srcProduct->price,
            'quantity' => $product['quantity'],
            'stock_quantity' => $srcProduct->stock_quantity,
            'amount' => round($totalPrice, 2)
        ];
    }

    $data = [
        'products' => $products,
        'amount' => round($amount, 2)
    ];

	return response()->json( [ 'data'=> $data, 'success' => true ] );
} )->name( 'cart-details' );

// Route for the checkout page
// Route::get('/checkout', function () {
//     return view('checkout');
// })->name('checkout');

// Route::get('/order', function () {
//     return view('order');
// })->name('order');

// Authentication Routes
Auth::routes();
Route::get( '/home', [ App\Http\Controllers\HomeController::class, 'index' ] )->name( 'home' );

// User Routes
Route::middleware( [ 'auth', EnsureUserIsAuthenticated::class ] )->group( function () {
	// User Profile
	Route::get( '/user/profile', [ App\Http\Controllers\HomeController::class, 'index' ] )->name( 'user.profile' );

    // User Address
	Route::post( '/user/address', [ UserAddressController::class, 'store' ])->name( 'user.address.store' );
	Route::put( '/user/address/{id}', [ UserAddressController::class, 'update' ])->name( 'user.address.update' );
	Route::get( '/user/address/default/{id}', [ UserAddressController::class, 'setDefault' ])->name( 'user.address.default' );
	Route::delete( '/user/address/delete/{id}', [ UserAddressController::class, 'destroy' ])->name( 'user.address.delete' );

    // Order
	Route::get( '/order/{order}', [ OrderController::class, 'show' ] ) ->name( 'order.show' );

	Route::get('/checkout', function () {
		return view('checkout');
	})->name('checkout');

	Route::get('/order', function () {
		return view('order');
	})->name('order');

	// Route::get( '/projects', [ ProjectController::class, 'index' ] )->name( 'projects.index' );
	// Route::get( '/projects/{project}', [ ProjectController::class, 'show' ] )->name( 'projects.show' );
} );

// Admin Routes
Route::middleware( [ 'auth', RequireAdmin::class ] )->group( function () {
	// Product Management Routes
    Route::get( '/admin', function() {
        return view( 'admin.index' );
    } )->name( 'admin.index' );
	// Route::get( '/admin/inquiries', [ InquiryController::class, 'index' ] )->name( 'admin.inquiries.index' );
	// Route::post( '/admin/inquiries', [ InquiryController::class, 'store' ] )->name( 'admin.inquiries.store' );
	// Route::put( '/admin/inquiries/{id}', [ InquiryController::class, 'update' ] )->name( 'admin.inquiries.update' );
	// Route::delete( '/admin/inquiries/{id}', [ InquiryController::class, 'destroy', ] )->name( 'admin.inquiries.destroy' );
} );
