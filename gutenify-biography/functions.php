<?php
if ( ! function_exists( 'gutenify_biography_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gutenify_biography_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'gutenify-biography', get_stylesheet_directory(  ) . '/languages' );
		add_editor_style('../gutenify-starter/style.css');
    }
endif;
add_action( 'after_setup_theme', 'gutenify_biography_setup' );

function gutenify_biography_enqueue_frontend_scripts() {
	wp_enqueue_style( 'gutenify-biography-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'gutenify_biography_enqueue_frontend_scripts' );
