$( ".header" ).vegas({
      timer: false,
      delay: 17000,
      preload: true,
      overlay: 'https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/07.png',
      slides: [
        { src: "https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/omizumba-header.jpg", valign: "70%", transition: "zoomOut" },
        { src: "https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/teachers-header.jpg", valign: "50%", transition: "swirlRight" },
        { src: "https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/mestresuassuna-black1.jpg", valign: "30%", transition: "zoomIn" },
        { src: "https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/cdozumbilogo-gold-black-1600x900px-for-iMovie.png", transition: "blur" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});

