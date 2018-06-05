<?php

if( function_exists('acf_add_local_field_group') ) {
  add_action ('init', 'Enterprise_cpt');
}
add_action ('init', 'Enterprise_taxonomy');

function Enterprise_cpt() {
  acf_add_local_field_group(array (
		'id' => 'acf_entreprise',
		'title' => "Informations de l'entreprise (elles seront affichées en bas du site)",
		'fields' => array (
			array (
        'key' => uniqid(),
				'label' => 'Adresse',
				'name' => 'adresse',
				'type' => 'text',
				'placeholder' => "Indiquez l'adresse de l'entreprise",
			),
			array (
        'key' => uniqid(),
				'label' => 'Numéro de téléphone',
				'name' => 'numero_de_telephone',
				'type' => 'number',
				'placeholder' => "Indiquez le numéro de l'entreprise",
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'entreprise',
				),
			),
		),
	));

  acf_add_local_field_group(array (
		'id' => 'acf_entreprise-2',
		'title' => "Ouvertures de l'entreprise (elles seront affichées en bas du site)",
		'fields' => array (
			array (
        'key' => uniqid(),
				'label' => 'Premier jour ouvert de la semaine ',
				'name' => 'premier_jour_ouvert_de_la_semaine',
				'type' => 'text',
				'placeholder' => 'Indiquez le premier jour ouvert de la semaine ',
			),
			array (
        'key' => uniqid(),
				'label' => 'dernier jour ouvert de la semaine',
				'name' => 'dernier_jour_ouvert_de_la_semaine_',
				'type' => 'text',
				'placeholder' => 'Indiquez le premier jour ouvert de la semaine ',
			),
			array (
        'key' => uniqid(),
				'label' => 'heure d\'ouverture',
				'name' => 'heure_douverture',
				'type' => 'number',
				'placeholder' => "Indiquez l'heure d'ouverture",
			),
			array (
        'key' => uniqid(),
				'label' => 'heure de fermeture',
				'name' => 'heure_de_fermeture',
				'type' => 'number',
        'placeholder' => "Indiquez l'heure de fermenture",
			),
			array (
        'key' => uniqid(),
				'label' => 'Jours fermés ',
				'name' => 'jours_fermes',
				'type' => 'text',
				'placeholder' => 'Indiquez les jours fermés',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'entreprise',
				),
			),
		),
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
  	'supports'           => array( 'title' )
  );

  register_post_type( 'entreprise', $args );
}
