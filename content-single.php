<div class="col-md-12">
  <div class="card">
    
    <div class="single-text card-body">
      <?php the_category(' '); ?>
      <h3><?php the_title(); ?></h3>
      <span><i class="fa fa-user"></i> <?php the_author(); ?>  <i class="fa fa-eye"> </i> <?php the_views(); ?></span>  <i class="fa fa-clock-o"> </i> <?php the_date(); ?></span>
      <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-image-single')); ?>
      <hr>
      <div class="card-text text-justify">
        <?php the_content(); ?>
      </div>
      <hr>
    </div>
  </div>
</div>

