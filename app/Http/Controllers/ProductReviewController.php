<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductReviewController extends Controller {
	/**
	 * Display a listing of the resource.
	 */
	public function index() {
		if ( ! \Auth::check() || ! \Auth::user()->is_admin ) {
			return redirect( '/login' )->with( 'user.error', 'Please login to see the review!' );
		}

		$title   = 'Product Reviews';
		$reviews = ProductReview::paginate( 10 );

		return view( 'admin.reviews.index', compact( 'title', 'reviews' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 * Leave a review for a product
	 */
	public function create( Request $request ) {
		$requestParams = $request;
		// only use these params once
		session()->flash( 'productId', $requestParams['productId'] );
		session()->flash( 'orderId', $requestParams['orderId'] );

		return redirect( '/shop/' . $requestParams['productId'] . '#reviews' );
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store( Request $request ) {
		// check user is login
		$params = $request->all();
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
			// user didn't buy this product
			return redirect( '/shop/' . $productId . '#reviews' )->with( 'user.error', 'Sorry, You cannot leave a review! because you have not purchased this product.' );
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
	public function show( string $id ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit( ProductReview $review ) {
		if ( ! \Auth::check() || ! \Auth::user()->is_admin ) {
			return redirect( '/login' )->with( 'user.error', 'Please login to see the review!' );
		}

		$title = 'Edit Review';

		return view( 'admin.reviews.edit', compact( 'title', 'review' ) );
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update( Request $request, ProductReview $review ) {
		if ( ! \Auth::check() || ! \Auth::user()->is_admin ) {
			return redirect( '/login' )->with( 'user.error', 'Please login to see the review!' );
		}
		
		// Validate the request data
		$validatedData = $request->validate( [
			'title'       => 'required|string|max:255',
			'review_text' => 'required|string',
			'rating'      => 'required|integer|min:1|max:5',
			'is_approved' => 'required|boolean',
		] );

		try {
			// Update the review with the validated data
			$review->update( $validatedData );

			// Redirect with success message
			return redirect()->route( 'admin.reviews.index' )->with( 'admin.success', 'Review updated successfully!' );
		} catch ( \Exception $e ) {
			// Redirect with error message if update fails
			return redirect()->route( 'admin.reviews.edit', $review )->with( 'admin.error', 'Failed to update review.' );
		}
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy( ProductReview $review ) {

		try {
			// Attempt to delete the review
			$review->delete();

			// Redirect on success
			return redirect()->route( 'admin.reviews.index' )->with( "admin.success", "Deleted review successfully!" );
		} catch ( \Exception $e ) {
			// Redirect on failure
			return redirect()->route( 'admin.reviews.index' )->with( 'admin.error', 'Delete Review failed!' );
		}
	}

	/**
	 * Leave a review.
	 */
	public function leaveReview() {
		if ( ! \Auth::check() || ! \Auth::user()->is_admin ) {
			return redirect( '/login' )->with( 'user.error', 'Please login to see the review!' );
		}

		$title = 'Leave Review';
		$products = Product::paginate( 10 );

		return view( 'admin.reviews.leave-review', compact( 'title', 'products' ) );
	}

	/**
	 * Search review content:
	 *
	 * @param Request $request
	 */
	public function search(Request $request) {
		if ( ! \Auth::check() || ! \Auth::user()->is_admin ) {
			return redirect( '/login' )->with( 'user.error', 'Please login to see the review!' );
		}
		$search = $request->get('search');
		$title   = 'Product Reviews';
		$reviews = ProductReview::where('title', 'LIKE', '%' . $search . '%')
		                   ->orWhere('review_text', 'LIKE', '%' . $search . '%')
		                   ->paginate(10);

		return view( 'admin.reviews.index', compact( 'title', 'reviews' ) );
	}
}
