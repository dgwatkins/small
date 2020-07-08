<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<h1><?php the_custom_logo(); ?></h1>
	</header>

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
		}
	?>

	<div id="container">
		<?php wp_nav_menu( array(
			'theme_location' => 'menu',
			'container' => 'nav'
		) ); ?>
