<?php
function allclean_create_service() {
	$singular = 'All Clean Service';
	$plural = 'All Clean Service';
	$labels = array(
		'menu_name'			 => 'All Clean Service',
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
			'slug' => 'service', 
			'with_front' => true,
			'pages' => true,
			'feeds' => false,
		),
		'supports' 			  => array( 
			'title', 
			'editor',			
			'thumbnail',			
		),
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'allclean_create_service' );