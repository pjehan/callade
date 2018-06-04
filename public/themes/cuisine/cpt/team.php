<?php

add_action ('init', 'Team_cpt');
add_action ('init', 'Team_taxonomy');

function Team_cpt() {

  register_field_group(array (
		'id' => 'acf_equipier',
		'title' => 'Equipier',
		'fields' => array (
			array (
				'key' => 'field_5afc3c0f223f0',
				'label' => 'Nom',
				'name' => 'nom',
				'type' => 'text',
				'instructions' => 'Entrer le nom de l\'équipier',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5afc3cad8fba7',
				'label' => 'Prénom',
				'name' => 'prenom',
				'type' => 'text',
				'instructions' => 'Entrer le prénom de l\'équipier',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5afc3c3b223f1',
				'label' => 'Poste',
				'name' => 'poste',
				'type' => 'text',
				'instructions' => 'Entrer le poste de l\'équipier',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
      array (
				'key' => 'field_5b1532eafdeaf',
				'label' => 'image equipier',
				'name' => 'image_equipier',
				'type' => 'image',
				'instructions' => 'Mettez la photo de l\'équipier',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'equipe',
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
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'equipe', $args );

}
