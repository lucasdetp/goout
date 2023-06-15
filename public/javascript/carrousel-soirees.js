// SLider toutes les soirées
$(window).on('load', function() {
    $('.theme-container').each(function() {
      var $soireesContainer = $(this).find('.soirees-container');
      var soireesCount = $soireesContainer.find('.soiree.slide').length;
  
      var slickConfig = {
        centerMode: true,
        arrows: false,
        speed: 300,
        centerPadding: '20px',
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: true,
        responsive: [
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode: true
            }
          }
        ]
      };
  
      if (soireesCount > 3) {
        slickConfig.slidesToShow = 3;
        slickConfig.slidesToScroll = 3;
        slickConfig.dots = false;
        slickConfig.swipe = true;
      } else if (soireesCount > 1) {
        slickConfig.slidesToShow = 2;
        slickConfig.slidesToScroll = 2;
        slickConfig.dots = false;
        slickConfig.centerPadding = '50px';
        slickConfig.infinite = true;
        slickConfig.swipe = true;
        $soireesContainer.on('init', function() {
            $soireesContainer.find('.slick-track').css({
              'display': 'flex',
              'gap': '5vw'
            });
          });
      } else {
        slickConfig.slidesToShow = 3;
        slickConfig.slidesToScroll = 1;
        slickConfig.centerPadding = '50px';
        slickConfig.dots = false;
        slickConfig.swipe = false;
      }
  
      $soireesContainer.slick(slickConfig);
    });
  });
  