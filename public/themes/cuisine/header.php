<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class='header-fixe'>
      <div class='container'>
        <?php
          if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
          } else {
            wp_title();
          }
        ?>
        <nav role="navigation">
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>
        <div class='burger'>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </header>
