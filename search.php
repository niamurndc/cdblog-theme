<?php get_header(); ?>

<!-- slider section -->

<!-- container section -->
<div class="container">
  <h2 class="mt-2">Your Search Result</h2>
  <div class="row mt-4">
    <?php if(have_posts()) : while(have_posts()) : the_post();  
    get_template_part( 'content' );
    endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>