<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.3
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */

function register_enqueue_style() {
	$theme_data = wp_get_theme();

	wp_register_style ('bootstrap_css', get_theme_file_uri('/assets/vendor/css/bootstrap.min.css'), 'null', '4.1.3', 'screen');
	wp_register_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.css'), null, '5.2.0', 'screen' );
	wp_register_style( 'fonts', get_theme_file_uri( '/assets/css/fonts.css'), null, '2.7.1', 'screen' );
	wp_register_style ('csspropio', get_theme_file_uri('/assets/css/style.css'), 'normalize', '1.0', 'screen');

	//estilos en cola
	
	wp_enqueue_style( 'bootstrap_css' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'fonts' );
	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'csspropio' );
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );
