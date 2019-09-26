<?php
function allcleanjob_shortcode($atts = null) {
	$str = '';	    
	$args = array(
        'post_type' 	 => 'allcleanjob',
        'post_status'	 => 'publish',
        'posts_per_page' => -1,
	);
    $penn_station = new WP_Query( $args );	
    if( $penn_station->have_posts() ) :
        global $post;     
    $str .='<div id="job-slider" class="owl-carousel grid">';  
        while( $penn_station->have_posts() ) : $penn_station->the_post();       
       
            $str .='<div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">';
                $str .='<div class="job_text">';
                    $str .='<h4>'.get_the_title().'</h4>';
                    $str .= wpautop(get_the_content());
                     $str .='<input type="hidden" id="apply_job_'.$post->ID.'" value="'.get_the_title().'">';  
                    $str .='<a href="javascript:void(0);" class="gradiant-btn-r" onclick=apply_job('.$post->ID.')>Apply</a>';                   
                $str .='</div>';                   
            $str .='</div>';
       
        endwhile;      
     $str .='</div>';  
    else:			
    endif; ?>
    <script>
        function apply_job(id){
            var name = jQuery( "#apply_job_"+id ).val();
            jQuery( "#allcleanjob_select" ).val(name);
            var HeaderHi = jQuery('#topbar').innerHeight();
            jQuery('html, body').animate({
            scrollTop: jQuery('#apply-now-job').offset().top - HeaderHi }, 'slow');
        }
    </script>
    <?php wp_reset_postdata();
    return $str;
} 
add_shortcode( 'job-list', 'allcleanjob_shortcode' );