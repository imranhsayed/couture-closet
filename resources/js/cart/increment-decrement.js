import { addToCart, removeFromCart } from '../store/actions.js';

/**
 * Global variables.
 */
const { customElements, HTMLElement } = window;

/**
 * IncrementDecrementControls Class.
 */
export default class IncrementDecrementControls extends HTMLElement {
	
	/**
	 * Constructor.
	 */
	constructor() {
		// Initialize parent.
		super();
		
		// Settings.
		this.minValue = Number( this.getAttribute( 'min-value' ) ?? '' );
		this.maxValue = Number( this.getAttribute( 'max-value' ) ?? '' );
		this.productId = Number( this.getAttribute( 'product-id' ) ?? 0 );
		
		// Elements.
		this.incrementBtn = this.querySelector( '.search-filters__increment-btn' );
		this.decrementBtn = this.querySelector( '.search-filters__decrement-btn' );
		this.inputEl = this.querySelector( 'input' );
		
		/**
		 * Events.
		 */
		this.incrementBtn?.addEventListener( 'click', ( event ) => this.incrementValue( event ) );
		this.decrementBtn?.addEventListener( 'click', ( event ) => this.decrementValue( event ) );
	}
	
	/**
	 * Observe Attributes.
	 *
	 * @return {Array} Attributes Array.
	 */
	static get observedAttributes() {
		// Return attributes.
		return [ 'selected-value' ];
	}
	
	/**
	 * Attribute Changed Callback.
	 *
	 * @param {string} name     Attribute Name.
	 * @param {string} oldValue Old value.
	 * @param {string} newValue New value.
	 */
	attributeChangedCallback( name, oldValue, newValue ) {
		// Check if the old value and new value are the same.
		if ( oldValue === newValue || 'selected-value' !== name || ! this.inputEl ) {
			// Return.
			return;
		}
		
		// Set the input value to the selected value.
		this.inputEl.value = this.getAttribute( 'selected-value' ) ?? '';
		
		// Dispatch Custom Event.
		this.dispatchEvent( new CustomEvent( 'change', {
			detail: { selectedValue: this.getAttribute( 'selected-value' ) },
		} ) );
	}
	
	/**
	 * Event: Click
	 *
	 * Increment Value.
	 *
	 * @param {Event} event
	 */
	incrementValue( event ) {
		// Prevent default behaviour.
		event.preventDefault();
		
		// Check if the input element is present.
		if ( ! this.inputEl ) {
			// Early return.
			return;
		}
		
		// Get the current input value.
		const currentInputValue = Number( this.inputEl?.value ?? '' );
		
		// As long as current input value is less than max allowed value.
		if ( currentInputValue < this.maxValue ) {
			// Set the selected value by incrementing the current value by 1.
			this.setAttribute( 'selected-value', String( currentInputValue + 1 ) );
			
			// Increment one item in the cart.
			addToCart( this.productId, 1 );
		}
		
		// Toggle disabled state.
		this.toggleDisabled();
	}
	
	/**
	 * Event: Click
	 *
	 * Decrement Value.
	 *
	 * @param {Event} event
	 */
	decrementValue( event ) {
		// Prevent default behaviour.
		event.preventDefault();
		
		// Check if the input element is present.
		if ( ! this.inputEl ) {
			// Early return.
			return;
		}
		
		// Get the current input value.
		const currentInputValue = Number( this.inputEl?.value ?? '' );
		
		// As long as current input value is greater than min allowed value.
		if ( currentInputValue > this.minValue ) {
			// Set the selected value by decrementing the current value by 1.
			this.setAttribute( 'selected-value', String( currentInputValue - 1 ) );
			
			// Remove 1 item from cart.
			removeFromCart( this.productId );
		}
		
		// Toggle disabled state.
		this.toggleDisabled();
	}
	
	/**
	 * Toggle disabled value.
	 */
	toggleDisabled() {
		// Get the current input value.
		const currentInputValue = Number( this.inputEl?.value ?? '' );
		
		// As long as current input value is less than max allowed value.
		if ( currentInputValue < this.maxValue ) {
			// Remove disabled attribute.
			this.incrementBtn?.removeAttribute( 'disabled' );
		} else {
			this.incrementBtn?.setAttribute( 'disabled', 'true' );
		}
		
		// As long as current input value is greater than min allowed value.
		if ( currentInputValue > this.minValue ) {
			this.decrementBtn?.removeAttribute( 'disabled' );
		} else {
			this.decrementBtn?.setAttribute( 'disabled', 'true' );
		}
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-increment-decrement-controls', IncrementDecrementControls );
