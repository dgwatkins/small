<?php
/**
 * Setup theme features.
 */
function small_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );

	load_theme_textdomain( 'small', get_template_directory() . '/languages' );

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

/**
 * Assets.
 */
function small_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'small_scripts' );

/**
 * Custom post types.
 */
function small_register() {
	$args = [
		'public' => true,
		'has_archive' => true,
		'rewrite' => [ 'slug' => 'book' ],
		'label'  => __( 'Books', 'small' )
	];
	register_post_type( 'book', $args );
}

add_action( 'init', 'small_register' );

/**
 * Add a custom setting.
 */
function my_general_settings_register_fields() {
    register_setting('general', 'my_field', 'esc_attr');
    add_settings_field('my_field', '<label for="my_field">'.__('My Field' , 'my_field' ).'</label>' , 'my_general_settings_fields_html', 'general');
}

function my_general_settings_fields_html() {
    $value = get_option( 'my_field', '' );
    echo '<input type="text" id="my_field" name="my_field" value="' . $value . '" />';
}

add_filter('admin_init', 'my_general_settings_register_fields');
