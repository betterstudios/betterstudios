<time class="updated" datetime="<?= get_post_time('c', true); ?>">
	<i class="glyphicon glyphicon-calendar"></i> <?= get_the_date(); ?>
</time>
<p class="byline author vcard">
	<i class="fa fa-user"></i> <?= __('posting by', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
</p>
