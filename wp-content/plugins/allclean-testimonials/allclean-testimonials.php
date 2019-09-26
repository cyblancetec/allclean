<?php  
/**
* Plugin Name: Testimonials
* Description: Declares a plugin that will create a custom post type displaying Testimonials.
* Author: cyblance 
*/

//Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

require ( plugin_dir_path(__FILE__) . 'allclean-testimonials-cpt.php' );
require ( plugin_dir_path(__FILE__) . 'allclean-testimonials-fields.php' );
require ( plugin_dir_path(__FILE__) . 'allclean-testimonials-shortcode.php' );