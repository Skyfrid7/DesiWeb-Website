// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
     navbar = document.getElementById("navbar");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
     navbar.classList.add("scroll-navbar");
  } else {
     navbar.classList.remove("scroll-navbar");
  }
}