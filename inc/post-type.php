<?php // Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Panel', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Panel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Panel', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Panel:', 'text_domain' ),
		'all_items'           => __( 'All Panel', 'text_domain' ),
		'view_item'           => __( 'Panel', 'text_domain' ),
		'add_new_item'        => __( 'Add New Panel', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Panel', 'text_domain' ),
		'update_item'         => __( 'Update Panel', 'text_domain' ),
		'search_items'        => __( 'Search Panels', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Panels', 'text_domain' ),
		'description'         => __( 'The panels of the comic book', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-exerpt-view',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'Panels', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );