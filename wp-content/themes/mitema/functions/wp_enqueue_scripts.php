<?php 

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */

function register_enqueue_scripts() {
		$theme_data = wp_get_theme();
		
		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		
		/* Registrando Scripts */
		wp_register_script('jquery', get_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), null, '3.3.1', true);
		wp_register_script('jquery-migrate', get_theme_file_uri('/assets/vendor/jquery/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
		wp_register_script('bootstrap_js', 
			get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jquery-migrate'), '4.1.3', true);
		wp_register_script('scripts-galery', 
			get_parent_theme_file_uri('/assets/js/script-galery.js'), array('jquery'), '4.1.3', true);
		wp_register_script('scripts-index', 
			get_parent_theme_file_uri('/assets/js/script-index.js'), array('jquery'), '4.1.3', true);
		
		/* Enqueue Scripts */
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-migrate' );
		wp_enqueue_script( 'bootstrap_js' );
		wp_enqueue_script( 'scripts-galery' );
		wp_enqueue_script( 'scripts-index' );
		
	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


	//Remove error wp-includes/functions.php
	remove_action ('shutdown', 'wp_ob_end_flush_all', 1);
