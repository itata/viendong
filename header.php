<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" type="image/x-icon" />

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container page-wrap">
		
		<header id="masthead" class="site-header" role="banner">
			
			<div class="top-head clearfix">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>" class="logo pull-left">
					<img src="<?php echo $logo = get_option( 'iz_logo' );?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
				</a>
				<form role="search" method="get" class="search-form pull-right" action="<?php echo home_url( '/' ); ?>">
					<label>
						
						<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					</label>
					<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>" />
				</form>
			</div>

			<nav id="site-navigation" class="main-navigation navbar" role="navigation">
				<div class="navbar-header navbar-right">
					<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar">
					<?php
						wp_nav_menu( array(
							'menu_class'     => 'nav navbar-nav',
							'theme_location' => 'primary',
							'container'		=> false,
						) );
					?>
				</div>
			</nav>


		</header>