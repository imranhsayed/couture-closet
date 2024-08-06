/**
 * External dependencies.
 */
const { persist, create, stores } = window.zustand;

/**
 * Constants.
 */
export const STORE_NAME = 'globalStore';

/**
 * Default state.
 */
export const DEFAULT_STATE = {
	cart: {
		products: [],
		totalProductsCount: 0,
	},
    userProfile: {
        activeTab: 'orders'
    },
	loading: false,
	initialized: false,
};

/**
 * Persistent keys.
 */
export const PERSISTENT_STATE_KEYS = [ 'cart' , 'userProfile' ];

/**
 * Create store.
 */
const store = create(
	persist(
		() => DEFAULT_STATE,
		{
			name: STORE_NAME,
			partialize: ( state ) => {
				// Create persistent state variable.
				const persistentState = {};
				PERSISTENT_STATE_KEYS.forEach( ( key ) => {
					// Set persistent state.
					persistentState[ key ] = state[ key ];
				} );

				// Return persistent state.
				return persistentState;
			},
		},
	),
);

// Set store value.
stores[ STORE_NAME ] = store;

// Export store.
export default store;
