<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package la-base-theme
 */
?><!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- call google fonts -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<?php if (WP_DEBUG) : ?>
        <script src="/wp-content/themes/la-base-theme/dev/js/vendor/modernizr.js"></script>
    <?php else : ?>
        <script src="/wp-content/themes/la-base-theme/static/js/vendor/modernizr.js"></script>
    <?php endif; ?>

<?php wp_head(); ?>
</head>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<body <?php body_class(); ?>>

<div class="upperbackground"><!-- start upperbackground -->

<div class="wrapper top-wrapper"><!-- open wrapper -->
<div class="grid"><!-- open grid -->

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		
	<div class="grid__cell full"><!-- open full -->
	
<div class="header-image">
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" alt="">
	</a>
</div>	
	
	<?php endif; // End header image check. ?>
	
	
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</div><!-- close full -->
	<div class="grid__cell full"><!-- open full -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<!--<h1 class="menu-toggle"><?php _e( 'Menu', 'la-base-theme' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'la-base-theme' ); ?></a>-->

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</div><!-- close full -->	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
