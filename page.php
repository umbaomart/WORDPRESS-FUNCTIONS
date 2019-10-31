<?php get_header(); ?>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <?php wp_list_categories();  ?>

      <?php wp_get_archives('monthly&limit3'); ?>


<?php get_footer(); ?>