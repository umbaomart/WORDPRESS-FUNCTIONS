      <footer>
            <nav class="main_nav_footer">
                  <ul>
                        <li><a href="<?php echo site_url(); ?>" class="btn">Home</a></li>
                        <li><a href="<?php echo site_url('/disclaimer'); ?>" class="btn">Disclaimer</a></li>
                        <li><a href="<?php echo site_url('/blog'); ?>" class="btn">Blog</a></li>
                        <li><a href="<?php echo site_url('/contact'); ?>" class="btn">Contact</a></li>
                        <li><a href="<?php echo site_url('/about-me'); ?>" class="btn">About me</a></li>
                  </ul>
            </nav>
      </footer>
      <script src="<?php echo get_theme_file_uri() . '/assets/js/main.js'?>"></script>
      <script>
            var mainNav1 = document.getElementById("main_nav_slider_border_bottom");
            var navLinks = mainNav1.querySelectorAll("a.nav_link");
            for (var index = 0; index < navLinks.length; index++) {
                  const link = navLinks[index];
                  link.addEventListener("mouseenter", slideInBorder);
                  link.addEventListener("mouseout", slideOutBorder);
            }
            function slideInBorder() {
                  var span_el = this.children[1];
                  span_el.style.animation = "slideInToLeft .3s forwards";
            }
            function slideOutBorder() {
                  var span_el = this.children[1];
                  span_el.style.animation = "slideOutToRight .3s forwards";
            }
      </script>
</body>
</html>