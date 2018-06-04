<?php

add_action ('init', 'Recipe_cpt');
add_action ('init', 'Recipe_taxonomy');

function Recipe_cpt() {

  register_field_group(array (
    'id' => 'acf_menu',
    'title' => 'Menu',
    'fields' => array (
      array (
        'key' => 'field_5b1537889604e',
        'label' => 'Titre',
        'name' => 'titre',
        'type' => 'text',
        'instructions' => 'Mettez le titre ',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5b1538269f189',
        'label' => 'Sous titre',
        'name' => 'sous_titre',
        'type' => 'text',
        'instructions' => 'Mettez le sous titre ',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5b15383b9f18a',
        'label' => 'Description',
        'name' => 'description',
        'type' => 'textarea',
        'instructions' => 'Mettez la description ',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'formatting' => 'br',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-menu.php',
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

  register_field_group(array (
    'id' => 'acf_prix',
    'title' => 'Prix',
    'fields' => array (
      array (
        'key' => 'field_5afc32c928212',
        'label' => 'Prix',
        'name' => 'prix',
        'type' => 'number',
        'instructions' => 'Indiquer le prix du plat',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '€',
        'min' => 0,
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'recette',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));

}


function Recipe_taxonomy() {

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
		'supports'           => array( 'title', 'thumbnail', 'excerpt' )
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
