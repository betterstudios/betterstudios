<!-- news sharing section -->
<div class="btn-group sharing-btns">
<button class="btn btn-default disabled"><?php _e( 'Share:' , 'portfilo' ); ?></button>
<a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>&amp;t=<?php echo strip_tags( $post->post_title ); ?>" target="_blank" class="btn btn-default facebook"> <i class="fa fa-facebook fa-lg fb"></i></a>
<a href="https://twitter.com/intent/tweet?original_referer=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>&amp;text=<?php echo strip_tags( $post->post_title ); ?>&amp;tw_p=tweetbutton&amp;url=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>" target="_blank" class="btn btn-default twitter"><i class="fa fa-twitter fa-lg tw"></i></a>
<a href="//pinterest.com/pin/create/button/?url=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>&amp;media=<?php echo $portfilo_blog_detail_url; ?>&amp;description=<?php echo strip_tags( $post->post_title ); ?>" target="_blank" class="btn btn-default pinterest"> <i class="fa fa-pinterest fa-lg pinterest"></i></a>
<a href="https://plusone.google.com/_/+1/confirm?hl=<?php language_attributes(); ?>&amp;url=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>" target="_blank" class="btn btn-default google"> <i class="fa fa-google-plus fa-lg google"></i></a>
<a href="https://plus.google.com/share?url=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>&amp;title=<?php echo strip_tags( $post->post_title ); ?>" class="btn btn-default linkedin"><i class="fa fa-linkedin"></i></a>
<a href="mailto:?subject=<?php echo strip_tags( $post->post_title ); ?>&amp;body=<?php echo urlencode( the_permalink( '' , '' , false ) ); ?>" class="btn btn-default mail"> <i class="fa fa-envelope"></i></a>
</div>
<!-- news sharing section end -->
