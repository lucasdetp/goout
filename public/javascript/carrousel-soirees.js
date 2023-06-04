// Slider toutes les soirées
$(window).on('load', function() {
    // console.log('testes')
    $('.center-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      centerMode: true,
      arrows: false,
      dots: true,
      speed: 300,
      centerPadding: '20px',
      infinite: true,
      autoplaySpeed: 5000,
      autoplay: true,
      responsive: [
        {
          breakpoint: 769, /* ecran 768px*/ 
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
          }
        }
      ]
    });
  });