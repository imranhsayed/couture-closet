<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\ProductReview;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	    $userId = \Auth::user()->id;
	    if ( ! $userId ) {
		    return redirect( '/login' )->with( 'user.error', 'Please login before leave a review!' );
	    }

		$title   = 'Product Reviews';
		$reviews = ProductReview::all();

	    return view( 'admin.reviews.index', compact( 'title', 'reviews' ) );
    }

    /**
     * Show the form for creating a new resource.
     * Leave a review for a product
     */
    public function create(Request $request)
    {
        $requestParams = $request;
        // only use these params once
        session()->flash('productId', $requestParams['productId']);
        session()->flash('orderId', $requestParams['orderId']);
        return redirect('/shop/' . $requestParams['productId'] . '#reviews');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
	    // check user is login
	    $params = $request->all();
	    echo '<pre/>';
	    print_r($params);
	    $userId = \Auth::user()->id;
	    if ( ! $userId ) {
		    return redirect( '/login' )->with( 'user.error', 'Please login before leave a review!' );
	    }

	    // does user buy this product?
	    $productId    = $params['product_id'];
	    $hasPurchased = OrderItem::whereHas( 'order', function ( $query ) use ( $userId ) {
		    $query->where( 'user_id', $userId );
	    } )->where( 'product_id', $productId )->exists();
	    if ( ! $hasPurchased ) {
			dd('hell' . $productId);
		    // user didn't buy this product
		    return redirect( '/shop/' . $productId . '#reviews' )->with( 'user.error', 'Sorry, You cannot leave a review!' );
	    }

	    // user buy this product and store the review
	    $params['user_id'] = $userId;
	    try {
		    if ( ProductReview::create( $params ) ) {
			    session()->flash( 'user.success', 'Leave a review successfully!' );
		    }
	    } catch ( QueryException $e ) {
		    session()->flash( 'user.warning', 'You already leave a review for this product!' );
	    }

	    return back();
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
