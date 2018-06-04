<?php

add_action ('init', 'Enterprise_cpt');
add_action ('init', 'Enterprise_taxonomy');

function Enterprise_cpt() {

  register_field_group(array (
		'id' => 'acf_entreprise',
		'title' => 'Entreprise',
		'fields' => array (
			array (
				'key' => 'field_5afc433a17f48',
				'label' => 'Adresse',
				'name' => 'adresse',
				'type' => 'text',
				'instructions' => 'Entrer l\'adresse de l\'entreprise',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5afc434e17f49',
				'label' => 'Numéro de téléphone',
				'name' => 'numero_de_telephone',
				'type' => 'number',
				'instructions' => 'Entrer le numéro de l\'entreprise',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5afc436417f4a',
				'label' => 'Premier jour ouvert de la semaine ',
				'name' => 'premier_jour_ouvert_de_la_semaine',
				'type' => 'text',
				'instructions' => 'Entrer le premier jour ouvert de la semaine ',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5afc438617f4b',
				'label' => 'dernier jour ouvert de la semaine',
				'name' => 'dernier_jour_ouvert_de_la_semaine_',
				'type' => 'text',
				'instructions' => 'Entrer le premier jour ouvert de la semaine ',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5afc439917f4c',
				'label' => 'heure d\'ouverture',
				'name' => 'heure_douverture',
				'type' => 'number',
				'instructions' => 'Entrer l\'heure d\'ouverture ',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5afc43bd17f4d',
				'label' => 'heure de fermeture',
				'name' => 'heure_de_fermeture',
				'type' => 'number',
				'instructions' => 'Entrer l\'heure de fermeture',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5afc43eb17f50',
				'label' => 'Jours fermés ',
				'name' => 'jours_fermes_',
				'type' => 'text',
				'instructions' => 'Entrer les jours fermés',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'entreprise',
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

function Enterprise_taxonomy() {
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
}
