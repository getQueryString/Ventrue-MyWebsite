// Copyright© by Fin

// img
const img_blur = document.getElementById("img-blur");

// remove blur from elements
const header_pics = document.getElementById("header-pics").classList.remove("blur");
const footer_pics = document.getElementById("footer-pics").classList.remove("blur");


img_blur.addEventListener("mouseover", function() {
  header_pics.classList.add("blur");
  footer_pics.classList.add("blur");
});

img_blur.addEventListener("mouseleave", function() {
  header_pics.classList.remove("blur");
  footer_pics.classList.remove("blur");
});