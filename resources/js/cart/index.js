/**
 * Global variables.
 */
const { customElements, HTMLElement, zustand } = window;

/**
 * Internal Dependencies.
 */
import { addToCart } from '../store/actions.js';

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
	}
	
	update( state ) {
		// this.updateCartMarkup( state.cart );
	}
	
	updateCartMarkup( cartData ) {
		fetch( '/cart-details', {
			method: 'POST',
			headers: {
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
			.then( data => {
				console.log( 'data', data.html );
				if ( data.success ) {
					// Update data.
					this.innerHTML = data.html;
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
customElements.define( 'cc-cart', Cart );
