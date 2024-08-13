<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\Shop;
use App\Models\Product;
use App\Models\ProvincialTaxRate;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RequireAdmin;
use App\Http\Middleware\EnsureUserIsAuthenticated;


Route::get( '/', [ App\Http\Controllers\Welcome::class, 'index' ] )->name( 'welcome' );

// Public Routes
Route::get( '/about', fn() => view( 'about' ) )->name( 'about' );
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact.us');

Route::get( '/thank-you', fn() => view( 'thank-you' ) )->name( 'thank-you' );
Route::get('/termsandconditions', fn() => view('termsandconditions'))->name('termsandconditions');
Route::get('/refund-policy', fn() => view('refund-policy'))->name('refund-policy');

Route::get('/categories', [ProductController::class, 'fetchCategories']);

/**
 * Product Route.
 */
//Route::get( '/shop', [ \App\Http\Controllers\Shop::class, 'index' ] )->name( 'shop.index' );
Route::get('/shop/{category?}', [Shop::class, 'index'])->name('shop.index');

Route::get('/shop/{product}', [ \App\Http\Controllers\Shop::class, 'show' ])->name( 'shop.show' );

// Route for the cart page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Cart Details.
Route::post( '/cart-details', function () {
	$requestPayload = request()->all();
	$products       = [];
	$amount         = 0;
	foreach ( $requestPayload['products'] as $product ) {
		$srcProduct = Product::with( 'primaryImage' )->find( $product['productId'] );
		$totalPrice = $srcProduct->price * $product['quantity'];
		$amount     += $totalPrice;
		$products[] = [
			'id'             => $srcProduct->id,
			'name'           => $srcProduct->name,
			'size'           => $product['size'] ?? '',
			'image_url'      => $srcProduct['primaryImage']['image_url'],
			'unit_price'     => $srcProduct->price,
			'quantity'       => $product['quantity'],
			'stock_quantity' => $srcProduct->stock_quantity,
			'amount'         => round( $totalPrice, 2 ),
		];
	}

    // get all provincial tax rate
    $taxes = ProvincialTaxRate::select('id', 'province_code', 'gst_rate', 'hst_rate')->get();
    $transformedTaxes = $taxes->mapWithKeys(function ($item) {
        return [$item->province_code => [
            'id'       => $item->id,
            'gst_rate' => $item->gst_rate,
            'hst_rate' => $item->hst_rate,
        ]];
    });
    $data = [
        'products' => $products,
        'amount'   => round( $amount, 2 ),
        'taxes'    => $transformedTaxes ?? [],
    ];

	return response()->json( [ 'data' => $data, 'success' => true ] );
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

    // Product review
    Route::get( '/product/review', [ ProductReviewController::class, 'create' ] )->name( 'product.leave.review' );
    Route::post( '/product/review', [ ProductReviewController::class, 'store' ] )->name( 'product.review.store' );

    // Orders
    Route::post('/order/create-order' , [ OrderController::class, 'store' ])->name( 'order.store' );
	Route::get('/order-details/{id}', [OrderController::class, 'orderDetails'])->name('order-details.show');
    // Payment
    Route::get( '/payment/{orderId}', [ PaymentController::class, 'show' ])->name('payment.order');

    // Transaction
    Route::post( '/transaction' , [ TransactionController::class, 'create' ])->name('transaction.order.payment');

	Route::get('/order-confirmation', function () {
		return view('order-confirmation');
	})->name('order-confirmation');


	Route::get('/checkout', function () {
		return view('checkout');
	})->name('checkout');

	Route::get('/order', function () {
		return view('order');
	})->name('order');
} );

// Admin Routes
Route::middleware( [ 'auth', RequireAdmin::class ] )->group( function () {
	// Admin dashboard.
    Route::get( '/admin', [ AdminController::class, 'index' ] )->name( 'admin.index' );
    Route::get( '/admin/charts', [ AdminController::class, 'charts' ] )->name( 'admin.charts' );

    // Product management.
    // Product management.
    Route::get( '/admin/products', [ ProductController::class, 'index' ] )->name( 'admin.products.index' );
    Route::get( '/admin/products/search', [ ProductController::class, 'search' ])->name( 'admin.products.search' );
    Route::get( '/admin/products/add', [ ProductController::class , 'create' ])->name( 'admin.products.create' );
    Route::get( '/admin/products/{productId}/image/{imageId}', [ ProductController::class, 'setPrimaryImage' ] )->name( 'admin.products.set.primary.image' );
    Route::get( '/admin/products/image/{productId}/{imageId}', [ ProductController::class, 'deleteImage' ] )->name( 'admin.products.delete.image' );
    Route::get( '/admin/products/edit/{product}', [ ProductController::class , 'edit' ])->name( 'admin.products.edit' );
    Route::post( '/admin/products', [ ProductController::class, 'store' ] )->name( 'admin.products.store' );
    Route::put( '/admin/products/update/{product}', [ ProductController::class, 'update' ] )->name( 'admin.products.update' );
    Route::delete( '/admin/products/{product}', [ ProductController::class, 'destroy', ] )->name( 'admin.products.destroy' );

	// Review management.
	Route::get( '/admin/reviews', [ ProductReviewController::class, 'index' ] )->name( 'admin.reviews.index' );
	Route::post( '/admin/reviews', [ ProductReviewController::class, 'create' ] )->name( 'admin.reviews.create' );
	Route::get( '/admin/reviews/edit/{review}', [ ProductReviewController::class , 'edit' ])->name( 'admin.reviews.edit' );
	Route::put( '/admin/reviews/update/{review}', [ ProductReviewController::class, 'update' ] )->name( 'admin.reviews.update' );
	Route::delete( '/admin/reviews/{review}', [ ProductReviewController::class, 'destroy', ] )->name( 'admin.reviews.destroy' );
	Route::get( '/admin/reviews/search', [ ProductReviewController::class, 'search' ])->name( 'admin.reviews.search' );
	Route::get( '/admin/leave-review', [ ProductReviewController::class, 'leaveReview' ] )->name( 'admin.reviews.leave-review' );

    // category management
    Route::get( '/admin/category', [ CategoryController::class, 'index' ] )->name( 'admin.category.index' );
    Route::get( '/admin/category/add', [ CategoryController::class , 'create' ])->name( 'admin.category.create' );
    Route::post( '/admin/category', [ CategoryController::class, 'store' ] )->name( 'admin.category.store' );
    Route::delete( '/admin/category/{id}', [ CategoryController::class, 'destroy', ] )->name( 'admin.category.destroy' );
    Route::get( '/admin/category/edit/{category}', [ CategoryController::class , 'edit' ])->name( 'admin.category.edit' );
    Route::put( '/admin/category/update/{category}', [ CategoryController::class, 'update' ] )->name( 'admin.category.update' );
} );
