<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<?php if ( has_custom_logo() ) : ?>
			<h1><?php the_custom_logo(); ?></h1>
		<?php else : ?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php endif; ?>
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
