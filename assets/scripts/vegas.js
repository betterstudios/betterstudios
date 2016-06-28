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
      overlay: 'https://s3.amazonaws.com/betterstudios/08.png',
      slides: [
        { src: "https://s3.amazonaws.com/betterstudios/avacado-5000x3333px.png", valign: "70%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/betterstudios/flaxseed-1280x918px.png", valign: "50%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", align: "10%", transition: "blur" },
        { src: "https://s3.amazonaws.com/betterstudios/kukui-nut-2000x1250px.png", valign: "30%", transition: "zoomOut" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});

$(".section-footer").vegas({
      timer: false,
      delay: 17000,
      preload: true,
      overlay: 'https://s3.amazonaws.com/betterstudios/08.png',
      slides: [
        { src: "https://s3.amazonaws.com/betterstudios/avacado-5000x3333px.png", valign: "70%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/betterstudios/flaxseed-1280x918px.png", valign: "50%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/betterstudios/eye-of-horus-header.jpg", align: "10%", transition: "blur" },
        { src: "https://s3.amazonaws.com/betterstudios/kukui-nut-2000x1250px.png", valign: "30%", transition: "zoomOut" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});


})(jQuery); // End of use strict
