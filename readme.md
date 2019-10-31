WORDPRESS FUNCTIONS USED USUALLY IN A WEBSITE   ->    https://developer.wordpress.org/reference/functions/get_bloginfo/

bloginfo('name');             =>    display the site title
bloginfo('description');      =>    display the tagline - display the tagline
bloginfo('siteurl');          =>    display the site url

THE WHILE LOOP                =>    used in every posts to loop into it
<?php
      while( have_posts(); ) {
            the_post();

            the_post_thumbnail();   =>    display the post image
            the_title();            =>    display the post title
            the_content();          =>    display the post content / description
      }
?>

USEFUL FUNCTION
determine_locale();                 =>    return the country request
get_stylesheet_uri();               =>    return the style.css location / url
get_stylesheet_directory_uri();     =>    