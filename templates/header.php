<header class="header">
	<!-- slider animation -->
	<ul id="header-background" class="keyframe-fader">
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="v-center">
		<a onmousedown="tick()" onmouseover="pop()" href="<?= esc_url(home_url('/')); ?>">
			<img class="scroll-down" src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-whitealpha-icon-600x600px.png" />
		</a>
		<h1 class="wow slideInRight" data-wow-delay="2s"><?php bloginfo('name'); ?></h1>
		<h3 class="wow pulse" data-wow-delay="2s"><?php bloginfo('description'); ?></h3>
		<nav class="nav-primary">
			<?php
				if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
			?>
		</nav>
	</div>
</header>
