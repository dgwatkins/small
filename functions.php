<?php
function small_setup() {

	register_nav_menus( array(
		'menu'    => __( 'Menu', 'small' )
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'small' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'small' )
	) );

}

add_action( 'after_setup_theme', 'small_setup' );

function small_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'small_scripts' );

function small_register() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'label'  => __( 'Books', 'small' )
	);
	register_post_type( 'book', $args );
}
add_action( 'init', 'small_register' );