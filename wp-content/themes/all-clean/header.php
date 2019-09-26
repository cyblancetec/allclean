<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
$seconds_to_cache =  60 * 60 * 24 * 3;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Cache-Control: must-revalidate");
header("Expires: $ts");
header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");	
header('Content-Type: text/html; charset=utf-8');	
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Accept-Encoding: gzip");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<!--<meta name="robots" content="noindex"/>-->
<meta name="description" content="">
<link rel=”preload” href="http://www." as="image">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<div id="main_wrapper">
		
       <div id="topbar" class="topbar">
            <div class="container">
                <a href="tel:01202 658 064">01202 658 064 </a>
                <a href="mailto:hello@allclean247.com" target="_top">hello@allclean247.com</a>
            </div>
        </div>
		<header id="header" class="header" data-vc-full-width="true" data-vc-full-width-init="true">
            <div id="mobile-menu" class="section mobile-menu">           
                <div class="w-col-12 mobile-nav">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <nav class="main-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'primary-menu',
                                 ) );
                            ?>
                        </nav><!-- .main-navigation -->
                    <?php endif; ?>
                </div>
                <div class="call-to">
                    <button class="gradiant-btn-r" onclick="download_popup()">Get a quote</button>
                </div>
            </div>
            <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                  <a href="<?php echo site_url(); ?>">
                      <span  class="screen-reader-text">logo</span>                   
                      <img src="<?=OF_DIRECTORY?>/images/logo.svg" alt="logo"/>
                  </a>
                </div>
                <div class="right_part">                
                <div id="navbar">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'primary-menu',
                                 ) );
                            ?>
                        </nav><!-- .main-navigation -->
                    <?php endif; ?>
                </div>	
                <div class="call-to">
                    <button class="gradiant-btn-r" onclick="download_popup()">Get a quote</button>
                </div>
            </div>
                <div id="Mobile_nav" class="Mobile_nav">
                    <div class="navicon-line top"></div>
                    <div class="navicon-line center"></div>
                    <div class="navicon-line bottom"></div>
                </div>	
            </div>
           </div>
         		
		</header>
