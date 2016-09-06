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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'abcosolar' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<h1 class="logo">
		        <a href="../index.html">
		            <img src="../../c.eqcdn.com/_6631f2d73f69cebadfd3a44607875b9a/abcosolar/files/theme/images/header-logo.png"
	                width="180"
	                height="60"
	                alt="ABCO Energy, Inc.">
	           </a>
			</h1>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'abcosolar' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>  <!-- container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
