/*!
 * Feature Images
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for the slideshow in the header section.

$('.button').click(function(){
  // Handler for .load() called.
  var images = $('featured-image').attr('src');
  $('head').append('<meta property="og:image" content="' + images + '" />');      
});

$("#myImg").load(function() {
  alert('I loaded!');
}).attr('src', 'myImage.jpg');

$( "img" ).load(function() {
  if ( $( this ).height() > 100) {
    $( this ).addClass( "bigImg" );
  }
});

})(jQuery); // End of use strict
