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
 * Class CounterAddToCartButton
 */
class CounterAddToCartButton extends HTMLElement {
	constructor() {
		super();
		
		// Subscribe.
		subscribe( this.update.bind( this ) );
		
		this.productId = Number( this.getAttribute( 'product-id' ) ?? '' );
		this.quantity = Number( this.getAttribute( 'quantity' ) ?? 1 );
		this.button = this.querySelector( 'button' );
		this.button?.addEventListener( 'click', () => this.handleAddToCart() );
	}
	
	update() {
		// console.log( 'state', state );
	}
	
	handleAddToCart() {
		// Early return, if product id or quantity is not available.
		if ( ! this.productId || ! this.quantity ) {
			return;
		}
		
		addToCart( this.productId, this.quantity );
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-counter-add-to-cart', CounterAddToCartButton );
