<?php 

// theme sidebar

if(!is_active_sidebar( 'sidebar1' )){
  return;
}
?>

<aside class="cd-sidebar">
  <?php dynamic_sidebar( 'sidebar1' ); ?>
</aside>