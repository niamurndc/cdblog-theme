<?php get_header(); ?>

<!-- slider section -->

<!-- container section -->
<div class="container">
<div class="row pr-2">
  <div class="col-md-9 p-0">
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
  <div class="col-md-3 sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>
</div>

  



<?php get_footer(); ?>