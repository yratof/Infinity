<?php
	/*
	Template Name: Infinity comic page
	*/
?>
<?php
	get_header();
?>
<?php
	$args = array(
					'post_type' => 'panel',
					);

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		echo '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<li>' . get_the_title() . '</li>';
		}
		echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
?>
<?php
	get_footer();
?>