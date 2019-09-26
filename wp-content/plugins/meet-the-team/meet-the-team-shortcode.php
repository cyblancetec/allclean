<?php
function meet_the_team_shortcode($atts = null) {
	$str = '';	   
	$args = array(
        'post_type' 	 => 'meet_the_team',
        'post_status'	 => 'publish',
        'posts_per_page' => -1,
	);
	$penn_station = new WP_Query( $args );	
	if( $penn_station->have_posts() ) :
		global $post;
         $str .='<div id="meetteam-slider" class="owl-carousel">';
         while( $penn_station->have_posts() ) : $penn_station->the_post();  
         $founder_name = get_post_meta($post->ID,'founder_name',true); 
         $owner_name = get_post_meta($post->ID,'owner_name',true);         
         $feature_image = get_the_post_thumbnail_url($post->ID,'large');
         $image = get_the_post_thumbnail_url($post->ID,'medium');
        
        $str .='<div class="item col-lg-3 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">';
            $str .='<div class="team">';
                $str .='<div class="team-img">';
                    //$str .='<img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">';
                if($feature_image !=""){
                    $str .= '<img alt="'.get_the_title().'" src="'.home_url().'/timthumb.php?src='.$feature_image.'&w=324&h=431&zc=1" class="img-responsive" >';
                }else{
                    $str .= '<img alt="'.get_the_title().'" src="'.home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-team.jpg&w=324&h=431&zc=1" class="img-responsive" >';
                } 
                $str .='</div>';
                $str .='<div class="team-text">';
                    $str .='<p class="pink">'.get_the_title().'</p>';
                    $str .='<p>'.$founder_name.' / '.$owner_name.'</p>';
                $str .='</div>';
            $str .='</div>';                
        $str .='</div>';         
        endwhile;      
          $str .='</div>';
	else:			
	endif;
	wp_reset_postdata();
	return $str;
}
add_shortcode( 'Meet-The-Team', 'meet_the_team_shortcode' );