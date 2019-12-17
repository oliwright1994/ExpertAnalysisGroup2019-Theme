const siteNavigationElement = document.getElementById("site-navigation");
const awsContainer = siteNavigationElement.querySelector(".aws-container");
const headerSearchField = awsContainer.querySelector(".aws-search-field");

jQuery(document).ready(e => {
  jQuery(".search-button-toggle").click(e => {
    jQuery("#nav-primary").fadeToggle("fast");
    jQuery(".search-button-toggle i").toggleClass("fa-times");
    jQuery(awsContainer).toggle("fast");
    jQuery(headerSearchField).focus();
  });

  // jQuery(headerSearchField).focusout(e => {
  //   jQuery(awsContainer).toggle("fast");
  //   jQuery("#nav-primary").fadeToggle("fast");
  // });
});
