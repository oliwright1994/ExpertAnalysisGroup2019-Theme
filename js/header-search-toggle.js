const siteNavigationElement = document.getElementById("site-navigation");
const awsContainer = siteNavigationElement.querySelector(".aws-container");
const headerSearchField = awsContainer.querySelector(".aws-search-field");

jQuery(document).ready(e => {
  jQuery(".search-button-toggle").click(e => {
    jQuery(awsContainer)
      .toggle("fast")
      .focus();
    jQuery("#nav-primary").fadeToggle("fast");
    jQuery(".search-button-toggle i").toggleClass("fa-times");
  });

  // jQuery(".aws-search-field").focusout(e => {
  //   jQuery(".aws-search-field").toggle("medium");
  // });
});
