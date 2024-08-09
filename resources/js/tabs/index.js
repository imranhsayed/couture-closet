/**
 * Global variables.
 */
const { customElements, HTMLElement } = window;

/**
 * Class Tabs
 */
class Tabs extends HTMLElement {
	constructor() {
		super();
		
		// Elements.
		this.navLinks = this.querySelectorAll( '.nav-link' );
		
		this.navLinks?.forEach( ( navLink ) => {
			navLink?.addEventListener( 'click', ( event ) => this.handleNavLinkClick( event ) );
		} );
		
		this.initialize();
	}
	
	initialize() {
		const hash = window.location.hash;
		console.log( 'hash', hash );
		
		const targetHashLinkElement = document.querySelector(`[href="${hash}"]`);
		
		// First remove the active class from all links.
		this.navLinks?.forEach( ( navLink ) => {
			navLink?.classList.remove( 'active' );
		} );
		
		// Then add 'active' class to the element with hash.
		targetHashLinkElement.classList.add( 'active' );
		
		// Scroll to that element.
		targetHashLinkElement.scrollIntoView({ behavior: 'smooth' });
	}
	
	/**
	 * Handle Nav Link.
	 *
	 * @param event
	 */
	handleNavLinkClick( event ) {
		let tabId = event.target.getAttribute( 'href' )?.substring( 1 ) ?? '';
		
		history.pushState( null, '', `#${ tabId }` );
	}
}

/**
 * Initialize.
 */
customElements.define( 'cc-tabs', Tabs );
