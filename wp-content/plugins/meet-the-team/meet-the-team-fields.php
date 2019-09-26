<?php
function meet_the_team_add_custom_metabox() {
	add_meta_box(
		'meet_the_team_meta',
		__( 'Meet the team details' ),
		'meet_the_team_meta_callback',
		'meet_the_team',
		'normal',
		'core'
	);
}
add_action( 'add_meta_boxes', 'meet_the_team_add_custom_metabox' );
function meet_the_team_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'gpvideo_nonce' );
	$gpvideo_stored_meta = get_post_meta( $post->ID ); ?>
	<div>
		<div class="meta_row">
			<div class="meta-th">
				<label for="founder_name" class="gpvideo-row-title">Founder Name</label>
			</div>
			<div class="meta-td">
				<input type="text" name="founder_name" id="founder_name" style="width: 100%" value="<?php if ( $gpvideo_stored_meta['founder_name'] ) echo $gpvideo_stored_meta['founder_name'][0]; ?>"> 
			</div>
		</div>
		<div class="meta_row">
			<div class="meta-th">
				<label for="owner_name" class="gpvideo-row-title">Owner Name</label>
			</div>
			<div class="meta-td">
				<input type="text" name="owner_name" id="owner_name" style="width: 100%" value="<?php if ( $gpvideo_stored_meta['owner_name'] ) echo $gpvideo_stored_meta['owner_name'][0]; ?>"> 
			</div>
		</div>
	</div>		
	<?php
}
function meet_the_team_meta_save( $post_id ) {
	// Check save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['gpvideo_nonce'] ) && wp_verify_nonce( $_POST['gpvideo_nonce'], basename(__FILE__) ) ) ? 'true' : false; 

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
	if ( isset( $_POST['founder_name'] ) ) {
		update_post_meta( $post_id, 'founder_name', $_POST['founder_name'] );
	}
	if ( isset( $_POST['owner_name'] ) ) {
		update_post_meta( $post_id, 'owner_name', $_POST['owner_name'] );
	}
}
add_action( 'save_post', 'meet_the_team_meta_save' );