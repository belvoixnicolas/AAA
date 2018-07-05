// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var anim1 = document.getElementById("animated1");
var anim2 = document.getElementById("animated2");
var anim3 = document.getElementById("animated3");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
if (window.pageYOffset >= sticky) {
  header.classList.add("animated bounceInRight");
  header.classList.add("animated2 bounceInRight2");
  header.classList.add("animated3 bounceInRight3");
} else {
  header.classList.remove("animated bounceInRight");
  header.classList.remove("animated2 bounceInRight2");
  header.classList.remove("animated3 bounceInRight3");
}
}
