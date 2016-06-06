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
		        <!-- slider animation -->
		        <ul class="keyframe-post-fader">
		                <li></li>
		                <li></li>
		                <li></li>
		        </ul>
		        <div class="v-center">
		                <a onmousedown="tick()" onmouseover="pop()" href="<?= esc_url(home_url('/')); ?>">
		                        <img class="scroll-down" src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-whitealpha-icon-600x600px.png" />
		                </a>
		                <h1><?php bloginfo('name'); ?></h1>
		      		<h3 class="wow zoomIn" data-wow-delay="2s">Blog Entry</h3>
		      		<h4 class="entry-title"><?php the_title(); ?></h4>
				<?php get_template_part('templates/entry-meta'); ?>
		                <nav class="nav-primary">
		                        <?php
		                                if (has_nav_menu('primary_navigation')) :
		                                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
		                                endif;
		                        ?>
		                </nav>
		        </div>
		</header>
		<div class="entry-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
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
					<div class="col-md-8 col-md-offset-2">
						<?php get_template_part('templates/news-share'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="author_bio">
						        <h4><?php _e( 'Author Biography:', 'capoeirastudio'); ?></h4>
						        <div class="title-divider"></div>
						        <p><?php the_author_meta( 'description' , $capoeirastudio_uid ); ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
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
