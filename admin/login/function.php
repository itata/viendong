<?php
	function vnm_custom_login() {
		echo '<link rel="stylesheet" type="text/css" href="' . IZ_THEME . '/admin/login/css/vnm-login.css" />';
		echo '<script type="text/javascript" src="' . IZ_THEME . '/admin/login/js/vnm-login.js" /></script>';

	}
	add_action('login_head', 'vnm_custom_login');

	function vnm_login_enqueue_scripts()
	{
		wp_enqueue_script('jquery');
	}
	add_action( 'login_enqueue_scripts', 'vnm_login_enqueue_scripts' );
?>