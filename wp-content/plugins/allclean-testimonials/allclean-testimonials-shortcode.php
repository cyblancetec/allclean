<?php
function testimonials_shortcode($atts = null) {
	$str = '';    
	$args = array(
        'post_type' 	 => 'testimonials',
        'post_status'	 => 'publish',		
        'posts_per_page' => -1,
	);
	$penn_station = new WP_Query( $args );	
	if( $penn_station->have_posts() ) :
		global $post;
		$testimonial_box=1;       
         while( $penn_station->have_posts() ) : $penn_station->the_post();  
            $testimonials_name = get_post_meta($post->ID,'testimonials_name',true);
            $images_id_3 = get_post_meta(get_the_ID(), 'testimonials_feature-image-2_thumbnail_id', true);
            $attachment3 = wp_get_attachment_url($images_id_3); 
            if($attachment3 !=""){
               $thumbnail_images =  home_url().'/timthumb.php?src='.$attachment3.'&w=247&h=116&zc=1';
            }else{
                $thumbnail_images =  home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-testimonial-2.jpg&w=247&h=116&zc=1';
            }  
            $feature_image = get_the_post_thumbnail_url(get_the_ID(),'full');
            if($feature_image !=""){
                $features_images = home_url().'/timthumb.php?src='.$feature_image.'&w=599&h=498&zc=1';
            }else{
                $features_images = home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-testimonial.jpg&w=599&h=498&zc=1';
            }
            if($testimonial_box == 1){                 
                $str .='<div class="testimonial-row row">';
                    $str .='<div class="col-lg-5 col-md-5 col-sm-5 wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">';
                        $str .='<div class="test-img">';
                             $str .='<img class="img-responsive" src="'.$features_images.'" alt="'.get_the_title().'">';
                            $str .='<div class="test-img-2">';
                                $str .='<img class="img-responsive" src="'.$thumbnail_images.'" alt="'.get_the_title().'">';
                            $str .='</div>';
                        $str .='</div>';
                        
                    $str .='</div>';
                    $str .='<div class="col-lg-7 col-md-7 col-sm-7 wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">';
                        $str .='<div class="testimonial-text">';
                            $str .='<h2>'.get_the_title().'</h2>';
                            $str .='<h4>'.get_the_content().'</h4>';
                            $str .='<p>'.$testimonials_name.'</p>';
                        $str .='</div>';
                    $str .='</div>';
                $str .='</div>';
                $testimonial_box=2;
            }else{              
              $str .='<div class="testimonial-row row">';               
                $str .='<div class="col-lg-7 col-md-7 col-sm-7  wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">';
                    $str .='<div class="testimonial-text">';
                        $str .='<h2>'.get_the_title().'</h2>';
                        $str .='<h4>'.get_the_content().'</h4>';
                        $str .='<p>'.$testimonials_name.'</p>';
                    $str .='</div>';
                $str .='</div>';
                $str .='<div class="col-lg-5 col-md-5 col-sm-5 wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">';
                    $str .='<div class="test-img">';
                         $str .='<img class="img-responsive" src="'.$features_images.'" alt="'.get_the_title().'">';
                        $str .='<div class="test-img-2">';
                            $str .='<img class="img-responsive" src="'.$thumbnail_images.'" alt="'.get_the_title().'">';
                        $str .='</div>';
                    $str .='</div>';                    
                $str .='</div>';
            $str .='</div>'; 
             $testimonial_box=1;
            }                     
        endwhile;       
    else:			
	endif;
	wp_reset_postdata();
	return $str;
}
add_shortcode( 'TESTIMONIALS', 'testimonials_shortcode' );

function services_testimonials_shortcode($atts = null) {
    $str='';
    $args = array(
        'post_type'      => 'testimonials',
        'post_status'    => 'publish',      
        'posts_per_page' => 1,
        'orderby'        => 'rand',
    );
    $penn_station = new WP_Query( $args );  
    if( $penn_station->have_posts() ) :
         global $post;              
         while( $penn_station->have_posts() ) : $penn_station->the_post();  
            $testimonials_name = get_post_meta($post->ID,'testimonials_name',true);
            $images_id_3 = get_post_meta(get_the_ID(), 'testimonials_feature-image-2_thumbnail_id', true);
            $attachment3 = wp_get_attachment_url($images_id_3); 
            if($attachment3 !=""){
               $thumbnail_images =  home_url().'/timthumb.php?src='.$attachment3.'&w=247&h=116&zc=1';
            }else{
                $thumbnail_images =  home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-testimonial-2.jpg&w=247&h=116&zc=1';
            }  
            $feature_image = get_the_post_thumbnail_url(get_the_ID(),'full');
            if($feature_image !=""){
                $features_images = home_url().'/timthumb.php?src='.$feature_image.'&w=599&h=498&zc=1';
            }else{
                $features_images = home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-testimonial.jpg&w=599&h=498&zc=1';
            }                        
            $str .='<div class="testimonial-row">';
                $str .='<div class="col-lg-5 col-md-5 col-sm-5 wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">';
                    $str .='<div class="test-img">';
                         $str .='<img class="img-responsive" src="'.$features_images.'" alt="'.get_the_title().'">';
                        $str .='<div class="test-img-2">';
                            $str .='<img class="img-responsive" src="'.$thumbnail_images.'" alt="'.get_the_title().'">';
                        $str .='</div>';
                    $str .='</div>';
                    
                $str .='</div>';
                $str .='<div class="col-lg-7 col-md-7 col-sm-7 wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">';
                    $str .='<div class="testimonial-text">';
                        $str .='<h2>'.get_the_title().'</h2>';
                        $str .='<h4>'.get_the_content().'</h4>';
                        $str .='<p>'.$testimonials_name.'</p>';
                    $str .='</div>';
                $str .='</div>';
            $str .='</div>';               
                           
        endwhile;       
    else:           
    endif;
    wp_reset_postdata();
    return $str;
}

add_shortcode( 'TESTIMONIALS-ONE', 'services_testimonials_shortcode' );