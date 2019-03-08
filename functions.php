<!-- add hooks and configure theme however you want.  -->

<?php

function load_stylesheets() {

  wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'Google_fonts', 'https://fonts.googleapis.com/css?family=BenchNine|Maiden+Orange' );
  wp_enqueue_style( 'animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
  wp_enqueue_style( 'myStyle', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
  wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    }

  add_action('wp_enqueue_scripts', 'load_stylesheets');

  function include_jQuery()
    {

      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', '', 1, true);

    }

  add_action('wp_enqueue_script', 'include_jQuery');

  function loadjs()
    {

      wp_register_script('myJs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);

      wp_enqueue_script('myJs');

    }

  add_action('wp_enqueue_script', 'loadjs');

  add_theme_support('post-thumbnails');
  add_theme_support( 'post-formats', array( 'aside', 'link' ) );
  add_theme_support('menus');

  register_nav_menus(

    array(
      'primary' => 'Main Menu',
      'footer_menu' => 'Footer Menu',
      'top-menu' => __('Top Menu', 'Theme'),
      'footer-menu' => __('Footer Menu', 'Theme'),
    )
  );


  add_image_size('smallest', 300, 300, true);
  add_image_size('largetst', 800, 800, true);

  class SkysVinyl_Nav_Menu extends Walker_Nav_Menu {
      function start_el(&$output, $item, $depth=0, $args=array(), $id=0){
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );

        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'nav-item' : 'sub-menu-item' )
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // Build HTML.
        $output .= $indent . '<li class="' . $depth_class_names . ' ' . $class_names . '">';

        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="nav-link nvb-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

?>
