/**
 * Global variables.
 */
const { customElements, HTMLElement, zustand } = window;

/**
 * Get Store.
 */
const { subscribe } = zustand.stores.globalStore;

/**
 * Class FormFieldError
 */
class FormFieldError extends HTMLElement {
	/**
	 * Constructor.
	 */
	constructor() {
		super();
		
		// Subscribe.
		subscribe( this.update.bind( this ) );
		
	}
	
	/**
	 * Update
	 *
	 * @param state
	 */
	update( state ) {
		console.log( 'state', state );
		const fieldName = this.getAttribute( 'name' );
		
		// If the error object contains error key, show the error.
		if ( state.errors.hasOwnProperty( `formData.${fieldName}` ) ) {
			this.setAttribute( 'active', 'true' );
			this.innerHTML = state.errors[`formData.${fieldName}`][0];
		} else {
			this.removeAttribute( 'active' );
		}
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-form-field-error', FormFieldError );
