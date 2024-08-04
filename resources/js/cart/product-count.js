/**
 * Global variables.
 */
const { customElements, HTMLElement, zustand } = window;

/**
 * Get Store.
 */
const { subscribe } = zustand.stores.globalStore;

/**
 * Class AddToCartButton
 */
class ProductCount extends HTMLElement {
	constructor() {
		super();
		
		// Subscribe.
		subscribe( this.update.bind( this ) );
	}
	
	/**
	 * Update.
	 *
	 * @param state
	 */
	update( state ) {
		// Set the value of the html to total product count.
		this.innerHTML = state.cart.totalProductsCount;
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-product-count', ProductCount );
