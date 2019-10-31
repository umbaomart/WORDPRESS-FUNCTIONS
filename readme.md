WORDPRESS FUNCTIONS USED USUALLY IN A WEBSITE   =>    https://developer.wordpress.org/reference/functions/get_bloginfo/

bloginfo('name');             =>    display the site title
bloginfo('description');      =>    display the tagline - display the tagline
bloginfo('siteurl');          =>    display the site url or
bloginfo('url');


THE WHILE LOOP                =>    used in every posts to loop into it
<?php
      while( have_posts(); ) {
            the_post();

            the_post_thumbnail();   =>    display the post image
            the_title();            =>    display the post title
            the_content();          =>    display the post content / description
            the_permalink();        =>    return the link of the particular post
            the_excerpt();          =>    return the excerpt / subtitle of the particular post
      }
?>


USEFUL FUNCTION
determine_locale();                 =>    return the country request
get_stylesheet_uri();               =>    return the style.css location / url
get_stylesheet_directory_uri();     =>    return the directory of the used stylesheet css
get_template_directory_uri();       =>    return the directory of the current template used in the wordpress


NAVIGATION LINKS
wp_list_pages();                    =>    to show all the available pages on the site
wp_list_pages('exclude=17,38);      =>    to exclude the input / parameters in the function
wp_list_pages('child_of');          =>    display only the sub-pages of a single page by ID
for more function and reference     =>    https://developer.wordpress.org/reference/functions/wp_list_pages/


CATEGORIES






FUNCTIONS FOR MANIIPULATING WORD (PARAGRAPH)
wp_trim_words('sentence');          =>    used to trim words / text to shorten the characters ex: wp_trim_words($sentence, 18);      


INDUSTRY STANDARDS (CUSTOM FIELDS) -> PLUGINS
      =>    Advanced  Custom Fields / ACF
      =>    CMB2 (Custom Metaboxes 2)


FOR THE DATE FORMAT
the_field('event_date') displaying the created date using the plugin