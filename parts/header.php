<?php 
/*
* Navigation
*/
?>

<nav class="sae-header navbar navbar-expand-lg fixed-top">
    <div class="container">
         <?php
          if ( the_custom_logo('navbar-brand img-thumbnail ') ) {
            the_custom_logo('navbar-brand img-thumbnail ');
          } else {
              echo '<a href="'. get_bloginfo( 'url' ) .'">';
              echo '<h1 class="sae-title-theme">'. get_bloginfo( 'title' ) .'</h1>';
              echo '</a>';
          } 
        ?>
      
        <button class="trigger">
            <span></span>
            <span></span>
            <span></span>
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
    <div class="sae-filter"></div>
</nav>