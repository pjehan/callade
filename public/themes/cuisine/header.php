<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta name='theme-color' content='#6d9aea'>
  <meta name='description' content='<?php the_field('meta_description') ?>'>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class='header-fixe'>
      <div class='container'>
        <?php
          if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href='. esc_url(home_url('/')) . '><span class="no-logo">' . get_bloginfo('name') . '</span></a>';
          }
        ?>
        <nav style='display:none' role='navigation'>
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>
        <div id='burger'><div></div></div>
      </div>
    </header>
