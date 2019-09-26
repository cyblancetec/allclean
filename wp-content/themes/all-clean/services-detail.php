<?php
/**
 * Template Name: Services Detail Page
 *
 */
get_header();
?>

    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    ?>
<section class="sr-detail-banner">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <h4>Our services</h4>
                <h2 class="vc_custom_heading pink">Service type title</h2>
                <p>Samll opener about the service uis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  </p>
            </div>
        </div>
    </div>
</section>
<section class="sr-detail-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar-left">
                    <h3>All services</h3>
                    <ul>
                         <li><a href="#">Service type</a></li>
                         <li><a href="#">Service type</a></li>
                         <li><a class="active" href="#">Service type</a></li>
                         <li><a href="#">Service type</a></li>
                         <li><a href="#">Service type</a></li>
                         <li><a href="#">Service type</a></li>
                         <li><a href="#">Service type</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div class="sidebar-right">
                     <h2 class="vc_custom_heading pink">Service type title</h2>
                     <div class="detail-img"><img src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services-detail.jpg" alt=""></div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                    <p>Ut efficitur neque eu leo efficitur luctus. In at lobortis augue. In vestibulum bibendum ante eu tincidunt. Proin feugiat lacinia augue eu aliquet. Aenean ultricies ex libero, placerat commodo ex dictum et. Nullam id ultrices lorem. Etiam at elit interdum, venenatis velit vitae, blandit urna. Praesent ac orci placerat, suscipit lectus at, consequat nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In cursus fringilla turpis, a feugiat eros rhoncus nec. Morbi molestie, magna vel viverra blandit, ligula arcu auctor elit, nec vulputate ligula lacus quis nisi. Nam enim tortor, lacinia sit amet ullamcorper id, faucibus vel turpis.</p>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                </div>
            </div>
            
        </div>
    </div>
</section>
<?php get_footer(); ?>
