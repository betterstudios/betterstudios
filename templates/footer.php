<!-- Footer -->
<footer class="footer">
        <!-- slider animation -->
        <ul class="keyframe-footer-fader">
                <li></li>
                <li></li>
                <li></li>
        </ul>
        <div class="v-center">
		<div class="row">
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">MENU</h2>
	                        <p><a href="<?php echo get_site_url(); ?>/blog">Blog</a></p>
	                        <p><a href="<?php echo get_site_url(); ?>/faq">FAQ</a></p>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">RECENT POSTS</h2>
				<?php
					$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
					}
				?>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">META</h2>
	                        <p><a href="/wp-admin">Site Admin</a></p>
	                        <p><a href="/logout">Log Out</a></p>
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">NEWSLETTER</h2>
	                        <p><a href="http://eepurl.com/b3Y1Hz">Subscribe</a></p>
	                        <p><a href="http://capoeirastudio.us13.list-manage.com/unsubscribe?u=3db435ce999565383d510d2cd&id=64f83024b3">Unsubscribe</a></p>
	                </div>
	                <div class="col-md-3">
	                        <h2 class="wow bounceIn" data-wow-delay=".1s">REGISTRATION</h2>
				<p class="korean">킬롬볼라 레크리에이션</p>
				<p class="korean">서울특별시중구북창동93-3삼옥빌딩303호</p>
				<p class="korean">휴대폰 번호 : 010-9090-9183</p>
				<p class="korean">사업자 등록 번호 : 101-11-14837</p>
				<p><span class="korean">대표자:</span> Munair Simpson</p>
	                </div>
                </div>
		<div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                                <img src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/capoeirastudio-white-icon-644x644px.png" class="wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-name: bounceIn; -webkit-animation-name: bounceIn;">
                                <h5 id="featured-video-heading" class="section-heading">As featured on...</h5>
                                <hr id="featured-hr" class="primary">
                                <a href="http://home.ebs.co.kr/ebsnews/menu3/newsGlobalView/10344369/H" target="_new">
                                <img id="ebs-footer-logo" src="https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/simple-ebs-logo-45x33px-embossed.png" class="wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-name: bounceIn; -webkit-animation-name: bounceIn;">
                                </a>
                        </div>
                </div>
        </div>
</footer>
