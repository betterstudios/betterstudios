<!-- Footer -->
<footer id="sitemap" class="section-footer">
        <div class="container-fluid viewport">
		<div class="row viewport-center">
	                <div class="col-md-4">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">Site <strong>Map</strong></h2>
	                        <p><a href="<?php echo get_site_url(); ?>">Home</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/blog">Blog</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/faq">FAQ</a></p>
	                </div>
	                <div class="col-md-4">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">Recent <strong>Posts</strong></h2>
				<?php
					$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
					}
				?>
	                </div>
	                <div class="col-md-4">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">Site <strong>Admin</strong></h2>
	                        <p><a href="/wp-admin">Log In</a></p>
	                        <p><a href="/logout">Log Out</a></p>
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">My <strong>NEWSLETTER</strong></h2>
	                        <p><a href="http://eepurl.com/b3Y1Hz">Subscribe</a></p>
	                        <p><a href="http://capoeirastudio.us13.list-manage.com/unsubscribe?u=3db435ce999565383d510d2cd&id=64f83024b3">Unsubscribe</a></p>
	                </div>
                </div>
        </div>
</footer>
