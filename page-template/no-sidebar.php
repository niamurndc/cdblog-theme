<?php 
/*
Template Name: No-sidebar layout
Template Post Type: post
*/
get_header(); ?>

<!-- container section -->
<div class="container">
<div class="row pr-4">
  <div class="col-md-12 p-0">
    <div class="row mx-2">
      <?php if(have_posts()) : while(have_posts()) : the_post();  
      get_template_part( 'content', 'single' );
      endwhile; endif; ?>
    </div>
    <nav class="blog-pagination">
        <p class="btn pagi-text"><?php previous_post_link(); ?></p>
        <p class="btn pagi-text"><?php next_post_link(); ?></p>
    </nav>

    <div class="comment px-5">
      <?php if(comments_open()){
        comments_template();
      } ?>
    </div>
  </div>
</div>
</div>