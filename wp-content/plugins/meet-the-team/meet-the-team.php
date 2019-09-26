<?php  
/**
* Plugin Name: Meet the team
* Description: Declares a plugin that will create a custom post type displaying Meet the team.
* Author: cyblance 
*/

//Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

require ( plugin_dir_path(__FILE__) . 'meet-the-team-cpt.php' );
require ( plugin_dir_path(__FILE__) . 'meet-the-team-fields.php' );
require ( plugin_dir_path(__FILE__) . 'meet-the-team-shortcode.php' );