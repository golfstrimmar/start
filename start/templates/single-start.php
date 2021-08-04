<?php

/**
*Template Name:  single-start
*Template Post Type: post
*/

defined( 'ABSPATH' ) || exit;
get_header();
?>


<section class="single-start" id="single-start">
  <div class="container">
  <div class="single-start__body">
  <div class="single-start__img">
    <div class="imgs">
      <img src=" <?php the_post_thumbnail(); ?>" alt="img">
    </div>
  </div>
  <div class="single-start__column">
  <div class="single-start__data"><?php the_date(); ?> </div>
  <div class="single-start__title"><?php the_title(); ?></div>
  <div class="single-start__text"><?php the_content();?></div>
  </div>
  </div>

  </div>
</section>




<?php 
get_footer();