<?php // custom functions.php template

// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}

// // disable all widget areas
// function disable_all_widgets($sidebars_widgets) {
// 	//if (is_home())
// 		$sidebars_widgets = array(false);
// 	return $sidebars_widgets;
// }
// add_filter('sidebars_widgets', 'disable_all_widgets');


// category id in body and post class
function category_id_class($classes) {
	global $post;
	if(is_single())
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;

}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

// Page Thumbnails
add_theme_support( 'post-thumbnails' );


//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}



function translate_field_validation_text( $validation_result ) {
	$form = $validation_result['form'];
	$fields = $form['fields'];

	// set the form validation to false
	foreach( $fields as $k => $field ) {
		if($field->failed_validation == '1') {
			$validation_result['is_valid'] = false;
			$field->failed_validation = true;
			$field->validation_message = 'Este campo es requerido.';
		} else {
			$field->failed_validation = false;
		}
	}
	//Assign modified $form object back to the validation result
	$validation_result['form'] = $form;
	return $validation_result;

	
}
add_filter( 'gform_validation', 'translate_field_validation_text' );