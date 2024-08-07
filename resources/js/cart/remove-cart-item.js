/**
 * Global variables.
 */
const { customElements, HTMLElement } = window;

/**
 * Internal Dependencies.
 */
import { removeCartItem } from '../store/actions.js';

/**
 * Class RemoveCartItem
 */
class RemoveCartItem extends HTMLElement {
	constructor() {
		super();
		
		this.addEventListener( 'click', () => this.handleRemoveCartItem() )
	}
	
	/**
	 * Handle remove cart item.
	 */
	handleRemoveCartItem() {
		// Get product id.
		const productId = Number( this.getAttribute( 'product-id' ) );
		console.log( 'productId', productId );
		
		// Remove cart item.
		removeCartItem( productId );
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-remove-cart-item', RemoveCartItem );
