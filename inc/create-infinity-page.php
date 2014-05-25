<?php

	function create_infinity_page_functions() {

		// If page doesnt exist
		if( get_page_by_title( 'Infinity' ) == null  ) {
			// Create infinity page
			$create_infinity_page = array(
				'post_title'    => 'Infinity',
				'post_type'		=> 'page',
				'post_status'   => 'publish',
			);
	
			// Insert the post into the database
			$post_ID = wp_insert_post( $create_infinity_page );
		}

		// If page does exist
		if( get_page_by_title( 'Infinity' ) != null ) {
			// Link Infinity page created above to infinity page template
				add_filter( 'template_include', 'infinity_page_template', 99 );
			
				function infinity_page_template( $template ) {
			
					if ( is_page( 'infinity' )  ) {
						$infinity_template = dirname(__FILE__).'/infinity-page-template.php';
						if ( '' != $infinity_template ) {
							return $infinity_template ;
						}
					}
				
					return $template;
				}
		}
	}

	// Hook into the 'init' action
	add_action( 'init', 'create_infinity_page_functions', 0 );
?>