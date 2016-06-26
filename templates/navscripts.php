<script type="text/javascript">
(function($) {
    "use strict"; // Start of use strict

	// Sticky Header in jQuery
	$(window).scroll(function() {
	
	    if ($(window).scrollTop() > 100) {
	        $('.section-navigation').addClass('sticky');
	    } else {
	        $('.section-navigation').removeClass('sticky');
	    }
	});
	
	// Mobile Navigation
	$('.mobile-toggle').click(function() {
	    if ($('.section-navigation').hasClass('open-nav')) {
	        $('.section-navigation').removeClass('open-nav');
	    } else {
	        $('.section-navigation').addClass('open-nav');
	    }
	});
	
	$('.section-navigation li a').click(function() {
	    if ($('.section-navigation').hasClass('open-nav')) {
	        $('.navigation').removeClass('open-nav');
	        $('.section-navigation').removeClass('open-nav');
	    }
	});
	
	$('nav a').click(function(event) {
	    var id = $(this).attr("href");
	    var offset = 70;
	    var target = $(id).offset().top - offset;
	    $('html, body').animate({
	        scrollTop: target
	    }, 500);
	    event.preventDefault();
	});
	
})(jQuery); // End of use strict
</script>
