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
				'preview_size' => 'large',
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
}
