<?php
/*
	Plugin Name: infinite
	Plugin Script: infinite.php
	Plugin URI: http://yratof.github.io/infinite
	Description: A plugin to give you an infinite comic page
	Version: 0.1a
	Author: Andrew Lazarus
	Author URI: http://www.formless.me
*/

include_once('inc/create-panels-post-type.php');
include_once('inc/create-chapters-taxonomy.php');
include_once('inc/create-infinity-page.php');
include_once('inc/shortcode.php');

// ------------------
// infinite parameters will be saved in the database
function infinite_add_options() {
	// infinite_add_options: add options to DB for this plugin
	add_option('infinite_nb_widgets', '75');
	// add_option('infinite_...','...');
}
infinite_add_options();

// ------------------
// This was breaking things commented it out for now

// infinite_showresult will generate the (HTML) output
//function infinite_showresult() {
//	global $wpdb;
	// get your parameter values from the database
//	$infinite_nb_widgets = get_option('infinite_nb_widgets');
	// generate $infinite_result based on ...
	// (your code)
	// to do a query in the WP database, use the following line;
	// $query = $wpdb->get_results("SELECT .. FROM $wpdb->.. WHERE .. ORDER BY ..");
	// foreach ($query as $item) {
	// (e.g.) $itemdate = $item->post_date_gmt;
	//}

?>
