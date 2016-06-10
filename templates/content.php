<article <?php post_class(); ?>>
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php get_template_part('templates/entry-meta'); ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
