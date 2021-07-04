<?php 
/*
* the post card
*/
?>

<div class="sae-postCard">
    <a href="<?= the_permalink(); ?>"
       class="sae-postCard__thumbnail">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/src/img/placeholder.jpeg" alt="image">
      <?php endif; ?>
    </a>
    <div class="sae-postCard__content">
      <h4>
        <a href="<?= the_permalink(); ?>"><?php the_title(); ?></a>
      </h4>
      <p>
        <a href="<?= the_permalink(); ?>"><?php the_excerpt(); ?></a>
      </p>
    </div>
</div>