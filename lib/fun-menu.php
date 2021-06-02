<?php
// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}

// custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-nav' => __( 'Menu principal' ),
      'social-nav' => __( 'Redes sociales' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );

// Logotipo

function themename_custom_logo_setup() {
	$defaults = array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
 	'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
 
 function change_logo_class( $html ) {

	$html = str_replace( 'custom-logo', 'logo', $html );
	$html = str_replace( 'custom-logo-link', 'd-flex p-3', $html );

	return $html;
}

add_filter( 'get_custom_logo', 'change_logo_class' );

function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_specific_menu_location_atts( $atts, $item, $args ) {
	// check if the item is in the primary menu
	if( $args->menu == 'primary' ) {
		// add the desired attributes:
		$atts['class'] = 'menu-link-class';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

