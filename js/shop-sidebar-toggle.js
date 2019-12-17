jQuery(document).ready(e => {
  const menuButton = document.getElementById("shop-sidebar-toggle");
  const screenOverlay = document.getElementById("screen-overlay");
  const shopSidebar = document.querySelector(".shop-layout-sidebar-aside");
  jQuery(menuButton).click(e => {
    jQuery(screenOverlay).fadeIn();
    jQuery(shopSidebar).css("transform", "translateX(0)");
  });
  jQuery(screenOverlay).click(e => {
    jQuery(screenOverlay).fadeOut();
    if (jQuery(window).width() <= 720) {
      jQuery(shopSidebar).css("transform", "translateX(-100vw)");
    }
  });
});
