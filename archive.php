<?php get_header(); ?>

<!-- slider section -->

<!-- container section -->
<div class="container">
  <div class="page-top p-4">
    <h2><?php the_archive_title(); ?></h2>
  </div>
  <div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post();  
    get_template_part( 'content' );
    endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>