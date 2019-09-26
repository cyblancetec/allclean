<?php get_header();
    $tag_name = get_post_meta(get_the_ID(),'tag_name',true); 
    $short_description = get_post_meta(get_the_ID(),'short_description',true);   
    $research_image = get_the_post_thumbnail_url(get_the_ID(),'full');  ?> 
<section class="sr-detail-banner">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <h4 class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp"><?php echo $tag_name; ?></h4>
                <h2 class="vc_custom_heading pink wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp"><?php echo get_the_title(); ?></h2>
                <p class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp"><?php echo $short_description; ?></p>
            </div>
        </div>
    </div>
</section>
<section class="sr-detail-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">
                <?php echo do_shortcode('[Sidebar-Services id="'.get_the_ID().'" ]') ?>
            </div>
            
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="sidebar-right">
                    <h2 class="vc_custom_heading pink"><?php echo get_the_title(); ?></h2>
                    <div class="detail-img">
                        <?php if($research_image !=""){ ?>
                            <img alt="<?php echo get_the_title() ?>" src="<?php echo home_url() ?>/timthumb.php?src=<?php echo $research_image ?>&w=1044&h=554&zc=1" class="img-responsive" >
                        <?php }else{ ?>
                            <img alt="<?php echo get_the_title() ?>" src="<?php echo home_url() ?>/timthumb.php?src=<?php echo home_url() ?>/wp-content/themes/all-clean/images/placeholder-services-detail.jpg&w=1044&h=554&zc=1" class="img-responsive" >
                        <?php } ?>                       
                    </div>
                    <?php echo wpautop(get_the_content()); ?>
                </div>
            </div>            
        </div>
    </div>
</section>
<section class="services-testimonial">
    <div class="container">
        <div class="row">
            <?php echo do_shortcode('[TESTIMONIALS-ONE]') ?>     
        </div>
        <div class="sr-link p-t-30"><a href="<?php echo home_url() ?>/testimonials/">Testimonials <img alt="" src="<?php echo home_url() ?>/wp-content/themes/all-clean/images/right-arrow.png"></a></div>
    </div>
</section>
<section class="services-detail-page-slider">
    <div class="row">
        <div class="col-lg-12">
            <?php echo do_shortcode('[services-slider]') ?>
        </div>        
    </div>
    <div class="vc_row wpb_row vc_row-fluid bubble">
        <div class="services-2">
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
            <div class="shape shape5"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
