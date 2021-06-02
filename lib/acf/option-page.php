<?php
/*
* Site Options 
*/

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'menu_position' => 1,
		'page_title' => 'Información de Contacto',
		'menu_title' => 'Información de Contacto',
		'menu_slug' => 'options',
		'capability' => 'edit_posts',
		'post_id' => 'options',
		'icon_url' => 'dashicons-info',
		'redirect' => false,
	));
} 