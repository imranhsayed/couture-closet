<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RequireAdmin;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use App\Models\Product;
use App\Models\ProductImage;

Route::get( '/', function () {

	$products = Product::with('images')->paginate(12);
    
    return view('welcome', compact('products'));
} );

// Public Routes
Route::get( '/about', fn() => view( 'about' ) )->name( 'about' );
Route::get( '/thank-you', fn() => view( 'thank-you' ) )->name( 'thank-you' );

/**
 * Product Route.
 */

// Authentication Routes
Auth::routes();
Route::get( '/home', [ App\Http\Controllers\HomeController::class, 'index' ] )->name( 'home' );

// User Routes
Route::middleware( [ 'auth', EnsureUserIsAuthenticated::class ] )->group( function () {
	// Route::get( '/projects', [ ProjectController::class, 'index' ] )->name( 'projects.index' );
	// Route::get( '/projects/{project}', [ ProjectController::class, 'show' ] )->name( 'projects.show' );
} );

// Admin Routes
Route::middleware( [ 'auth', RequireAdmin::class ] )->group( function () {
	// Product Management Routes
	// Route::get( '/admin/inquiries', [ InquiryController::class, 'index' ] )->name( 'admin.inquiries.index' );
	// Route::post( '/admin/inquiries', [ InquiryController::class, 'store' ] )->name( 'admin.inquiries.store' );
	// Route::put( '/admin/inquiries/{id}', [ InquiryController::class, 'update' ] )->name( 'admin.inquiries.update' );
	// Route::delete( '/admin/inquiries/{id}', [ InquiryController::class, 'destroy', ] )->name( 'admin.inquiries.destroy' );
} );