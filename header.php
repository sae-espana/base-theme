<?php
/**
 * The template for displaying the header.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0  minimum-scale=1, maximum-scale=1">
 	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php wp_title( '|' , true, 'right' ); ?> <?= get_bloginfo( 'name' ); ?></title>
	<link rel="shortcut icon" href="<?= get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
	<script src="https://kit.fontawesome.com/423b0e1dfa.js" crossorigin="anonymous"></script>
 	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="bodyLoader()">
	<script>
		function bodyLoader() {
				setTimeout(showPage, 300);
			}
			function showPage() {
				if( document.getElementById("loader")) {
					document.getElementById("loader").style.display = "none";
				}
			}
	</script>

<?php get_template_part('parts/header'); ?>
<div class="sae-page">