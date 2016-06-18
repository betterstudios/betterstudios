<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<?php get_template_part('templates/head'); ?>
	<body <?php body_class(); ?>>
	<!--[if IE]>
		<div class="alert alert-warning">
			<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
		</div>
	<![endif]-->
	<?php
		do_action('get_header');
		get_template_part('templates/header');
	?>
	<section id="primary" class="primary">
        	<div class="container" role="document">
                	<div class="row">
	        		<main class="main">
	          			<?php include Wrapper\template_path(); ?>
	        		</main><!-- /.main -->
			</div><!-- /.row -->
      		</div><!-- /.container -->
    	</section><!-- /.primary -->
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
    	<?php
		do_action('get_footer');
		get_template_part('templates/footer');
		wp_footer();
    	?>
  	</body>
</html>
