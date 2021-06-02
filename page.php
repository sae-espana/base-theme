<?php
/**
 * The main template file
 */
 get_header();


 if(have_posts()) : 
    while(have_posts()) : the_post();?>
        <?php if(is_front_page()) : ?>  
            <?php $link = get_field('link', 'option'); ?>
            <input type="hidden" id="fachada" value="<?= get_field('edificio', 'option'); ?>">
            <input type="hidden" id="link" value="<?= $link['url']; ?>">
            <input type="hidden" id="linkTitle" value="<?= $link['title']; ?>">
            <input type="hidden" id="linkTarget" value="<?= $link['target']; ?>">
            <div id="appRender"></div>
            <script src="<?php echo get_template_directory_uri() ?>/public/app.js"></script>
        <?php endif; ?>
        <?php the_content(); ?>
   <?php  endwhile;
  else:
  echo 'Aun no hay entradas';
 endif;
 
 get_footer(); ?>