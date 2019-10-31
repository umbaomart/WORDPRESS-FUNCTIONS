WORDPRESS FUNCTIONS USED USUALLY IN A WEBSITE   =>    https://developer.wordpress.org/reference/functions/get_bloginfo/

bloginfo('name');             =>    display the site title
bloginfo('description');      =>    display the tagline - display the tagline
bloginfo('siteurl');          =>    display the site url or
bloginfo('url');


THE WHILE LOOP                =>    used in every posts to loop into it
<?php
      while( have_posts(); ) {
            the_post();

            the_post_thumbnail();         =>    display the post image
            the_title();                  =>    display the post title
            the_content();                =>    display the post content / description
            the_permalink();              =>    return the link of the particular post
            the_excerpt();                =>    return the excerpt / subtitle of the particular post
      }
?>


USEFUL FUNCTION
determine_locale();                       =>    return the country request
get_stylesheet_uri();                     =>    return the style.css location / url
get_stylesheet_directory_uri();           =>    return the directory of the used stylesheet css
get_template_directory_uri();             =>    return the directory of the current template used in the wordpress


NAVIGATION LINKS
wp_list_pages();                          =>    returns all the list of pages
wp_list_pages('exclude=17,38');           =>   to exclude the input / parameters in the function
wp_list_pages('child_of=5');              =>    display only the sub-pages of a single page by ID
for more pages function and reference     =>    https://developer.wordpress.org/reference/functions/wp_list_pages/


CATEGORIES                                =>    categories created to group the post into different categories
wp_list_categories();                     =>    return all the list of categories
wp_list_categories('exclude=10, 15');     =>    exclude to limit the categories you want
wp_list_catories('child_of=8, 14');       =>    if you would like only to show the select childen categories
for more categories function              =>    https://codex.wordpress.org/Good_Navigation_Links#Categories


ARCHIVES                                  =>    archives date-based Template Tag called
wp_get_archives();                        =>    The tags allows you to display links, to arhives by year, week, day or individual posts. 
wp_get_archives();                        =>    The default usage of the wp_get_archives will show a link for each month of posts.
wp_get_archives('monthly&limit3');        =>    To show the mose recent three months of posts by month, you would use the this code
wp_get_archives('type=daily&limit=15');         =>    Displaying the archives by date, you can show the most recent 15 days:
wp_get_archives('type=postbypost&limit=25')     =>    show the actual posts use the parameter 'postbypost' which displays the most recent posts, with the number set by the limit parameter. To show the last 25 posts by post title.
for more information and reference              =>    https://codex.wordpress.org/Good_Navigation_Links#Categories
                                                =>    https://codex.wordpress.org/Template_Tags/wp_get_archives



===============================================================================================================================================================================================================================



FUNCTIONS FOR MANIIPULATING WORD (PARAGRAPH)
wp_trim_words('sentence');          =>    used to trim words / text to shorten the characters ex: wp_trim_words($sentence, 18);      


INDUSTRY STANDARDS (CUSTOM FIELDS) -> PLUGINS
      =>    Advanced  Custom Fields / ACF
      =>    CMB2 (Custom Metaboxes 2)


FOR THE DATE FORMAT
the_field('event_date') displaying the created date using the plugin