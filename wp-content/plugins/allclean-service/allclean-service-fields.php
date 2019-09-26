<?php
function service_add_custom_metabox() {
	add_meta_box(
		'service_meta',
		__( 'Service details' ),
		'service_meta_callback',
		'service',
		'normal',
		'core'
	);
}
add_action( 'add_meta_boxes', 'service_add_custom_metabox' );
function service_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'gpvideo_nonce' );
	$gpvideo_stored_meta = get_post_meta( $post->ID ); ?>
	<div>
		<div class="meta_row">
			<div class="meta-th">
				<label for="tag_name" class="gpvideo-row-title">Tag Name</label>
			</div>
			<div class="meta-td">
				<input type="text" name="tag_name" id="tag_name" style="width: 100%" value="<?php if ( $gpvideo_stored_meta['tag_name'] ) echo $gpvideo_stored_meta['tag_name'][0]; ?>"> 
			</div>
		</div>
		<div class="meta_row">
			<div class="meta-th">
				<label for="short_description" class="gpvideo-row-title">Short Description</label>
			</div>
			<div class="meta-td">
				<textarea name="short_description" id="short_description" style="width: 100%"><?php if ( $gpvideo_stored_meta['short_description'] ) echo $gpvideo_stored_meta['short_description'][0]; ?></textarea>				
			</div>
		</div>
	</div>		
	<?php
}
function service_meta_save( $post_id ) {
	// Check save status	
	if ( isset( $_POST['tag_name'] ) ) {
		update_post_meta( $post_id, 'tag_name', $_POST['tag_name'] );
	}
	if ( isset( $_POST['short_description'] ) ) {
		update_post_meta( $post_id, 'short_description', $_POST['short_description'] );
	}
}
add_action( 'save_post', 'service_meta_save' );