<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slide_gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slide_gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/src/resources/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/src/resources/owl-carousel/magnific-popup.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/src/resources/owl-carousel/owl.theme.default.css">

<blockquote> 
  <?php if(have_rows('carusel')) : ?> 
    <section id="carousel-icons">
      <div class="owl-carousel owl-theme">
        <?php while(have_rows('carusel')) : the_row('carusel'); ?>
            <?php
              $icon = get_sub_field('icono');
              $title = get_sub_field('title');
              $popup = get_sub_field('popup');
              $popupTitle = $popup['titulo'];
              $popupDescription = $popup['description'];
            ?>
            <div class="item popover-1" data-container="body" data-toggle="popover" data-trigger="hover"
                data-placement="top" title="<?= $popupTitle; ?>" data-content="<?= $popupDescription; ?>">
                <div class="text-center">
                    <div class="wrap-image" style="text-align: center;">
                        <img src="<?= $icon; ?>" alt="<?= $title; ?>">
                    </div>
                    <p style="text-align: center;"><?= $title; ?></p>
                </div>
            </div>
        <?php endwhile; ?>
      </div> 
    </section> 
  <?php endif; ?>
</blockquote>
<script src="<?= get_template_directory_uri(); ?>/src/resources/owl-carousel/owl.carousel.min.js"></script>

