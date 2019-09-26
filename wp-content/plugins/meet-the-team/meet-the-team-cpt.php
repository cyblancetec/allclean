<?php
function allclean_create_meet_the_team() {
	$singular = 'Meet the team';
	$plural = 'All Meet the team';
	$labels = array(
		'menu_name'			 => 'Meet the team',
		'name' 				 => $plural,
		'all_items'			 => $plural,
		'singular_name' 	 => $singular,
		'add_new' 			 => 'Add New',
		'add_new_item' 		 => 'Add New ' . $singular,
		'edit' 				 => 'Edit',
		'edit_item' 		 => 'Edit ' . $singular,
		'new_item' 			 => 'New ' . $singular,
		'view' 				 => 'View ' . $singular,
		'view_item' 		 => 'View ' . $singular,
		'search_term' 	     => 'Search ' . $plural,
		'parent' 			 => 'Parent ' . $singular, 
		'not_found' 		 => 'No ' . $plural . ' found',
		'not_found_in_trash' => 'No ' . $plural . ' in Trash'
	);
	$args = array(
		'labels'         	  => $labels,
		'public'		 	  => true,
		'public_queryable' 	  => true,
		'exclude_from_search' => false,
		'show_in_nav_menu' 	  => true,
		'show_ui' 			  => true,
		'show_in_menu' 		  => true,
		'show_in_admin_bar'   => true,
		'menu_position' 	  => 10,
		'menu_icon' 		  => 'dashicons-groups',
		'can_export' 		  => true,
		'delete_with_user' 	  => false,
		'hierarchical' 		  => false,
		'has_archive' 		  => true,
		'query_var' 		  => true,
		'capability_type' 	  => 'post',
		'map_meta_cap' 		  => true,
		//'capabilities'	  => array(),
		'rewrite' 			  => array( 
			'slug' => 'meet_the_team', 
			'with_front' => true,
			'pages' => true,
			'feeds' => false,
		),
		'supports' 			  => array( 
			'title', 
			//'editor',			
			'thumbnail',			
		),
	);
	register_post_type( 'meet_the_team', $args );
}
add_action( 'init', 'allclean_create_meet_the_team' );