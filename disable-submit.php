<?php
/*
Plugin Name: Apple Coach - Gravity Forms - disable submit
Description: Disables the submit button in a Gravity Forms form (say that ten times fast! ;)) when the form is submitted (to prevent double submissions)
Version: 1.0
Author: Martijn Engler
Author URI: http://applecoach.nl/
*/
add_action("wp_enqueue_scripts", function(){
	wp_register_script(
		"ac-gf-disable-submit"
		,	plugins_url('disable-submit.js', __FILE__)
		, "jquery"
		, "0.2"
		, true
	);

	// Localize the script with new data
	;
	wp_localize_script('ac-gf-disable-submit', 'disable_submit', array(
		'processing_text' => apply_filters('ac_gf_disable_submit_processing_text', __( 'Processing…' )),
	));

	wp_enqueue_script("ac-gf-disable-submit");
});
