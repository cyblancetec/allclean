<?php  
/**
* Plugin Name: All Clean Service
* Description: Declares a plugin that will create a custom post type displaying All Clean Service.
* Author: cyblance 
*/

//Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

require ( plugin_dir_path(__FILE__) . 'allclean-service-cpt.php' );
require ( plugin_dir_path(__FILE__) . 'allclean-service-fields.php' );
require ( plugin_dir_path(__FILE__) . 'allclean-service-shortcode.php' );