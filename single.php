<?php // get_header(); ?>      
     <?php 
            while( have_posts() ) {
                  the_post(); ?>

                  <div class="img_wrapper" style="width: 200px; height: 200px;">
                  </div>
                  <h1> <?php the_title(); ?> </h1>
                  <p> <?php the_content(); ?> </p>
            <?php }
      ?>

<?php get_footer(); ?>