<?php // get_header(); ?>      
     <?php 
            while( have_posts() ) {
                  the_post(); ?>

                  <div class="img_wrapper" style="width: 200px; height: 200px; overflow: hidden;">
                        <?php the_post_thumbnail(); ?>
                  </div>
                        <a href="<?php the_permalink(); ?>">
                              <h1> <?php the_title(); ?> </h1>
                        </a>
                  <p> <?php the_content(); ?> </p>
            <?php }
      ?>
<?php get_footer(); ?>