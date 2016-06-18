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
		<div id="contributor-row" class="row">
			<div class="col-sm-8 col-lg-offset-2 text-center">
				<p class="text-faded">This blog is maintained by the students and teachers at the Capoeira Studio. Are you actively posting content in our Facebook Group? Do you enjoy researching and sharing Capoeira knowledge? Then apply to be a contributor.</p>
				<hr class="light">
                                <a class="typeform-share link btn btn-default btn-xl page-scroll wow bounceIn" data-wow-delay=".5s" href="https://capoeirastudio.typeform.com/to/Jfyh3n" data-mode="1" target="_blank">기여 <br>Contribute</a>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
			</div>
		</div>
	</div>
</section>
