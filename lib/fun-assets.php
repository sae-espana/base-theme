<?php
// Smart include jquery

 
  
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.0.min.js', false, '3.5.0');
    wp_enqueue_script('jquery');
  }

//Include Scripts and Styles
function scripts_styles_mix() {
    $url = get_template_directory_uri();
    // Swiper
    wp_enqueue_script('swiper_js', 'https://unpkg.com/swiper/swiper-bundle.js', [], true );
    wp_enqueue_script('swiper_min_js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], true );

    // bootstrap
    wp_enqueue_script('bootstrap_js', $url . '/src/resources/bootstrap/js/bootstrap.min.js', [], true );
    wp_enqueue_script('bootstrap_js_bundle', $url . '/src/resources/bootstrap/js/bootstrap.bundle.min.js', [], true );
    wp_enqueue_style('bootstrap_css', $url . '/src/resources/bootstrap/css/bootstrap.min.css', false );
        

    // Main styles
    wp_enqueue_script('sae_js', $url . '/src/js/index.js', [], true );
    wp_enqueue_style('sae_css', $url . '/dist/css/index.css', false );
    
    // ajax
    // $directory = array(
    //     'is_front_page' => is_front_page(),
    //     'ajax_url' => admin_url('admin-ajax.php'),
    //   );
    //   wp_enqueue_script( 'ajaxfile', get_template_directory_uri() . '/src/js/ajax.js', [], true );
    //   wp_localize_script('ajaxfile', 'directory', $directory);
    //   wp_enqueue_script( 'ajaxfile');

}

add_action( 'wp_enqueue_scripts', 'scripts_styles_mix' );

