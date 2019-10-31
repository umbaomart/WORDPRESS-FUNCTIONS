<?php 

      function marTheme_files() {
            // style css
            wp_enqueue_style('martyblog_main_style', get_theme_file_uri('/assets/css/main.css'));
            wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

            // script js
            wp_enqueue_script('myscript', get_theme_file_uri() . '/assets/js/main.js');
      }
      
      function martyblog_features() {
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
      }
      
      add_action('wp_enqueue_scripts', 'marTheme_files');
      add_action('after_setup_theme', 'martyblog_features');

      function remove_admin_login_header() {
            remove_action('wp_head', '_admin_bar_bump_cb');
      }
      add_action('get_header', 'remove_admin_login_header');