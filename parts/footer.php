<?php 
/* footer */
?>

<footer class="sae-footer">
  <div class="container">
    <?php if ( is_active_sidebar( 'footer' ) ) : ?>
      <div class="sae-footer__widgets">
        <?php dynamic_sidebar( 'footer' ); ?>
      </div><!-- #primary-sidebar -->
     <?php endif; ?>

    <div>
      <p style="text-align: center">developed with love <3 </p>
    </div>
  </div>
</footer>

