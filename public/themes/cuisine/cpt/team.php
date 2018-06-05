<?php

if( function_exists('acf_add_local_field_group') ) {
  add_action ('init', 'Team_cpt');
}
add_action ('init', 'Team_taxonomy');

function Team_cpt() {

  acf_add_local_field_group(array (
		'id' => 'acf_equipier',
		'title' => "Informations de l'équipier",
		'fields' => array (
			array (
				'key' => uniqid(),
				'label' => 'Nom',
				'name' => 'nom',
				'type' => 'text',
				'placeholder' => 'Indiquez le nom de l\'équipier',
        'required' => 1,
			),
			array (
				'key' => uniqid(),
				'label' => 'Prénom',
				'name' => 'prenom',
				'type' => 'text',
				'placeholder' => 'Indiquez le prénom de l\'équipier',
        'required' => 1,
			),
			array (
				'key' => uniqid(),
				'label' => 'Poste',
				'name' => 'poste',
				'type' => 'text',
				'placeholder' => 'Indiquez le poste de l\'équipier'
			),
      array (
				'key' => uniqid(),
				'label' => 'Photo de profil',
				'name' => 'image_equipier',
				'type' => 'image',
				'instructions' => "Un pictogramme s'affichera si aucune image n'a été insérée.",
				'save_format' => 'url',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'equipe',
				),
			),
		),
	));
}

function Team_taxonomy() {

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
    'supports'           => array( 'title', 'author' )
  );

  register_post_type( 'equipe', $args );

}
