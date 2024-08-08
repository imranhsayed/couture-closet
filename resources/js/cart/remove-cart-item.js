/**
 * Global variables.
 */
const { customElements, HTMLElement } = window;

/**
 * Internal Dependencies.
 */
import { removeEntireCartItem } from '../store/actions.js';

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
		
		// Remove cart item.
		removeEntireCartItem( productId );
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-remove-cart-item', RemoveCartItem );
