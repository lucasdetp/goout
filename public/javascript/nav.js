window.addEventListener('load', function() {
    var navbar = document.getElementById('navbar');
    var offset = window.pageYOffset;
  
    if (offset >= 100) {
      navbar.classList.remove('transparent');
    } else {
      navbar.classList.add('transparent');
    }
  
    window.addEventListener('scroll', function() {
      var offset = window.pageYOffset;
  
      if (offset >= 100) {
        navbar.classList.remove('transparent');
      } else {
        navbar.classList.add('transparent');
      }
    });
  });
  