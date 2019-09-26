<?php
function servicehome_shortcode($atts = null) {
	$str = '';	    
	$args = array(
        'post_type' 	 => 'service',
        'post_status'	 => 'publish',
        'posts_per_page' => -1,
	);
    $penn_station = new WP_Query( $args );	
    if( $penn_station->have_posts() ) :
        global $post;
        $i=1;       
        $str .='<div id="services-slider" class="owl-carousel owl-theme">';
        while( $penn_station->have_posts() ) : $penn_station->the_post();  
            $short_description = get_post_meta($post->ID,'short_description',true);
            $feature_image = get_the_post_thumbnail_url($post->ID,'large');
            $medium_image = get_the_post_thumbnail_url($post->ID,'medium');
            $thumbnail_image = get_the_post_thumbnail_url(get_the_ID(),'thumbnail');
            $description_count= strlen($short_description);
            if($description_count > 89){
                $description= substr($short_description, 0, 85).' ...';
            }else{
                $description= $short_description;
            }           
            $title_count= strlen(get_the_title());
            if($title_count > 23){
                $title = substr(get_the_title(), 0, 20).'...';
            }else{
                $title = get_the_title();
            }            
            $str .='<div class="item">';    
                $str .='<div class="hovereffect">';
                $str .='<a href="'.home_url().'/service/'.$post->post_name.'">';
                if($feature_image !=""){
                    $str .= '<img alt="'.get_the_title().'" src="'.home_url().'/timthumb.php?src='.$feature_image.'&w=443&h=365&zc=1" class="img-responsive" >';
                }else{
                    $str .= '<img alt="'.get_the_title().'" src="'.home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-services-listing.jpg&w=443&h=365&zc=1" class="img-responsive" >';
                }                   
                    $str .='<div class="sr_text">';
                        $str .='<h3>'.$title.'</h3>';                        
                        $str .='<p>'.$description.'</p>';
                    $str .='</div>';
                        $str .='<div class="overlay"></div>';                    
                $str .='</div>';
                $str .='</a>';
            $str .='</div>';   
        endwhile;           
        $str .='</div>';
     $str .='<div class="container sr-link">';
                    $str .='<a href="'.home_url().'/services/">Services <img alt="" src="'.OF_DIRECTORY.'/images/right-arrow.svg" width="34">';                         
                    $str .='</a>';
            $str .='</div>';
    else:			
    endif;
    wp_reset_postdata();
    return $str;
} 
add_shortcode( 'services-slider', 'servicehome_shortcode' );

function service_sidebar_shortcode($atts = null) {    
    $str = '';      
    $args = array(
        'post_type'      => 'service',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    );
    $penn_station = new WP_Query( $args ); 

    if( $penn_station->have_posts() ) :
        global $post;
        $str .='<div class="sidebar-left">';
            $str .='<h3>All services</h3>';
            $str .='<ul>';
                while( $penn_station->have_posts() ) : $penn_station->the_post(); 
                    if($atts['id'] == $post->ID){
                        $str .='<li><a class="active" href="'.home_url().'/service/'.$post->post_name.'">'.get_the_title().'</a></li>';
                    }else{
                       $str .='<li><a href="'.home_url().'/service/'.$post->post_name.'">'.get_the_title().'</a></li>'; 
                    }                    
                endwhile;
            $str .='</ul>';
        $str .='</div>';
    else:           
    endif;
    wp_reset_postdata();
    return $str;
}
add_shortcode( 'Sidebar-Services', 'service_sidebar_shortcode' );

function service_list_shortcode($atts = null) {    
    $str = '';      
    $args = array(
        'post_type'      => 'service',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    );
    $penn_station = new WP_Query( $args );
    if( $penn_station->have_posts() ) :
        global $post;      
            while( $penn_station->have_posts() ) : $penn_station->the_post();
                $feature_image = get_the_post_thumbnail_url($post->ID,'large');
                $str .='<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">';                
                    $str .='<div class="hovereffect">';
                        $str .='<a href="'.home_url().'/service/'.$post->post_name.'">';
                            if($feature_image !=""){
                                $str .='<img class="img-responsive" alt="'.get_the_title().'" src="'.home_url().'/timthumb.php?src='.$feature_image.'&w=443&h=365&zc=1">';
                            }else{
                                $str .='<img class="img-responsive" src="'.home_url().'/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder-services-listing.jpg&w=443&h=365&zc=1" alt="'.get_the_title().'" >';
                            }                            
                            $str .='<div class="sr_text">';
                                $str .='<h4>'.get_the_title().'</h4>';                        
                            $str .='</div>';
                        $str .='<div class="overlay"></div>';      
                        $str .='</a>';
                    $str .='</div>';               
                $str .='</div>';                     
            endwhile;          
    else:           
    endif;
    wp_reset_postdata();
    return $str;
}
add_shortcode( 'Services-List', 'service_list_shortcode' );
