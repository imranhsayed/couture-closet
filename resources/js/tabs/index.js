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
		
		if ( ! hash ) {
			return;
		}
		
		const targetHashLinkElement = document.querySelector(`[href="${hash}"]`);
		const targetContentElement = document.querySelector( `${ hash }` );
		const allTabContentElements = document.querySelectorAll( '.tab-pane' );
		
		// First remove the active class from all links.
		this.navLinks?.forEach( ( navLink ) => {
			navLink?.classList.remove( 'active' );
		} );
		
		// Then add 'active' class to the element with hash.
		targetHashLinkElement?.classList.add( 'active' );
		
		// Scroll to that element.
		targetHashLinkElement?.scrollIntoView({ behavior: 'smooth' });
		
		// Remove active class from all tab contents first.
		allTabContentElements?.forEach( tabContentElement => {
			tabContentElement.classList.remove( 'active' );
		} );
		
		targetHashLinkElement.click();
		
		// Add on the targetContentElement.
		targetContentElement.classList.add( 'active' );
		targetContentElement.classList.add( 'show' );
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
