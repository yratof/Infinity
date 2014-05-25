<?php // Register Custom Taxonomy
function register_chapter_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Chapters', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Chapter', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Chapters', 'text_domain' ),
		'all_items'                  => __( 'All Chapters', 'text_domain' ),
		'parent_item'                => __( 'Parent Chapter', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Chapter:', 'text_domain' ),
		'new_item_name'              => __( 'New Chapter Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Chapter', 'text_domain' ),
		'edit_item'                  => __( 'Edit Chapter', 'text_domain' ),
		'update_item'                => __( 'Update Chapter', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Chapter with commas', 'text_domain' ),
		'search_items'               => __( 'Search Chapters', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Chapter', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Chapters', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'chapter', array( 'panel' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_chapter_taxonomy', 0 );