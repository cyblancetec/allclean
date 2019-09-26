<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$post_197 = get_post(197); 

$featured_img_url = get_the_post_thumbnail_url($post_197->ID,'full');
?>
<div class="th-innerpagebanner th-haslayout th-parallaximg" style=" background: url('<?php echo $featured_img_url; ?>')no-repeat top center;  background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="th-pagetitle">
					<h1><?php echo $post_197->post_title; ?></h1>
				</div>		
			</div>
		</div>
	</div>
</div>
<section class="blog-detail p80 shadow" id="post-<?php the_ID(); ?>">
	<div class="container">	
		<div class="col-lg-8 col-md-8">
			<div class="blog_description">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php  if ( has_excerpt( $post->ID ) ) { the_excerpt('<p>', '</p>'); ?><?php  } ?>
				<div class="social-blog">
					<?php
                    $post_description = ST4_get_FB_description($post);
					$post_featured_image = ST4_get_FB_image($post->ID);
                    ?>
					Share:
					<a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&t=<?php echo urlencode($post->post_title); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>

					<a href="http://twitter.com/share?text=<?php echo urlencode($post->post_title); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					<!--<a href="facebook.com" target="_blank">
						<i class="fa fa-facebook-square"></i>
					</a>
					<a href="twitter.com" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>-->
				</div>								
				<!-- <img src="<?=OF_DIRECTORY?>/images/news-listing.jpg" width="100%"> -->
				<?php if(has_post_thumbnail()) {
					twentysixteen_post_thumbnail();
				} else {
					echo'<img src="'.OF_DIRECTORY.'/lib/timthumb.php?src='.OF_DIRECTORY.'/images/placeholder.jpg&w=650&h=325&cz=1" width="100%">';
				} ?>
				<br/><br/>
				
				<?php the_content(); 
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

				if ( '' !== get_the_author_meta( 'description' ) ) {
					get_template_part( 'template-parts/biography' );
				}
				?>
				
				<br/><br/><br/>
				<!--<a href="#" class="readmore bg_orange pull-left"><i class="fa fa-angle-left"></i> previous article</a>
				<a href="#" class="readmore bg_orange pull-right">NEXT ARTICLE <i class="fa fa-angle-right"></i></a>-->
				<?php 
				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation( array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
					) );
				} elseif ( is_singular( 'post' ) ) {
					
					$prev_post = get_previous_post();
					$next_post = get_next_post();					
					
					if($next_post) {
						$n_disableclass="";
						$n_get_permalink=get_permalink($next_post->ID);
						$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
						echo "\t".'<a rel="next" href="'.$n_get_permalink.'" title="'.$next_title.'" class="readmore bg_orange pull-left">'.__('<i class="fa fa-angle-left"></i> PREVIOUS ARTICLE').'</a>' . "\n";
					}
					if($prev_post) {
						$p_disableclass="";
						$p_get_permalink=get_permalink($prev_post->ID);
						$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
						echo "\t".'<a rel="prev" href="'.$p_get_permalink.'" title="'. $prev_title.'" class="readmore bg_orange pull-right">'.__('NEXT ARTICLE <i class="fa fa-angle-right"></i>').'</a>' . "\n";
					}
					
				}
				?>
			</div>
		</div><!--col-lg-8 end-->
		<div class="col-lg-4 col-md-4">
			<div class="right_sidebar">
				<?php echo do_shortcode( '[downloadpdfs_list]' ); ?>								
			</div>
		</div>
	</div>
</section>
<div id="INQUIRENOW" class="InquireNewsPage dnd_section_dd section_start_here bg_cyan  p70 section_with_header">
	<div class="container">	
		<div class="form_container">
			<header><h3 class="white">Inquire to Own an Office Evolution</h3></header>
			<?php echo do_shortcode( '[contact-form-7 id="16" title="Inquire"]' ); ?>
		</div>
	</div>
</div>