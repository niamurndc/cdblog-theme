<?php
// package CH Blog
?>

  <div class="col-md-4">
    <div class="card mb-3">
      <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-image')); ?>
      <div class="card-body text-center">
        <span><i class="fa fa-user"></i> <?php the_author(); ?> <i class="fa fa-eye"></i> <?php the_views(); ?></span>
        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </div>
    </div>
  </div>