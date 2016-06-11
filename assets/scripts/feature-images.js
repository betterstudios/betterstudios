/*!
 * Feature Images
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for the slideshow in the header section.

$('.button').click(function(){
  // Handler for .load() called.
  var images = $('#featured-image').attr('src');
  alert("the button was clicked images");      
});

})(jQuery); // End of use strict
