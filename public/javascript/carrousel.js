// Slider soirées home
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
    autoplay: false,
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

//Slider avis et partenaires pour écran 768px
$(document).ready(function() {
  // Vérifier la largeur de la fenêtre lors du chargement 
  checkWindowWidth();

  // Vérifier la largeur de la fenêtre lors du redimensionnement
  $(window).resize(function() {
    checkWindowWidth();
  });

  // Fonction pour vérifier la largeur de la fenêtre et initialiser ou désactiver le slider en conséquence
  function checkWindowWidth() {
    if ($(window).width() < 769) {
      initSlider();
    } else {
      destroySlider();
    }
  }

  // Fonction d'initialisation du slider
  function initSlider() {
    $('#slider-avis-mobile').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      infinite: true,
      speed: 300,
      centerPadding: '20px',
      autoplaySpeed: 5000,
      autoplay: true
    });
      $('.container-partenaires').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        infinite: true,
        speed: 300,
        centerMode: true,
        centerPadding: '20px',
        autoplaySpeed: 5000,
        autoplay: false
      });
  }
  

  // Fonction de destruction du slider
  function destroySlider() {
    if ($('#slider-avis-mobile').hasClass('slick-initialized')) {
      $('#slider-avis-mobile').slick('unslick');
    }
   
    if ($('.container-partenaires').hasClass('slick-initialized')) {
      $('.container-partenaires').slick('unslick');
    }
  }
});
