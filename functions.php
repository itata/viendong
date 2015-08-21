<?php

define( 'IZ_THEME', get_template_directory_uri() );
define( 'IZ_THEME_DIR', get_template_directory() );

define( 'IZ_THEME_ASSETS', IZ_THEME . '/assets' );
define( 'IZ_THEME_ADMIN', IZ_THEME_DIR . '/admin' );


/*
	ADMIN
*/
	include_once( IZ_THEME_ADMIN. '/login/function.php' );
	define('THEMEPREFIX', 'iz');
	include( IZ_THEME_DIR . '/admin/admin-page.php' );
	include( IZ_THEME_DIR . '/options.php' );
	$options_page = new WhitelabelOptions( 'Theme', 'theme-options', THEMEPREFIX, null, null, 'read', null, true, false, true, $options );

/*
	REMOVE CORE
*/
	function remove_wp_logo( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'wp-logo' );
	}
	add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );


	add_action( 'wp_enqueue_scripts', 'iz_scripts_and_styles', 100 );
	function iz_scripts_and_styles() {
		// Registering
		wp_register_script( 'bootstrap',		IZ_THEME_ASSETS . '/js/bootstrap.min.js', array( 'jquery'), '', true );
		wp_register_script( 'main',				IZ_THEME_ASSETS . '/js/main.js', array( 'jquery'), '', true );

		wp_register_style( 'font-open-san',			'http://fonts.googleapis.com/css?family=Open+Sans&subset=vietnamese,latin-ext', null, '', '' );
		wp_register_style( 'bootstrap',			IZ_THEME_ASSETS . '/css/bootstrap.css', null, '', 'screen' );
		wp_register_style( 'stylesheet',		IZ_THEME . '/style.css', null, '', 'screen' );
		wp_register_style( 'responsive',		IZ_THEME_ASSETS . '/css/responsive.css', null, '', 'screen' );

		// Enqueuing
		wp_enqueue_style( 'font-open-san' );
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'stylesheet' );
		wp_enqueue_style( 'responsive' );
		
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'main' );
		
	}

	if ( ! function_exists( 'iz_setup' ) ) :
		function iz_setup() {
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'featured-thumb', 246, 210, true );
			register_nav_menus( array(
				'primary' 	=>	__( 'Primary Menu',	'iz' ),
				'index' 	=>	__( 'Index Menu',	'iz' ),
			) );
		}
	endif;
	add_action( 'after_setup_theme', 'iz_setup' );

	function new_excerpt_length($length) {
		return 50;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

	function SearchFilter($query) {
	    if ($query->is_search) {
	    	$query->set('post_type', 'post');
	    }
	    return $query;
    }
    add_filter('pre_get_posts','SearchFilter');

?>