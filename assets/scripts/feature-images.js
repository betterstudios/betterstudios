/*!
 * Feature Images
 */

(function($) {
	"use strict"; // Start of use strict

	// jQuery for the slideshow in the header section.
	var imgSrc = $('#featured-image').attr('src');
	$('.header-background').html('<ul><li></li></ul>');
	$('.header-background').css('background-image', 'url(' + imgSrc  + ')');

})(jQuery); // End of use strict
