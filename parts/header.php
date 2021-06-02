<?php 
/*
* Navigation
*/
?>

<nav class="sae-header navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
         <?php
          if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo('navbar-brand img-thumbnail ');
          } else {
              echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
          } 
        ?>
      
        <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
           wp_nav_menu( array(
            'menu' => 'Menu principal',
            'theme_location' => 'main-nav',
            'menu_id'        => 'MenuVivo',
            'container_id'   => 'navbarSupportedContent',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'navbar-nav ml-auto',
            ) );    
        ?> 
    </div>
</nav>