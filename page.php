<?php get_header(); ?>

<!-- slider section -->

<!-- container section -->
<div class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post();  
    get_template_part( 'content', 'page');
    endwhile; endif; ?>
</div>


<?php get_footer(); ?>