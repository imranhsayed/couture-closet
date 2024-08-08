/**
 * External dependencies.
 */
const { zustand } = window;

/**
 * Internal dependencies.
 */
const { setState, getState } = zustand.stores.globalStore;

/**
 * Initialize data for the component.
 *
 * @param {Object} settings          Settings.
 * @param {string} settings.partial  Partial Url.
 * @param {string} settings.selector Selector.
 */
export const initialize = ( settings = {}) => {
	// Get current state.
	const currentState = getState();

	// Initialize: Add settings in state.
	setState( {
		...currentState,
		...settings,
		baseUrl: window.location.origin + window.location.pathname,
	} );
};

/**
 * Add to cart.
 *
 * @param productId
 * @param quantity
 * @return {null}
 */
export const addToCart = ( productId = 0, quantity = 1 ) => {
	// If product id is not passed, early return.
	if ( ! productId ) {
		return null;
	}

	// Initialize.
	let productExists = false;
	const { cart } = getState();
	const newProduct = { productId, quantity };
	const updatedProducts = cart.products;

	// Loop through existing cart array and check if the product already exists.
	for( let i = 0; i < updatedProducts.length; i++ ) {
		// If product exists.
		if ( updatedProducts[ i ].productId === newProduct.productId ) {
			// Update it's quantity.
			updatedProducts[ i ].quantity += newProduct.quantity;
			productExists = true;
			break;
		}
	}

	/**
	 * If the new product does already exist in the cart,
	 * then just add it to the cart as an object.
	 */
	if ( ! productExists ) {
		updatedProducts.push( newProduct );
	}

	/**
	 * Set the updated cart into the state.
	 */
	setState( {
		cart: {
			products: updatedProducts,
			totalProductsCount: getTotalProductCount( updatedProducts ),
		},
		notification: `${quantity} item(s) added.`,
	} );
}

/**
 * Remove from cart.
 *
 * @param productId
 * @return {null}
 */
export const removeFromCart = ( productId = 0 ) => {
	// If product id is not passed, early return.
	if ( ! productId ) {
		return null;
	}

	// Initialize.
	const { cart } = getState();
	const updatedProducts = [...cart.products]; // Create a copy of the products array.

	// Loop through the cart array to find the product to remove.
	for( let i = 0; i < updatedProducts.length; i++ ) {
		// If the product exists.
		if ( updatedProducts[ i ].productId === productId ) {
			// Decrease the quantity by 1.
			updatedProducts[ i ].quantity -= 1;

			// If the quantity becomes 0 or less, remove the product from the cart.
			if ( updatedProducts[ i ].quantity <= 0 ) {
				updatedProducts.splice( i, 1 );
			}
			break;
		}
	}

	/**
	 * Set the updated cart into the state.
	 */
	setState( {
		cart: {
			products: updatedProducts,
			totalProductsCount: getTotalProductCount( updatedProducts ),
		},
		notification: `1 item removed.`,
	} );
}


/**
 * Get Total Products Count.
 *
 * @param products
 * @return {number}
 */
const getTotalProductCount = ( products = [] ) => {
	if ( ! products.length ) {
		return 0;
	}

	let totalCount = 0;

	// Loop through all the products and increment the count.
	for( let i = 0; i < products.length; i++ ) {
		totalCount += products[ i ].quantity;
	}

	return totalCount;
};

/**
 * set active tab name
 * @param name tab name
 */
export const setActiveTab = (name) => {
    // set active tab
    setState({
        userProfile: {
            activateTab: name
        }
    });
}

/**
 * activate tab
 */
export const activateTab = () => {
    const { userProfile } = getState();
    if (userProfile.activateTab) {
        let tabTrigger = $(`#${userProfile.activateTab}-tab`);
        tabTrigger.trigger('click');
    } else {
        // default active tab
        $('#user-info').trigger('click');
    }
}

/**
 * Remove entire item from cart.
 *
 * @param productId
 * @return {null}
 */
export const removeEntireCartItem = ( productId ) => {
	// If product id is not passed, early return.
	if ( ! productId ) {
		return null;
	}

	// Initialize.
	const { cart } = getState();
	const updatedProducts = cart.products.filter( product => product.productId !== productId );

	/**
	 * Set the updated cart into the state.
	 */
	setState( {
		cart: {
			products: updatedProducts,
			totalProductsCount: getTotalProductCount( updatedProducts ),
		},
		notification: `Product removed.`,
	} );
}

export const resetNotification = () => {
	setState( {
		notification: '',
	} );
}

