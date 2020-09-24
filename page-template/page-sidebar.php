<?php
/*
Template Name: Page-sidebar
Template Post Type: page
*/

get_header(); ?>

<!-- slider section -->

<!-- container section -->
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <?php if(have_posts()) : while(have_posts()) : the_post();  
      get_template_part( 'content', 'page');
      endwhile; endif; ?>
    </div>
    <div class="col-md-3 sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
    
</div>


<?php get_footer(); ?>