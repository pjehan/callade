<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

require_once template_path('cpt/recipe.php');
require_once template_path('cpt/team.php');
require_once template_path('cpt/temp.php');
require_once template_path('cpt/enterprise.php');
require_once template_path('cpt/history.php');

function register_my_menu() {
  register_nav_menu('primary-menu',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', array(
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ));

    // Register navigation menus.
    register_nav_menus(array(
        'navigation' => __('Navigation', 'cuisine'),
    ));
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    // wp_deregister_script('jquery');

    wp_enqueue_style('cuisine', mix('styles/app.css'));

    wp_register_script('cuisine', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('cuisine');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Activer le custom logo

add_theme_support( 'custom-logo' );


// Custom function

function get_the_term_list_without_link($post_id, $taxonomy_name) {
  $terms = wp_get_post_terms($post_id, $taxonomy_name);
  $count = count($terms);
  if ( $count > 0 ) {
    echo '<ul class="term-list">';
    foreach ( $terms as $term ) {
      echo '<li>' . $term->name . '</li>';
    }
    echo '</ul>';
  }
}
