<?php 
/*
* Register ACF block
*/
$settings = array(
    'name' => 'Carusel de iconos',
    'title' => __('Carusel de iconos'),
    'description' => __('Carusel de iconos'),
    'category' => 'embed',
    // Specifying colors
      'icon' => array(
        'background' => '#ffffff',
        'foreground' => '#000000',
        'src' => 'book-alt',
      ),
      'supports' => array( 
        'mode' => true,
        'multiple' => true,
       ),
      'keywords' => array('quote', 'slider', 'carousel', 'icon', 'cite'),
      'post_types' => array('post', 'page'),
      'mode' => 'embed',
      'align' => 'full',
      'align_text' => 'center',
      'align_content' => 'center',
      'render_template' => 'template-parts/blocks/icons-swiper/index.php',
      'render_callback' => 'my_acf_block_render_callback',
      'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/icons-swiper/_icons.css',
      'enqueue_script' => get_template_directory_uri() . '/template-parts/blocks/icons-swiper/_icons.js',
    );

acf_register_block_type( $settings );

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'Carusel de iconos',
            'title'             => __('Carusel de iconos'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/icons-swiper/index.php',
            'category'          => 'formatting',
        ));
    }
}