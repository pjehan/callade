<?php


if( function_exists('acf_add_local_field_group') ) {
  add_action ('init', 'History_cpt');
}
add_action ('init', 'history_taxonomy');

function History_cpt() {

  acf_add_local_field_group(array (
		'id' => 'acf_histoire',
		'title' => "Informations de la date historique",
		'fields' => array (
			array (
				'key' => 'date-histoire',
				'label' => 'Date',
				'name' => 'date',
				'type' => 'text',
        'placeholder' => 'Indiquez la date de la date historique',
        'required' => 1,
			),
			array (
				'key' => 'titre-histoire',
				'label' => 'Titre',
				'name' => 'titre',
				'type' => 'text',
				'placeholder' => 'Indiquez le titre de la date historique',
        'required' => 1,
			),
			array (
				'key' => 'description-histoire',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'textarea',
				'placeholder' => 'Indiquez une description de la date historique'
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'histoire',
				),
			),
		),
	));


}

function History_taxonomy() {

  $labels = array(
  	'name'               => _x( 'Histoire', 'post type general name', 'histoire-cuisine' ),
  	'singular_name'      => _x( 'Histoire', 'post type singular name', 'histoire-cuisine' ),
  	'menu_name'          => _x( 'Histoire', 'admin menu', 'histoire-cuisine' ),
  	'name_admin_bar'     => _x( 'Histoire', 'add new on admin bar', 'histoire-cuisine' ),
  	'add_new'            => _x( 'Ajouter une date historique', 'book', 'histoire-cuisine' ),
  	'add_new_item'       => __( 'Ajouter une nouvelle date historique', 'histoire-cuisine' ),
  	'new_item'           => __( 'Nouvelle date historique', 'histoire-cuisine' ),
  	'edit_item'          => __( 'Modifier une date historique', 'histoire-cuisine' ),
  	'view_item'          => __( 'Afficher une date historique', 'histoire-cuisine' ),
  	'all_items'          => __( 'Toutes les dates historiques', 'histoire-cuisine' ),
  	'search_items'       => __( 'Rechercher une date historique', 'histoire-cuisine' ),
  	'parent_item_colon'  => __( 'Parent date historique:', 'histoire-cuisine' ),
  	'not_found'          => __( 'Aucune date historique n\'a été trouvées.', 'histoire-cuisine' ),
  	'not_found_in_trash' => __( 'Aucune date historique n\'a été trouvées dans la corbeille.', 'histoire-cuisine' )
  );

  $args = array(
  	'labels'             => $labels,
    'description'        => __( 'Description.', 'histoire-cuisine' ),
  	'public'             => true,
  	'publicly_queryable' => true,
  	'show_ui'            => true,
  	'show_in_menu'       => true,
  	'query_var'          => true,
  	'rewrite'            => array( 'slug' => 'histoire' ),
  	'capability_type'    => 'post',
  	'has_archive'        => true,
  	'hierarchical'       => false,
  	'menu_position'      => 10,
    'menu_icon'   => 'dashicons-format-aside',
  	'supports'           => array( 'title', 'author' )
  );

  register_post_type( 'histoire', $args );

}
