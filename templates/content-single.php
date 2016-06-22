<?php
/**
 * The template for displaying blog content
 *
 * @package Capoeira Studio
 * @author Quilombola Engineering
 */

global $wp_query;

$capoeirastudio_post_id = $wp_query->get_queried_object_id();
$capoeirastudio_blog_detail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'capoeirastudio-blog-detail-thumbnail' ) );
$capoeirastudio_uid = get_current_user_id();

$capoeirastudio_attr = array(
        'src'   => $capoeirastudio_blog_detail_url,
        'class' => "img-responsive",
        'alt'   => get_the_title()
);

while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header class="post-header">
		        <!-- post header -->
		        <?php $portrait = get_field('portrait'); ?>
		        <?php $landscape = get_field('landscape'); ?>
		        <?php $youtube = get_field('youtube'); ?>
		        <?php $source = get_field('source'); ?>
		        <div id="background" class="post-background">
				<?php if( $portrait ): ?><img id="featured-portrait" width="1px" height="1px" src="<?php echo $portrait; ?>"><?php endif; ?>
				<?php if( $landscape ): ?><img id="featured-landscape" width="1px" height="1px" src="<?php echo $landscape; ?>"><?php endif; ?>
			</div>
		        <div class="v-center">
				<div class="top">
		                	<a onmousedown="tick()" onmouseover="pop()" href="#blog-entry">
		                        	<img id="header-icon" class="wow rotateInUpRight" src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-whitealpha-icon-600x600px.png" />
		                	</a>
		                	<h1 class="wow slideInRight"><?php bloginfo('name'); ?> </h1>
					<hr class="primary front-page wow pulse" data-wow-delay="3s">
		        	</div>
		        	<div class="bottom">
		      			<h4 class="entry-title"><?php the_title(); ?><br> ( Author: <?php echo $source; ?> )</h4>
		      			<h3 class="wow pulse" data-wow-delay="2s">Blog Entry</h3>
					<?php get_template_part('templates/entry-meta'); ?>
		                	<nav class="nav-primary">
		                        	<?php
		                                	if (has_nav_menu('primary_navigation')) :
		                                        	wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
		                                	endif;
		                        	?>
		                	</nav>
		        	</div>
		        </div>
		</header>
		<div id="blog-entry" class="entry-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
			                       	<div class="postpagenav">
                              				<ul>
                                        			<?php if (is_attachment()) {
                                                   			previous_image_link( '<li class="prev_page">'.__('&lsaquo;','capoeirastudio').'&nbsp;&nbsp;%link </li>','%title',false);
                                                   			next_image_link( '<li class="next_page">%link&nbsp;&nbsp;'.__('&rsaquo;','capoeirastudio').' </li>','%title',false);
                            					} else {
                                                    			previous_post_link( '<li class="prev_page">'.__('&lsaquo;','capoeirastudio').'&nbsp;&nbsp;%link </li>','Previous',false);
                                                   			next_post_link( '<li class="next_page">%link&nbsp;&nbsp;'.__('&rsaquo;','capoeirastudio').' </li>','Next',false);
                                        			} ?>
                                  			</ul>
                                		</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php get_template_part('templates/news-share'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
                                    		<div class="author-avatar">
                                        		<?php echo get_avatar( get_the_author_meta( 'ID' ), 70 ); ?>
                                    		</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="author_bio">
						        <h4>Author Biography: <span class="author-name"><?php the_author_link(); ?></span></h4>
						        <div class="title-divider"></div>
						        <p><?php the_author_meta( 'description' , $capoeirastudio_uid ); ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'samba-capoeira' ), 'after' => '</div>' ) ); ?>
						<?php posts_nav_link(); ?>
	    					<?php comments_template('/templates/comments.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
		</footer>
	</article>
<?php endwhile; ?>
