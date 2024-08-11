/**
 * Global variables.
 */
const { customElements, HTMLElement, zustand } = window;

/**
 * Get Store.
 */
const { subscribe } = zustand.stores.globalStore;

/**
 * Class Checkout
 */
class Checkout extends HTMLElement {
	/**
	 * Constructor.
	 */
	constructor() {
		super();

		// Subscribe.
		subscribe( this.update.bind( this ) );

		// Elements
		this.checkoutCartContainerElement = this.querySelector( '#checkout-cart-items' );
		this.placeOrderButton = this.querySelector( '#place-order-btn' );
		this.formElement = this.querySelector( 'form' );

		// Event.
		this.placeOrderButton?.addEventListener( 'click', () => this.handleFormSubmit() )

	}

	/**
	 * Update
	 *
	 * @param state
	 */
	update( state ) {
		// Fetch and update checkout cart markup.
		this.fetchAndUpdateCheckoutCartMarkup( state.cart );

		// Set the cart data
		this.setAttribute( 'cart', JSON.stringify( state.cart ) );
	}

	/**
	 * Fetch and update cart markup.
	 *
	 * @param cartData
	 */
	fetchAndUpdateCheckoutCartMarkup( cartData = [] ) {
		fetch( '/cart-details', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'X-CSRF-TOKEN': document.querySelector( 'meta[name="csrf-token"]' ).content,
			},
			body: JSON.stringify( { ...cartData } ),
		} )
			.then( response => {
				if ( ! response.ok ) {
					return response.json().then( data => {
						if ( response.status === 422 ) {
							const errors = data.errors;
							// Handle validation errors here
							console.error( 'Validation errors:', errors );
						} else {
							console.error( 'Response status:', response.status, data );
						}
						throw new Error( 'Network response was not ok' );
					} );
				}
				return response.json();
			} )
			.then( response => {
				if ( response.success ) {
					console.log( 'response', response );
					// Update markup.
					// this.updateCartItemsCountMarkup( response?.data?.products?.length ?? 0 );
					this.addCheckoutItemsMarkup( response?.data ?? [] );
					// this.updateCartSummaryMarkup( response?.data ?? [] );
				}
			} )
			.catch( error => {
				console.error( 'There was a problem with the fetch operation:', error );
			} );

	}


	/**
	 * Add checkout items markup.
	 *
	 * @param data
	 */
	addCheckoutItemsMarkup( data ) {
		let checkoutItemsMarkup = '<tbody>';

		// Loop through products.
		data?.products.forEach( ( product ) => {
			checkoutItemsMarkup += `
	            <tr class="text-sm">
	                <th><img style="object-fit: cover;" src="${ product?.image_url ?? '' }" alt="" width="50" height="50"></th>
	                <th class="py-4 fw-normal text-muted">${ product?.name ?? '' } <span>x ${ product?.quantity ?? 0 }</span></th>
	                <td class="py-4 text-end text-muted">$${ product?.amount ?? '' }</td>
	            </tr>
			`;
		} );

		// Add the taxes.
		checkoutItemsMarkup += `
            <tr>
                <th class="py-5 border-dark" colspan="2">
                    <div class="mb-4">Shipping &amp; Taxes</div>
                    <p class="fw-normal"><img src="pictures/checked.svg" alt="Right Icon" class="ms-2" style="width: 16px; height: 16px; margin-right:10px;"> GST <span class="fw-bold">
                            $20</span></p>
                    <p class="fw-normal"><img src="pictures/checked.svg" alt="Right Icon" class="ms-2" style="width: 16px; height: 16px; margin-right:10px;"> HST <span class="fw-bold">
                            $17.5</span></p>
                    <p class="fw-normal"><img src="pictures/checked.svg" alt="Right Icon" class="ms-2" style="width: 16px; height: 16px; margin-right:10px;"> Shipping and Handling <span class="fw-bold"> $20</span></p>
                </th>
            </tr>
		`;

		// Add total.
		checkoutItemsMarkup += `
            <tr>
                <th class="py-4 text-uppercase fw-bold border-dark align-bottom">Total</th>
                <td class="py-4 text-end h3 fw-bold border-dark">$${ data?.amount ?? 0 }</td>
            </tr>
		`;

		// End
		checkoutItemsMarkup += '</tbody>';

		this.checkoutCartContainerElement.innerHTML = checkoutItemsMarkup;
	}

	/**
	 * Check handle form submit to create an order.
	 */
	handleFormSubmit() {
		// Create an object to hold the form data
		const formData = {};

		// Iterate over the form elements.
		for( let element of this.formElement.elements ) {
			// Skip elements without a name attribute (like buttons)
			if ( element.name ) {
				formData[ element.name ] = element.value;
			}
		}

		// Get cart data.
		const cartData = JSON.parse( this.getAttribute( 'cart' ) );

        // TODO Please pass tax's id dynamically
        const taxRateId = 1;

		// Send a create order request
		fetch( '/order/create-order', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'X-CSRF-TOKEN': document.querySelector( 'meta[name="csrf-token"]' ).content,
			},
			body: JSON.stringify( {
                taxRateId,
				cartData,
				formData,
			} ),
		} )
			.then( ( response ) => {
				if ( ! response.ok ) {
					return response.json().then( data => {
						if ( response.status === 422 ) {
							const errors = data.errors;
							// Handle validation errors here
							console.error( 'Validation errors:', errors );
						} else {
							console.error( 'Response status:', response.status, data );
						}
						throw new Error( 'Network response was not ok' );
					} );
				}
				return response.json();
			} )
			.then( response => {
				if ( response.success ) {
					// Update markup.
					console.log( 'response.success', response.success );
				}
			} )
			.catch( error => {
				console.error( 'There was a problem with the fetch operation:', error );
			} );
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-checkout', Checkout );
