<?php get_template_part('templates/404-header', 'header'); ?>

<section id="404" class="404">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<?php get_template_part('templates/page', 'header'); ?>
		</div>
	</div>
	<div class="row">
		<div class="alert alert-warning">
			<div class="col-sm-4 col-sm-offset-4">
		  		<?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
		<div class="col-sm-4 col-sm-offset-4">
	  		<?php get_search_form(); ?>
		</div>
	</div>
</section>
