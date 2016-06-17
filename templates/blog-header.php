<header id="blog-header" class="header">
	<!-- slider animation -->
	<ul id="header-background" class="keyframe-fader">
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="v-center">
		<h1><?php bloginfo('name'); ?></h1>
		<h3 class="wow zoomIn" data-wow-delay="2s"><?php bloginfo('description'); ?></h3>
		<h5 id="blog-widgets" class="wow rubberBand" data-wow-delay="1s"><?php include Wrapper\sidebar_path(); ?></h5>
	</div>
</header>
