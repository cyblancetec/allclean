<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


get_header(); ?>

<section class="section">
    <div class="container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
    </div>
</section>

<?php
/* <section>
    <div class="container">
        <div class="row">
            <div id="services-slider" class="owl-carousel owl-theme">
            
                <div class="item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services.jpg" alt="">
                        <div class="sr_text">
                            <h3>Corporate cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed it. Consectetuer elit.</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>

                <div class="item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services.jpg" alt="">
                        <div class="sr_text">
                            <h3>Corporate cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed it. Consectetuer elit.</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>

                <div class="item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services.jpg" alt="">
                        <div class="sr_text">
                            <h3>Corporate cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed it. Consectetuer elit.</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>

                <div class="item">
                    <div class="hovereffect">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services.jpg" alt="">
                        <div class="sr_text">
                            <h3>Corporate cleaning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed it. Consectetuer elit.</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">            
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-team.jpg" alt="">
                    </div>
                    <div class="team-text">
                        <p class="pink">Rosemary Nethercott</p>
                        <p>Founder / Owner</p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

<!--<section class="testimonial-list-box">
    <div class="container">
        <div class="row">

            <div class="testimonial-row">
                <div class="col-lg-5 col-md-5 col-sm-5 wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                    <div class="test-img">
                         <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-testimonial.jpg" alt="">
                        <div class="test-img-2">
                            <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-testimonial-2.jpg" alt="">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">
                    <div class="testimonial-text">
                        <h2>Company name</h2>
                        <h4>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.”</h4>
                        <p>– Forename Surname, Company Position</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-row">               
                <div class="col-lg-7 wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                    <div class="testimonial-text">
                        <h2>Company name</h2>
                        <h4>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.”</h4>
                        <p>– Forename Surname, Company Position</p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-7 wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">
                    <div class="test-img">
                         <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-testimonial.jpg" alt="">
                        <div class="test-img-2">
                            <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-testimonial-2.jpg" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<section class="job-list-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                <div class="job_text">
                    <h4>Job title</h4> 
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. Adipiscing elit, sed diam nonummy nibh lorem ipsum dolor.</p>
                    <a href="#" class="gradiant-btn-r">Apply</a>                   
                </div>                   
            </div>
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                <div class="job_text">
                    <h4>Job title</h4> 
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. Adipiscing elit, sed diam nonummy nibh lorem ipsum dolor.</p>
                    <a href="#" class="gradiant-btn-r">Apply</a>                   
                </div>                   
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                <div class="job_text">
                    <h4>Job title</h4> 
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. Adipiscing elit, sed diam nonummy nibh lorem ipsum dolor.</p>
                    <a href="#" class="gradiant-btn-r">Apply</a>                   
                </div>                   
            </div>
           
        </div>
    </div>
</section>

<section class="services-list-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">                
                <div class="hovereffect">
                    <a href="index.php">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services-listing.jpg" alt="">
                        <div class="sr_text">
                            <h4>Corporate cleaning</h4>                        
                        </div>
                       <div class="overlay"></div>      
                    </a>
                </div>               
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                <div class="hovereffect">
                    <a href="index.php">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services-listing.jpg" alt="">
                        <div class="sr_text">
                            <h4>Corporate cleaning</h4>                        
                        </div>
                       <div class="overlay"></div>      
                    </a>
                </div>    
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                <div class="hovereffect">
                    <a href="index.php">
                        <img class="img-responsive" src="http://192.168.1.108/2019/allclean/wp-content/themes/all-clean/images/placeholder-services-listing.jpg" alt="">
                        <div class="sr_text">
                            <h4>Corporate cleaning</h4>                        
                        </div>
                       <div class="overlay"></div>      
                    </a>
                </div>    
            </div>           
        </div>
    </div>
</section> */ ?>

<?php get_footer(); ?>
