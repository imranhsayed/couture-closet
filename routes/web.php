<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\UserAddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RequireAdmin;
use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get( '/', [ App\Http\Controllers\Welcome::class, 'index' ] )->name( 'welcome' );

// Public Routes
Route::get( '/about', fn() => view( 'about' ) )->name( 'about' );
Route::get('/shop', fn() => view('shop'))->name('shop');



/**
 * Product Route.
 */
Route::get( '/product', [ ProductController::class, 'index' ] )->name( 'product.index' );
Route::get( '/product/review/', [ ProductReviewController::class, 'create' ] )->name( 'product.leave.review' );
Route::post( '/product/review', [ ProductReviewController::class, 'store' ] )->name( 'product.review.store' );

// Route for the cart page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Route for the checkout page
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

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
	Route::get('/order-confirmation', function () {
		return view('order-confirmation');
	})->name('order-confirmation');
	Route::get('/order-details', function () {
		return view('order-details');
	})->name('order-details');
	Route::get( '/order/{order}', [ OrderController::class, 'show' ] ) ->name( 'order.show' );
} );


// Admin Routes
Route::middleware( [ 'auth', RequireAdmin::class ] )->group( function () {
	// Product Management Routes
	// Route::get( '/admin/inquiries', [ InquiryController::class, 'index' ] )->name( 'admin.inquiries.index' );
	// Route::post( '/admin/inquiries', [ InquiryController::class, 'store' ] )->name( 'admin.inquiries.store' );
	// Route::put( '/admin/inquiries/{id}', [ InquiryController::class, 'update' ] )->name( 'admin.inquiries.update' );
	// Route::delete( '/admin/inquiries/{id}', [ InquiryController::class, 'destroy', ] )->name( 'admin.inquiries.destroy' );
} );
