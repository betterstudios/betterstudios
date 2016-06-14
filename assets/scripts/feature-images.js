/*!
 * Feature Images
 */

(function($) {
	"use strict"; // Start of use strict

	// jQuery for the slideshow in the header section.
	var imgSrc = $('#featured-image').attr('src');
	$('.keyframe-post-fader').html('<ul><li></li></ul>');
	$('.keyframe-post-fader').css('background-image', 'url(' + imgSrc  + ')');

})(jQuery); // End of use strict
