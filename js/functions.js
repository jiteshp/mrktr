/**
 * Global theme javascript.
 *
 * @since 1.0.0
 */
( function( $ ) {

	/**
	 * Wait for the document to load.
	 *
	 * @since 1.0.0
	 */
	$( document ).ready( function() {

		/**
		 * Handle the menu toggle click.
		 *
		 * @since 1.0.0
		 */
		$( '.primary-menu-toggle' ).on( 'click', function( e ) {
			var icon = $( this ).find( '.dashicons' );

			$( '.primary-menu' ).slideToggle( 400, function() {
				icon.toggleClass( 'dashicons-menu' ).toggleClass( 'dashicons-no' );
			} );

			e.preventDefault();
		} );

	} );

}( jQuery ) );
