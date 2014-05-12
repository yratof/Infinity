<?php // Add Shortcode
function comic( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'Titles' => 'show',
			'Direction' => 'vertical',
		), $atts )
	);

	// Code
//This is where the query goes
}
add_shortcode( 'Comic', 'comic' );