/*!
 * Feature Images
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for the slideshow in the header section.

$( "img" ).load(function() {
  if ( $( this ).height() > 100) {
    $( this ).addClass( "bigImg" );
  }
});

})(jQuery); // End of use strict
