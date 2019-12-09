const header = document.querySelector("#masthead");
const primaryDiv = document.getElementById("primary");
let differentTopBarRequired = false;

if (primaryDiv.classList.contains("front-page")) {
  differentTopBarRequired = true;
  header.classList.add("site-header-static");
}

window.addEventListener("scroll", function() {
  if (differentTopBarRequired === true) {
    if (pageYOffset >= window.innerHeight * 0.9) {
      header.classList.remove("site-header-static");
    } else if (pageYOffset < window.innerHeight * 0.9) {
      header.classList.add("site-header-static");
    }
  }
});
