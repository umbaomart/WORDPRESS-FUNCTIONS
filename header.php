<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <?php wp_head(); ?>
<!-- css stylesheet -->
</head>
<body <?php body_class(); ?>>
      <header>
            <nav class="main_nav">
                  <div class="social_top">
                        <div class="social_top__nav">
                              <ul>
                                    <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                              </ul>
                              <form action="">
                                    <div class="form_group">
                                          <input type="text" value="">
                                          <span class="icon_wrapper">
                                                <i class="fa fa-search"></i>
                                          </span>
                                    </div>
                              </form>
                        </div>
                  </div>
                  <div class="main_nav_top">
                        <div class="main_nav_top__wrapper">
                              <a href="<?php echo site_url(); ?>" class="logo">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="">
                              </a>
                              <ul id="main_nav_slider_border_bottom">
                                    <li>
                                          <a href="<?php echo site_url(); ?>" class="nav_link">
                                                <font class="nav_text">Home</font>
                                                <span class="slider_bottom"></span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="<?php echo site_url('/disclaimer'); ?>" class="nav_link">
                                                <font class="nav_text">Disclaimer</font>
                                                <span class="slider_bottom"></span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="<?php echo site_url('/blog'); ?>" class="nav_link">
                                                <font class="nav_text">Blog</font>
                                                <span class="slider_bottom"></span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="<?php echo site_url('/contact'); ?>" class="nav_link">
                                                <font class="nav_text">Contact</font>
                                                <span class="slider_bottom"></span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="<?php echo site_url('/about-me'); ?>" class="nav_link">
                                                <font class="nav_text">About me</font>
                                                <span class="slider_bottom"></span>
                                          </a>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </nav>
      </header>