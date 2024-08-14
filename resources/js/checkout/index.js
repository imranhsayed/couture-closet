import { clearCart, setErrors } from '../store/actions.js';

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
		this.provinceSelectElement = this.querySelector( 'cc-province-select select' );
		this.showShippingAddressInput = this.querySelector( '#show-shipping-address' );
		this.apiFailureMessageElement = this.querySelector( '#api-failure-message' );
		console.log( 'this.apiFailureMessageElement', this.apiFailureMessageElement );

		// Event.
		this.placeOrderButton?.addEventListener( 'click', () => this.handleFormSubmit() );
		this.provinceSelectElement?.addEventListener( 'change', ( event ) => this.handleProvinceSelectionForTaxCalculation( event ) );
		this.showShippingAddressInput?.addEventListener( 'click', ( event ) => this.handleDifferentShippingAddressButton( event ) );

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
					// Update markup.
					this.addCheckoutItemsMarkup( response?.data ?? [] );
					this.setAttribute('taxes', JSON.stringify( response?.data?.taxes ?? [] ) );
					this.setAttribute('total', response?.data?.amount.toString() ?? '' );
					this.setAttribute('products', JSON.stringify( response?.data?.products ?? [] ) );
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
	                <th>
	                    <img style="object-fit: cover;" src="${ product?.image_url ?? '' }" alt="" width="50" height="50">
	                    <p class="text-muted text-sm">Size: ${ product?.size ?? '' }</p>
	                </th>
	                <th class="py-4 fw-normal text-muted">${ product?.name ?? '' } <span>x ${ product?.quantity ?? 0 }</span></th>
	                <td class="py-4 text-end text-muted">$${ product?.amount ?? '' }</td>
	            </tr>
			`;
		} );

		// Add the taxes.
		checkoutItemsMarkup += `<tr id="cart-taxes"></tr>`;

		// Add total.
		checkoutItemsMarkup += `
            <tr>
                <th class="py-4 text-uppercase fw-bold border-dark align-bottom">Total</th>
                <td id="checkout-cart-total" class="py-4 text-end h3 fw-bold border-dark">$${ data?.amount ?? 0 }</td>
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
		
		// Reset errors first.
		setErrors( {} );
		this.apiFailureMessageElement.innerHTML = '';
		this.placeOrderButton.innerHTML = 'Processing...';

		// Send a create order request
		fetch( '/order/create-order', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'X-CSRF-TOKEN': document.querySelector( 'meta[name="csrf-token"]' ).content,
			},
			body: JSON.stringify( {
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
							
							setErrors( errors );
						} else {
							console.error( 'Response status:', response.status, data );
						}
						throw new Error( 'Network response was not ok' );
					} );
				}
				
				this.placeOrderButton.innerHTML = 'Place your order';
				return response.json();
			} )
			.then( response => {
				this.placeOrderButton.innerHTML = 'Place your order';
				
				if ( response.success && response.order_confirm_url ) {
					// Clear Cart first.
					clearCart();
					
					// Wait some time to clear the cart first.
					setTimeout( () => {
						// Redirect to order confirmation page.
						window.location.href = response.order_confirm_url;
					}, 200 )
				} else {
					// Set api response failure message.
					this.apiFailureMessageElement.innerHTML = response.message;
				}
			} )
			.catch( error => {
				this.placeOrderButton.innerHTML = 'Place your order';
				console.error( 'There was a problem with the fetch operation:', error );
			} );
	}

	/**
	 * Tax calculation based on province.
	 *
	 * @param event
	 */
	handleProvinceSelectionForTaxCalculation( event ) {
		// Get target element and tax data.
		const targetElement = event.target;
		const taxesData = JSON.parse( this.getAttribute( 'taxes' ) );
		const products = JSON.parse( this.getAttribute( 'products' ) );
		const taxDataForSelectedProvince = taxesData[ targetElement.value ];

		const totalQuantity = products.reduce((total, product) => {
			return total + product.quantity;
		}, 0);

		const tax = {
			id: taxDataForSelectedProvince?.id ?? '',
			gst_rate: parseFloat((parseFloat(taxDataForSelectedProvince.gst_rate) * totalQuantity).toFixed(2)),
			hst_rate: parseFloat((parseFloat(taxDataForSelectedProvince.hst_rate) * totalQuantity).toFixed(2)),
		};

		// Add taxes markup.
		this.addTaxesMarkup( tax );
	}

	/**
	 * Add taxes markup.
	 *
	 * @param tax
	 */
	addTaxesMarkup( tax ) {
		const total = parseFloat( this.getAttribute( 'total' ) ?? '' );

		const markup = `
		<th class="py-5 border-dark" colspan="2">
		    <div class="mb-4">Taxes</div>
		    <p class="fw-normal">
		        <img src="/images/checked.svg" alt="Right Icon" class="ms-2"
		             style="width: 16px; height: 16px; margin-right: 10px;"> GST
		        <span class="fw-bold">$${tax.gst_rate}</span>
		    </p>
		    <p class="fw-normal">
		        <img src="/images/checked.svg" alt="Right Icon" class="ms-2"
		             style="width: 16px; height: 16px; margin-right: 10px;"> HST
		        <span class="fw-bold">$${tax.hst_rate}</span>
		    </p>
		</th>
		`;

		// Add taxes markup.
		this.querySelector( '#cart-taxes' ).innerHTML = markup;

		// Calculate total with taxes and update the total.
		this.querySelector( '#checkout-cart-total' ).innerHTML = '$' + parseFloat( total + parseFloat( tax.gst_rate ) + parseFloat( tax.hst_rate ) ).toFixed(2);

		// Add provincial tax id.
		this.querySelector( '#provincial_tax_rate_id' ).value = tax.id;
	}

	/**
	 * Handle different shipping address button click.
	 *
	 * @param event
	 */
	handleDifferentShippingAddressButton( event ) {
		if ( event.target.checked ) {
			event.target.value = 'on';
		} else {
			event.target.value = 'off';
		}
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-checkout', Checkout );
