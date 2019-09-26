<?php
function testimonials_add_custom_metabox() {
	add_meta_box(
		'testimonials_meta',
		__( 'Testimonial details' ),
		'testimonials_meta_callback',
		'testimonials',
		'normal',
		'core'
	);
}
add_action( 'add_meta_boxes', 'testimonials_add_custom_metabox' );
function testimonials_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'gpvideo_nonce' );
	$gpvideo_stored_meta = get_post_meta( $post->ID ); ?>
	<div>		
		<div class="meta_row">
			<div class="meta-th">
				<label for="testimonials_name" class="gpvideo-row-title">Name</label>
			</div>
			<div class="meta-td">
				<input type="text" name="testimonials_name" id="testimonials_name" style="width: 100%" value="<?php if ( $gpvideo_stored_meta['testimonials_name'] ) echo $gpvideo_stored_meta['testimonials_name'][0]; ?>"> 
			</div>
		</div>
	</div>		
	<?php
}
function testimonials_meta_save( $post_id ) {
	// Check save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['gpvideo_nonce'] ) && wp_verify_nonce( $_POST['gpvideo_nonce'], basename(__FILE__) ) ) ? 'true' : false; 

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}	
	if ( isset( $_POST['testimonials_name'] ) ) {
		update_post_meta( $post_id, 'testimonials_name', $_POST['testimonials_name'] );
	}
}
add_action( 'save_post', 'testimonials_meta_save' );