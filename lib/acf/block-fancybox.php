<?php 
/*
* Register ACF block
*/
$settings = array(
    'name' => 'FancyBox',
    'title' => __('FancyBox'),
    'description' => __('FancyBox'),
    'category' => 'embed',
    // Specifying colors
      'icon' => array(
        'background' => '#ffffff',
        'foreground' => '#000000',
        'src' => 'images-alt2',
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
      'render_template' => 'template-parts/blocks/fancyBox/index.php',
      'render_callback' => 'my_acf_block_render_callback',
      'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/fancyBox/_fancybox.css',
    );

acf_register_block_type( $settings );

add_action('acf/init', 'my_acf_blocks_init_fancybox');

function my_acf_blocks_init_fancybox() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'FancyBox',
            'title'             => __('FancyBox'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/fancyBox/index.php',
            'category'          => 'formatting',
        ));
    }
}