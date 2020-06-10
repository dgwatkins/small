<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<h1><?php bloginfo( 'name' ); ?></h1>
		</a>
	</header>

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>

	<div id="container">
		<?php wp_nav_menu( array(
			'theme_location' => 'menu',
			'container' => 'nav'
		) ); ?>
