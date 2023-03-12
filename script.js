const mobileMenu = document.querySelector(".mobile-responsiveicon");
const navBar = document.querySelector(".nav-bar");

mobileMenu.addEventListener("click", function (e) {
  navBar.classList.toggle("nav-active");
  mobileMenu.classList.toggle("mobile-active");

  if (mobileMenu.classList.contains("mobile-active")) {
    document.querySelector(".mobile-responsiveicon img").src =
      "images/close-icon.png";
  } else {
    document.querySelector(".mobile-responsiveicon img").src =
      "images/menu-icon.png";
  }
});
