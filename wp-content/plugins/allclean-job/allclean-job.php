<?php  
/**
* Plugin Name: All Clean Job
* Description: Declares a plugin that will create a custom post type displaying All Clean Job.
* Author: cyblance 
*/

//Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

require ( plugin_dir_path(__FILE__) . 'allclean-job-cpt.php' );
require ( plugin_dir_path(__FILE__) . 'allclean-job-shortcode.php' );