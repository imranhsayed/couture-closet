import { resetNotification } from '../store/actions.js';

/**
 * Global variables.
 */
const { customElements, HTMLElement, zustand } = window;

/**
 * Get Store.
 */
const { subscribe } = zustand.stores.globalStore;

export default class Notification extends HTMLElement {
	constructor() {
		super();
		
		// Subscribe.
		subscribe( this.update.bind( this ) );
	}
	
	update( state ) {
		const { notification } = state;
		
		if ( notification ) {
			this.innerText = notification;
			this.showNotification();
			resetNotification();
		}
	}
	
	connectedCallback() {
		this.hideNotification();
	}
	
	showNotification() {
		this.classList.add( 'show' );
		this.classList.remove( 'hide' );
		
		setTimeout( () => {
			this.hideNotification();
		}, 1000 );
	}
	
	hideNotification() {
		this.classList.remove( 'show' );
		this.classList.add( 'hide' );
	}
}

// Define the custom element
customElements.define( 'cc-notification', Notification );
