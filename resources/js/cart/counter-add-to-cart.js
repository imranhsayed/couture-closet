/**
 * Global variables.
 */
const { customElements, HTMLElement } = window;

/**
 * Internal Dependencies.
 */
import { addToCart } from '../store/actions.js';

/**
 * Class CounterAddToCartButton
 */
class CounterAddToCartButton extends HTMLElement {
	constructor() {
		super();
		
		this.productId = Number( this.getAttribute( 'product-id' ) ?? '' );
		this.inputElement = this.querySelector( '#product-detail-quantity-input' );
		this.button = this.querySelector( 'button' );
		this.button?.addEventListener( 'click', () => this.handleAddToCart() );
		console.log( 'this.inputElement', this.inputElement );
		
		// Events.
		this.inputElement?.addEventListener( 'input', ( event ) => {
			const input = event.target;
			// Don't allow user to select less than one product ( avoid negative values ).
			if ( input.value < 1 ) {
				input.value = 1;
			}
		} );
	}
	
	handleAddToCart() {
		// Get quantity.
		this.quantity = Number( this.inputElement.value ?? 1 );
		
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
