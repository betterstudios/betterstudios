                <header class="404-header">
                        <!-- slider animation -->
                        <ul class="keyframe-404-fader">
                                <li></li>
                                <li></li>
                                <li></li>
                        </ul>
                        <div class="v-center">
                                <a onmousedown="tick()" onmouseover="pop()" href="<?= esc_url(home_url('/')); ?>">
                                        <img class="scroll-down wow flipInX" data-wow-delay="1s" src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-whitealpha-icon-600x600px.png" />
                                </a>
                                <h1><?php bloginfo('name'); ?></h1>
                                <nav class="nav-primary">
                                        <?php
                                                if (has_nav_menu('primary_navigation')) :
                                                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                                                endif;
                                        ?>
                                </nav>
                        </div>
                </header>

