<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<div class="container-fluid">
	<div class="row">
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
</div>

<?php the_posts_navigation(); ?>
