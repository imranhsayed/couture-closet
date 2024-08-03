/**
 * Internal Dependencies.
 */
import { initialize } from './store/actions.js';

/**
 * Class main.
 */
class Main {
	constructor() {
		// Initialize Global Store.
		window.onload = () => {
			this.initialize();
		}
	}
	
	/**
	 * Initialize component.
	 */
	initialize() {
		// Initialize data for the component.
		initialize( {
			initialized: true,
		} );
	}
	
}

new Main();
