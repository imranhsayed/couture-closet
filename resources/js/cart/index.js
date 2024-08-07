/**
 * Global variables.
 */
const { customElements, HTMLElement, zustand } = window;

/**
 * Get Store.
 */
const { subscribe } = zustand.stores.globalStore;

/**
 * Class Cart
 */
class Cart extends HTMLElement {
	constructor() {
		super();

		// Subscribe.
		subscribe( this.update.bind( this ) );
		
		// Elements.
		this.cartItemsContainerElement = this.querySelector( '.cart-items' );
		this.cartSummaryItemsContainerElement = this.querySelector( '.cart-summary-items' );
	}

	update( state ) {
		this.fetchAndupdateCartMarkup( state.cart );
	}
	
	fetchAndupdateCartMarkup( cartData ) {
		fetch( '/cart-details', {
			method: 'POST',
			headers: {
                'Content-Type': 'application/json',
				'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
			},
			body: JSON.stringify( {
				...cartData
			} ),
		} )
			.then( response => {
				if ( ! response.ok ) {
					if ( response.status === 422 ) {
						return response.json().then( data => {
							const errors = data.errors;
							// Handle validation errors here
						} );
					}
					throw new Error( 'Network response was not ok' );
				}
				return response.json();
			} )
			.then( response => {
				if ( response.success ) {
					console.log( 'response', response.data );
					// Update markup.
					this.updateCartMarkup( response?.data ?? [] );
					this.updateCartSummaryMarkup( response?.data ?? [] );
				}
			} )
			.catch( error => {
				console.error( 'There was a problem with the fetch operation:', error );
			} );
	}
	
	/**
	 * Update Cart Markup.
	 *
	 * @param cartData
	 */
	updateCartMarkup( cartData ) {
		// Initialize cart markup
		let cartItemsMarkup = ``;
		
		// Loop through products and build markup.
		cartData?.products.forEach( product => {
			cartItemsMarkup += `
			<div class="cart-item">
				<div class="row d-flex align-items-center text-start text-md-center">
					<div class="col-12 col-md-5">
					<a class="cart-remove close mt-3 d-md-none" href="#">
						 <i class="fa fa-times"> </i>
						<div class="d-flex align-items-center">
						<a href="#"><img class="cart-item-img" src="/pictures/Mask.jpg" alt=""></a>
						<div class="cart-title text-start">
							<a class="text-dark link-animated" href="#"><strong>Skull Tee</strong></a><br>
							<span class="text-muted text-sm">Size: Large</span><br>
				       </div>
				        </div>
			       </div>
					<div class="col-12 col-md-7 mt-4 mt-md-0">
						<div class="row align-items-center">
							<div class="col-md-3">
							<div class="row">
						       <div class="col-6 d-md-none text-muted">Price per item</div>
								 <div class="col-6 col-md-12 text-end text-md-center">$${product?.unit_price ?? ''}</div>
							 </div>
							  </div>
							 <div class="col-md-4">
							 <div class="row align-items-center">
								<lb-increment-decrement-controls
									class="search-filters__selection-controls"
									min-value="1"
									max-value="100"
									selected-value="${ product?.quantity ?? 1 }"
								>
									<label for="inc-dec-${product?.id ?? ''}" style="display: none;">
										Increment Decrement
									</label>
									<div class="search-filters__selection-control-buttons">
										<button
											class="search-filters__decrement-btn"
											type="button"
										>
											-
										</button>
										<input
											id="inc-dec-${product?.id ?? ''}"
											class="search-filters__selection-control"
											type="number"
											min="1"
											name="cart-increment-decrement"
											value="${product?.quantity ?? 1}" readonly
										/>
										<button
											class="search-filters__increment-btn"
											type="button"
										>
											+
										</button>
									</div>
								</lb-increment-decrement-controls>
							 </div>
							</div>
							<div class="col-md-3">
							<div class="row">
							 <div class="col-6 d-md-none text-muted">Total price </div>
							  <div class="col-6 col-md-12 text-end text-md-center">$${product?.amount ?? ''}</div>
						   </div>
						 </div>
						 <div class="col-2 d-none d-md-block text-center">
							  <a class="cart-remove" href="#">
							   <img src="pictures/close.svg" alt="Close Icon" style="width: 12px !important; height: 12px !important;">
						 </a>
						</div>

						</div>
					</div>
					 </div>
					 </div>
			`
		} );
		
		// Add markup.
		this.cartItemsContainerElement.innerHTML = cartItemsMarkup;
	}
	
	/**
	 * Update cart summary markup.
	 *
	 * @param cartData
	 */
	updateCartSummaryMarkup( cartData ) {
		// Initialize cart summary markup
		let cartItemsSummaryMarkup = ``;
		
		// Loop through products.
		cartData?.products.forEach( ( product ) => [
			cartItemsSummaryMarkup = `
				<tr>
			        <td class="py-4">Back T-Shirtx2</td>
			        <td class="py-4 text-end text-muted">$${product.amount}</td>
				</tr>
			`
		] );
		
		// Add the items markup to container.
		this.cartSummaryItemsContainerElement.innerHTML = cartItemsSummaryMarkup;
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-cart', Cart );
