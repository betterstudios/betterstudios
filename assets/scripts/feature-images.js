/*!
 * Feature Images
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for the slideshow in the header section.

$('.button').click(function(){
  // Handler for .load() called.
  var images = $('#featured-image').attr('src');
  $('head').append('<meta property="og:image" content="' + images + '" />');      
});

})(jQuery); // End of use strict
