var   mainNav1 = document.getElementById("main_nav_slider_border_bottom"),
      navLinks = mainNav1.querySelectorAll(".link");
for (var index = 0; index < navLinks.length; index++) {
      const link = navLinks[index];
      link.addEventListener("mouseenter", slideInBorder);
      link.addEventListener("mouseout", slideOutBorder);
}
function slideInBorder() {
      var span_el = this.children[0];
      span_el.style.animation = "slideInToLeft .3s forwards";
}
function slideOutBorder() {
      var span_el = this.children[0];
      span_el.style.animation = "slideOutToRight .3s forwards";
}

