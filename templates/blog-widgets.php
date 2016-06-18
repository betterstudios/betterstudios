<section id="blog-widgets" class="blog">
	<div class="container-fluid">
	        <div class="row">
	                <div class="col-sm-4">
	                        <h1>hi</h1><?php the_widget( 'WP_Widget_Links', $instance, $args ); ?>
	                </div>
	                <div class="col-sm-4">
	                        <h1>hi</h1><?php get_calendar(); ?>
	                </div>
	                <div class="col-sm-4">
	                        <h1>hi</h1><?php $args = array(
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
	</div>
</section>
