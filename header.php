<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abcosolar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom-style.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'abcosolar' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<h1 class="logo">
		        <a href="https://abco-wordpress-johngarcia9110.c9users.io/">
		            <img src="https://abco-wordpress-johngarcia9110.c9users.io/wp-content/uploads/2016/09/logo.png"
	                width="180"
	                height="60"
	                alt="ABCO Energy, Inc.">
	           </a>
			</h1>
	        <a class="visible-xs mobile-nav-trigger" id="showRight">
	            <div class="meat"></div>
	            <div class="meat"></div>
	            <div class="meat"></div>
	        </a>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right main-nav" id="mobile-nav" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'abcosolar' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>  <!-- container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
