<?php 
/*
Template Name: Font-Page 
Template Post Type: page
*/
get_header(); ?>

<!-- slider section -->
<div class="glider-contain multiple slider mb-5 mt-1">
  <div class="glider">
    <?php $slide = new WP_Query(array('posts_per_page' => 5));
    if($slide->have_posts()) : while($slide->have_posts()) : $slide->the_post();  ?>
      <figure>
        <?php the_post_thumbnail('post-thumbnail', array('class' => 'slide-image')); ?>
        <a class="slide-link" href="<?php the_permalink(); ?>">
          <div class="slide-content">
          <span><i class="fa fa-user"></i> <?php the_author(); ?>  <i class="fa fa-eye"></i> <?php the_views(); ?></span>
          <h3><?php the_title(); ?></h3>
        </div></a>
      </figure>
    <?php endwhile; endif; ?>
  </div>
  
  <button aria-label="Previous" class="glider-prev"><i class="fa fa-chevron-left"></i></button>
  <button aria-label="Next" class="glider-next"><i class="fa fa-chevron-right"></i></button>
</div>

<!-- container section -->
<div class="container">
  <h2>Latest Posts</h2>
  <div class="row">
    <?php $latest = new WP_Query(array('posts_per_page' => 9)); if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post();  
    get_template_part( 'content' );
    endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>