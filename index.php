<?php
/**
 * The main template file
 */
 get_header();
 ?>

<?php if(have_posts()) : ?>
	<div  class="container">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<div class="sae-postList">
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part('/parts/post-card'); ?>
			<?php endwhile; ?>
		</div>
	</div>
 <?php else:
	echo 'Aun no hay entradas';
 endif;
 
 get_footer(); ?>

