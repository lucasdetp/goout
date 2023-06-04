window.addEventListener('load', function() {
    const navbar = document.getElementById('navbar');
    const offset = window.pageYOffset;
  
    if (offset >= 100) {
      navbar.classList.remove('transparent');
    } else {
      navbar.classList.add('transparent');
    }
  
    window.addEventListener('scroll', function() {
      const offset = window.pageYOffset;
  
      if (offset >= 100) {
        navbar.classList.remove('transparent');
      } else {
        navbar.classList.add('transparent');
      }
    });
  });

  /*menu mobile*/


document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById("menu-toggle");
  const menuClose = document.getElementById("menu-close");
  const navMobile = document.querySelector(".nav-mobile");

  menuToggle.addEventListener("click", function() {
    navMobile.classList.add("show");
    menuToggle.style.opacity = "0";
    setTimeout(function() {
      menuToggle.style.display = "none";
    }, 300); 
  });

  menuClose.addEventListener("click", function() {
    navMobile.classList.remove("show");
    menuToggle.style.display = "block";
    setTimeout(function() {
      menuToggle.style.opacity = "1";
    }, 50); //  afficher le bouton après l'animation de transition
  });
});


