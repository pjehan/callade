<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

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


// CODE VERIFIÉ PAR ERWAN

// Activer le custom logo

add_theme_support( 'custom-logo' );


// Partie admin : Afficher l'onglet 'Recettes'

add_action ('init', 'CuisineTheme_cpt');

function CuisineTheme_cpt() {

  $labels = array(
		'name'               => _x( 'Recettes', 'post type general name', 'recette-cuisine' ),
		'singular_name'      => _x( 'Recette', 'post type singular name', 'recette-cuisine' ),
		'menu_name'          => _x( 'Recettes', 'admin menu', 'recette-cuisine' ),
		'name_admin_bar'     => _x( 'Recette', 'add new on admin bar', 'recette-cuisine' ),
		'add_new'            => _x( 'Ajouter une recette', 'book', 'recette-cuisine' ),
		'add_new_item'       => __( 'Ajouter une nouvelle recette', 'recette-cuisine' ),
		'new_item'           => __( 'Nouvelle recette', 'recette-cuisine' ),
		'edit_item'          => __( 'Modifier la recette', 'recette-cuisine' ),
		'view_item'          => __( 'Afficher la recette', 'recette-cuisinen' ),
		'all_items'          => __( 'Toutes les recettes', 'recette-cuisine' ),
		'search_items'       => __( 'Rechercher une recette', 'recette-cuisine' ),
		'parent_item_colon'  => __( 'Parent recettes:', 'recette-cuisine' ),
		'not_found'          => __( 'Aucune rechette n\'a été trouvées.', 'recette-cuisine' ),
		'not_found_in_trash' => __( 'Aucune rechette n\'a été trouvées dans la corbeille.', 'recette-cuisine' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'recette-cuisine' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'recette' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 10,
    'menu_icon'   => 'dashicons-clipboard',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'recette', $args );


  // Partie admin : Afficher le taxonomy 'Ingredient' dans 'Recette'

  $labels = array(
    'name'              => _x( 'Ingrédients', 'taxonomy general name', 'cuisine' ),
    'singular_name'     => _x( 'Ingrédient', 'taxonomy singular name', 'cuisine' ),
    'search_items'      => __( 'Rechercher un ingrédient', 'cuisine' ),
    'all_items'         => __( 'Tous les ingrédients', 'cuisine' ),
    'parent_item'       => __( 'Parent ingrédient', 'cuisine' ),
    'parent_item_colon' => __( 'Parent ingrédient:', 'cuisine' ),
    'edit_item'         => __( 'Modifier l\'ingrédient', 'cuisine' ),
    'update_item'       => __( 'Mettre à jour l\'ingrédient', 'cuisine' ),
    'add_new_item'      => __( 'Ajouter un ingrédient', 'cuisine' ),
    'new_item_name'     => __( 'Nouveau nom d\'ingrédient', 'cuisine' ),
    'menu_name'         => __( 'Ingrédients', 'cuisine' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'ingredient' ),
  );

  register_taxonomy( 'ingredient', array( 'recette' ), $args );


  // Partie admin : Afficher le taxonomy 'Type de repas' dans 'Recette'

  $labels = array(
    'name'              => _x( 'Types de repas', 'taxonomy general name', 'cuisine' ),
    'singular_name'     => _x( 'Type de repas', 'taxonomy singular name', 'cuisine' ),
    'search_items'      => __( 'Rechercher un type de repas', 'cuisine' ),
    'all_items'         => __( 'Tous les types de repas', 'cuisine' ),
    'parent_item'       => __( 'Parent type de repas', 'cuisine' ),
    'parent_item_colon' => __( 'Parent type de repas:', 'cuisine' ),
    'edit_item'         => __( 'Modifier le type de repas', 'cuisine' ),
    'update_item'       => __( 'Mettre à jour le type de repas', 'cuisine' ),
    'add_new_item'      => __( 'Ajouter un type de repas', 'cuisine' ),
    'new_item_name'     => __( 'Nouveau nom de type de repas', 'cuisine' ),
    'menu_name'         => __( 'Types de repas', 'cuisine' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'type-repas' ),
  );

  register_taxonomy( 'type-repas', array( 'recette' ), $args );

}

// CODE DE JULIANE

// Partie admin : Afficher l'onglet 'équipe'

  $labels = array(
		'name'               => _x( 'Equipe', 'post type general name', 'equipe-cuisine' ),
		'singular_name'      => _x( 'Equipe', 'post type singular name', 'equipe-cuisine' ),
		'menu_name'          => _x( 'Equipes', 'admin menu', 'equipe-cuisine' ),
		'name_admin_bar'     => _x( 'Equipe', 'add new on admin bar', 'equipe-cuisine' ),
		'add_new'            => _x( 'Ajouter un équipier', 'book', 'equipe-cuisine' ),
		'add_new_item'       => __( 'Ajouter un nouvel équipier', 'equipe-cuisine' ),
		'new_item'           => __( 'Nouvel équipier', 'equipe-cuisine' ),
		'edit_item'          => __( 'Modifier l équipier', 'equipe-cuisine' ),
		'view_item'          => __( 'Afficher l équipier', 'equipe-cuisine' ),
		'all_items'          => __( 'Tous les équipiers', 'equipe-cuisine' ),
		'search_items'       => __( 'Rechercher un équipier', 'equipe-cuisine' ),
		'parent_item_colon'  => __( 'Parent equipe:', 'equipe-cuisine' ),
		'not_found'          => __( 'Aucune equipe n\'a été trouvées.', 'equipe-cuisine' ),
		'not_found_in_trash' => __( 'Aucune equipe n\'a été trouvées dans la corbeille.', 'equipe-cuisine' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'equipe-cuisine' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'equipe' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 10,
    'menu_icon'   => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'equipe', $args );

  // Partie admin : Afficher l'onglet 'entreprise'

    $labels = array(
  		'name'               => _x( 'Entreprise', 'post type general name', 'entreprise-cuisine' ),
  		'singular_name'      => _x( 'Entreprise', 'post type singular name', 'entreprise-cuisine' ),
  		'menu_name'          => _x( 'Entreprises', 'admin menu', 'entreprise-cuisine' ),
  		'name_admin_bar'     => _x( 'Entreprise', 'add new on admin bar', 'entreprise-cuisine' ),
  		'add_new'            => _x( 'Ajouter une entreprise', 'book', 'entreprise-cuisine' ),
  		'add_new_item'       => __( 'Ajouter une nouvelle entreprise', 'entreprise-cuisine' ),
  		'new_item'           => __( 'Nouvelle entreprise', 'entreprise-cuisine' ),
  		'edit_item'          => __( 'Modifier une entreprise', 'entreprise-cuisine' ),
  		'view_item'          => __( 'Afficher une entreprise', 'entreprise-cuisine' ),
  		'all_items'          => __( 'Toutes les entreprises', 'entreprise-cuisine' ),
  		'search_items'       => __( 'Rechercher une entreprise', 'entreprise-cuisine' ),
  		'parent_item_colon'  => __( 'Parent entreprise:', 'entreprise-cuisine' ),
  		'not_found'          => __( 'Aucune entreprise n\'a été trouvées.', 'entreprise-cuisine' ),
  		'not_found_in_trash' => __( 'Aucune entreprise n\'a été trouvées dans la corbeille.', 'entreprise-cuisine' )
  	);

  	$args = array(
  		'labels'             => $labels,
                  'description'        => __( 'Description.', 'entreprise-cuisine' ),
  		'public'             => true,
  		'publicly_queryable' => true,
  		'show_ui'            => true,
  		'show_in_menu'       => true,
  		'query_var'          => true,
  		'rewrite'            => array( 'slug' => 'entreprise' ),
  		'capability_type'    => 'post',
  		'has_archive'        => true,
  		'hierarchical'       => false,
  		'menu_position'      => 10,
      'menu_icon'   => 'dashicons-format-aside',
  		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  	);

  	register_post_type( 'entreprise', $args );

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
