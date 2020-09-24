<?php get_header(); ?>

<div class="container mt-3">
  <div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post();  
    get_template_part( 'content' );
    endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>