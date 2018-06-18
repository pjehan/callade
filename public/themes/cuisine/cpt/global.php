<?php

if( function_exists('acf_add_local_field_group') ) {
  add_action ('init', 'Global_cpt');
}

function Global_cpt() {
  acf_add_local_field_group(array (
		'id' => 'acf_image-principale-page-2',
		'title' => 'Paramètres généraux de la page',
		'fields' => array (
			array (
        'key' => 'field_5b152f4229b56',
				'label' => 'Image principale de la page',
				'name' => 'image_principale_page',
				'type' => 'image',
				'instructions' => "Mettez une image principale, qui s'affichera en haut de page",
				'required' => 1,
				'save_format' => 'url',
			),
      array (
  			'message' => 'Cocher pour afficher en bas de page le contenu complémentaire',
        'key' => 'activer-contenu-supple',
  			'label' => 'Activer le contenu complémentaire',
  			'name' => 'activer_le_contenu_complementaire',
  			'type' => 'true_false',
  		),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
    'menu_order' => 10,
	));

    acf_add_local_field_group(array (
  	'key' => 'infos-complementaires-histoire',
  	'title' => 'Informations complémentaires',
  	'fields' => array (
      array (
        'key' => 'image-contenu-supple',
        'label' => 'Image du contenu complémentaire',
        'name' => 'image_contenu_complementaire',
        'type' => 'image',
        'instructions' => "Mettez une image pour séparer le contenu complémentaire",
        'save_format' => 'url',
      ),
  		array (
  			'sub_fields' => array (
  				array (
            'key' => 'icone-contenu-supple',
  					'return_format' => 'url',
  					'min_width' => 50,
  					'min_height' => 50,
  					'max_width' => 500,
  					'max_height' => 500,
  					'label' => 'Image',
  					'name' => 'image',
  					'type' => 'image',
  					'instructions' => 'Importez une icône',
  				),
  				array (
            'key' => 'titre-contenu-supple',
  					'label' => 'Titre',
  					'name' => 'titre',
  					'type' => 'text',
  					'placeholder' => 'Insérez le titre',
  				),
  				array (
            'key' => 'description-contenu-supple',
  					'label' => 'Description',
  					'name' => 'description',
  					'type' => 'textarea',
  					'placeholder' => '',
  				),
  			),
  			'min' => 1,
  			'max' => 3,
  			'layout' => 'block',
  			'button_label' => '',
  			'collapsed' => '',
  			'key' => 'repeat-contenu-supple',
  			'label' => 'champs complémentaires',
  			'name' => 'champs_complementaires',
  			'type' => 'repeater',
  			'instructions' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'page',
  			),
  		),
  	),
  	'menu_order' => 5,
  ));
}
