window.onscroll = function() {headerFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function headerFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}