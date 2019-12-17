const menuButton = document.querySelector(".header-menu-button");
const topBarSlideMenu = document.querySelector(".topbar-menu-items");
const screenOverlay = document.getElementById("screen-overlay");

jQuery(document).ready(e => {
  jQuery(menuButton).click(e => {
    jQuery(screenOverlay).fadeIn("fast");
    jQuery(topBarSlideMenu).css("transform", "translateX(0)");
  });

  jQuery(screenOverlay).click(e => {
    jQuery(topBarSlideMenu).css("transform", "translateX(100vw)");
    jQuery(screenOverlay).fadeOut("fast");
  });
});
