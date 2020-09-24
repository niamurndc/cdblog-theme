<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center">
              <?php if(has_custom_logo()) :
                the_custom_logo(); else:?>
                <a href="<?php home_url('/') ?>" class="text-success"><h2><?php bloginfo('title'); ?></h2></a>
              <?php endif; ?>
              <p><?php bloginfo('description'); ?></p>
            </div>
            <div class="col-md-8 text-right pt-4">
              <form action="/wp-theme/" method="get" class="s-form">
                <input type="text" name="s" placeholder="Search...">
                <button class="btn btn-custom" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="header-menu ">
        <div class="container">
        <?php 
          wp_nav_menu( array(
            'menu' => 'primary',
            'container' => 'nav',
            'container_class' => 'main-nav',
          ) );
        ?>
        </div>
      </div>

  </header>

