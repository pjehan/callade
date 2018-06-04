<?php

// FICHIER A SUPPR ERWAN
// C'EST QUOI FUNCTION_EXIST ???

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_contenu-histoire',
		'title' => 'Contenu histoire',
		'fields' => array (
			array (
				'key' => 'field_5b1545301dd92',
				'label' => 'image du contenu complémentaire 1',
				'name' => 'image_picto_1',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b15454c1dd93',
				'label' => 'titre du contenu complémentaire 1',
				'name' => 'titre_picto_1',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b15455a1dd95',
				'label' => 'description du contenu complémentaire 1',
				'name' => 'description_picto_1',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5b15469d50b57',
				'label' => 'image du contenu complémentaire 2',
				'name' => 'image_picto_2',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b1546b750b58',
				'label' => 'titre du contenu complémentaire 2',
				'name' => 'titre_picto_2',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b1546c550b59',
				'label' => 'description du contenu complémentaire 2',
				'name' => 'description_picto_2',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5b1546d450b5a',
				'label' => 'image du contenu complémentaire 3',
				'name' => 'image_picto_3',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b1546e050b5b',
				'label' => 'titre du contenu complémentaire 3',
				'name' => 'titre_picto_3',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b1546ed50b5c',
				'label' => 'description du contenu complémentaire 3',
				'name' => 'description_picto_3',
				'type' => 'textarea',
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
					'param' => 'page',
					'operator' => '==',
					'value' => '96',
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


	register_field_group(array (
		'id' => 'acf_image-principale-page',
		'title' => 'Image principale page',
		'fields' => array (
			array (
				'key' => 'field_5b152f4229b56',
				'label' => 'Image principale page',
				'name' => 'image_principale_page',
				'type' => 'image',
				'instructions' => 'Mettez une image principale, qui s\'affichera en haut de page ',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '106',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '91',
					'order_no' => 0,
					'group_no' => 1,
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
		'id' => 'acf_page-histoire',
		'title' => 'Page histoire',
		'fields' => array (
			array (
				'key' => 'field_5b154232aeab0',
				'label' => 'Titre',
				'name' => 'titre',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b154241aeab1',
				'label' => 'Sous titre',
				'name' => 'sous_titre',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b15424baeab2',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'textarea',
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
					'param' => 'page',
					'operator' => '==',
					'value' => '96',
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

	register_field_group(array (
		'id' => 'acf_section-petit-dejeuner',
		'title' => 'section petit dejeuner',
		'fields' => array (
			array (
				'key' => 'field_5b153906747ae',
				'label' => 'début petit dejeuner',
				'name' => 'debut_petit_dejeuner',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b153953747af',
				'label' => 'petit dejeuner',
				'name' => 'petit_dejeuner',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b153a31b7d68',
				'label' => 'image petit dejeuner',
				'name' => 'image_petit_dejeuner',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '91',
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
