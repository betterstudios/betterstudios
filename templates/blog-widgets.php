<section id="blog-widgets" class="blog-widgets-section">
	<div class="container-fluid">
		<div id="widget-row" class="row">
	                <div class="col-sm-2 col-sm-offset-1">
	                        <?php the_widget( 'WP_Widget_Recent_Posts', $instance, $args ); ?>
	                </div>
	                <div class="col-sm-2">
	                        <?php the_widget( 'WP_Widget_Tag_Cloud', $instance, $args ); ?>
	                </div>
	                <div class="col-sm-2">
	                        <?php the_widget( 'WP_Widget_Archives', $instance, $args ); ?>
	                </div>
	                <div class="col-sm-2">
	                        <?php the_widget( 'WP_Widget_Categories', $instance, $args ); ?>
	                </div>
	                <div class="col-sm-2">
	                        <?php the_widget( 'WP_Widget_Calendar', $instance, $args ); ?>
	                </div>
		</div>
	</div>
</section>
