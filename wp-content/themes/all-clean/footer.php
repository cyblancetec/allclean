<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>	<!-- .site-content -->
	<footer class="footer ">		
		<div class="footer-widget-box">
			<div class="container">	
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                        <?php dynamic_sidebar( 'footer-logo' ); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 ">
                        <?php dynamic_sidebar( 'footer-contact' ); ?>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-3 ">
                        <?php dynamic_sidebar( 'footer-social' ); ?>
                    </div>
                </div>
			</div>
		</div>	
		<div class="copyright">
			<div class="container">
				<?php dynamic_sidebar( 'footer-copyright' ); ?>
			</div>
		</div>	
	</footer>		
</div>

<div id="dow_button" class="contact_us contact-form section_start_here" style="display:none;">
    <span class="b-close"></span>    
    <?php echo do_shortcode('[contact-form-7 id="271" title="Get a quote"]'); ?>    
</div>

<?php wp_footer(); ?>
<script>
  jQuery(function(){
    jQuery('.btn-outline .vc_general.vc_btn3 ').wrapInner( "<span></span>" );
    jQuery('.vc_btn3-style-outline').wrap( "<div class='btn-outline-wrap success'></div>" );
    jQuery('.btn-outline .vc_general.vc_btn3').append('<i class="check-icon"></i>');
  });
</body>
</html>
