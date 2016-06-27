/*!
 * Vegas Configuration Code
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for the slideshow in the header section.

$(".front-page-header").vegas({
      timer: false,
      delay: 17000,
      preload: true,
      overlay: 'https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/07.png',
      slides: [
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", valign: "70%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", valign: "50%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", valign: "30%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", align: "10%", transition: "blur" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});

$(".section-footer").vegas({
      timer: false,
      delay: 17000,
      preload: true,
      overlay: 'https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/07.png',
      slides: [
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", valign: "70%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", valign: "50%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", valign: "30%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", align: "10%", transition: "blur" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});


})(jQuery); // End of use strict
