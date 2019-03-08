<!DOCTYPE html>
  <html>


    <head>
      <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <header>

      <nav class="navbar navbar-expand-md nvb">
        <a class="navbar-brand mnvbBrd" href="#"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <?php wp_nav_menu(
          array(
            'menu'            =>  'primary',
            'walker'          =>  new SkysVinyl_Nav_Menu(),
            'menu_class'      =>  'navbar-nav mr-auto',
            'container'       =>  'div',
            'container_class' =>  'collapse navbar-collapse',
            'container_id'    =>  'navbarToggler',
            )
          );
        ?>

    </nav>

    </header>
