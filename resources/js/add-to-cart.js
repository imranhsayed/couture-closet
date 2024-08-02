/**
 * Global variables.
 */
const { customElements, HTMLElement } = window;

/**
 * Class AddToCartButton
 */
class AddToCartButton extends HTMLElement {
	constructor() {
		super();
		
		this.productId = Number( this.getAttribute( 'product-id' ) ?? '' );
		this.quantity = Number( this.getAttribute( 'quantity' ) ?? 1 );
		this.button = this.querySelector( 'button' );
		this.button?.addEventListener( 'click', () => this.addToCart() );
	}
	
	addToCart() {
		event.preventDefault();
		// Early return, if product id or quantity is not available.
		if ( ! this.productId || ! this.quantity ) {
			return;
		}
		console.log( 'hello', this.productId, this.quantity );
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-add-to-cart-button', AddToCartButton );
