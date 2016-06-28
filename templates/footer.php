<!-- Footer -->
<footer id="sitemap" class="section-footer viewport">
        <div class="container-fluid viewport-center">
		<div class="second-layer">
			<div class="row">
		                <div class="col-md-3">
		                        <h2 class="wow bounceIn" data-wow-delay=".1s">Site <strong>Map</strong></h2>
		                        <p><a href="<?php echo get_site_url(); ?>">Home</a></p>
		                        <p><a href="<?php echo get_site_url(); ?>/blog">Blog</a></p>
		                        <p><a href="<?php echo get_site_url(); ?>/faq">FAQ</a></p>
		                </div>
		                <div class="col-md-3">
		                        <h2 class="wow bounceIn" data-wow-delay=".1s">Recent <strong>Posts</strong></h2>
					<?php
						$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
						}
					?>
		                </div>
		                <div class="col-md-3">
		                        <h2 class="wow bounceIn" data-wow-delay=".1s">Site <strong>Admin</strong></h2>
		                        <p><a href="/wp-admin">Log In</a></p>
		                        <p><a href="/logout">Log Out</a></p>
		                </div>
		                <div class="col-md-3">
		                        <h2 class="wow bounceIn" data-wow-delay=".1s">My <strong>NEWSLETTER</strong></h2>
		                        <p><a href="http://eepurl.com/b3Y1Hz">Subscribe</a></p>
		                        <p><a href="http://capoeirastudio.us13.list-manage.com/unsubscribe?u=3db435ce999565383d510d2cd&id=64f83024b3">Unsubscribe</a></p>
		                </div>
	                </div>
			<div class="row">
	                        <div class="col-md-4 col-md-offset-4 text-center">
	                                <h5 id="copyright" class="notice">Copyright (c) 2016 <strong>Better Studios</strong>. All Rights <strong>Reserved</strong>.</h5>
	                                <hr id="primary">
	                                </a>
	                        </div>
	                </div>
        	</div>
        </div>
</footer>
