<section id="blog-widgets" class="blog-widgets-section">
	<div class="container-fluid">
		<div class="row">
	                <div class="col-sm-4">
	                        <?php the_widget( 'WP_Widget_Links', $instance, $args ); ?>
	                </div>
	                <div class="col-sm-4">
	                        <?php get_calendar(); ?>
	                </div>
	                <div class="col-sm-4">
				<?php $args = array(
	                            'numberposts' => 10,
	                            'offset' => 0,
	                            'category' => 0,
	                            'orderby' => 'post_date',
	                            'order' => 'DESC',
	                            'include' => ,
	                            'exclude' => ,
	                            'meta_key' => ,
	                            'meta_value' =>,
	                            'post_type' => 'post',
	                            'post_status' => 'publish',
	                            'suppress_filters' => true );
	
	                            $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
	                        ?>
	                </div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-lg-offset-2 text-center">
				<p class="text-faded">This blog is maintained by the students and teachers at the Capoeira Studio. Are you actively posting content in our Facebook Group? Do you enjoy researching and sharing Capoeira knowledge? Then apply to be a contributor.</p>
				<hr class="light">
				<a href="#about" class="btn btn-default btn-xl page-scroll wow bounceIn" data-wow-delay=".1s">기부하기 <br>Contribute</a>
			</div>
		</div>
	</div>
</section>
