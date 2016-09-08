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
		        <a href="http://abcoenergy.com">
		            <img src="http://abcoenergy.com/wp-content/uploads/2016/09/logo.png"
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
			<ul class="main-menu">
<li class="sr-only"><a href="index.html">Home</a></li>
		<li class="has-children " data-submenu-id="submenu-about">
<a  href="http://abcoenergy.com/about">About</a>
		<ul id="submenu-about">
																						<li class="  "><a  href="http://abcoenergy.com/about">Overview</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/about/mission-statement">Mission Statement</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/about/key-projects">Key Projects</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/about/market-strategy">Market Strategy</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/about/management-team">Management Team</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/about/board-of-directors">Board of Directors</a></li>
						</ul>
</li>            <li class="has-children " data-submenu-id="submenu-subsidiaries">
<a  href="http://abcoenergy.com/subsidiaries">Subsidiaries</a>
		<ul id="submenu-subsidiaries">
																						<li class="  "><a  href="http://abcoenergy.com/subsidiaries">Overview</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/subsidiaries/abco-solar">ABCO Solar</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/subsidiaries/alternative-energy-finance">Alternative Energy Finance</a></li>
						</ul>
</li>            <li class="has-children " data-submenu-id="submenu-news">
<a  href="http://abcoenergy.com/news">News</a>
		<ul id="submenu-news">
																						<li class="  "><a  href="http://abcoenergy.com/news">Press Releases</a></li>
																						<li class="  "><a  href="http://abcoenergy.com/news/events">Events</a></li>
						</ul>
</li>            <li class="has-children has-mega-menu " data-submenu-id="submenu-investors">
<a  href="http://abcoenergy.com/investors">Investors</a>
		<div class="mega-menu second-level same-height-row-disabled">
<div class="container">
<ul class="height">
								<li class="title"><a href="http://abcoenergy.com/investors">Investor Relations</a></li>
						<li><a href="http://abcoenergy.com/investors">Overview</a></li>
				</ul>
						<ul class="height">
				<li class="title"><a href="http://abcoenergy.com/investors/news-events">News / Events</a></li>
														<li><a href="http://abcoenergy.com/investors/news-events/press-releases">Press Releases</a></li>
														<li><a href="http://abcoenergy.com/investors/news-events/ir-calendar">IR Calendar</a></li>
														<li><a href="http://abcoenergy.com/investors/news-events/email-alerts">Email Alerts</a></li>
										</ul>
						<ul class="height">
				<li class="title"><a href="http://abcoenergy.com/investors/company-information">Company Info</a></li>
														<li><a href="http://abcoenergy.com/investors/company-information/profile">Profile</a></li>
														<li><a href="http://abcoenergy.com/investors/company-information/presentations">Presentations</a></li>
														<li><a href="http://abcoenergy.com/investors/company-information/management-team">Management Team</a></li>
														<li><a href="http://abcoenergy.com/investors/company-information/contacts">Contacts</a></li>
														<li><a href="http://abcoenergy.com/investors/company-information/faq">FAQ</a></li>
										</ul>
						<ul class="height">
				<li class="title"><a href="http://abcoenergy.com/investors/financial-information">Financial Info</a></li>
														<li><a href="http://abcoenergy.com/investors/financial-information/financials">Financials</a></li>
														<li><a href="http://abcoenergy.com/investors/financial-information/financial-results">Financial Results</a></li>
										</ul>
						<ul class="height">
				<li class="title"><a href="http://abcoenergy.com/investors/stock-data">Stock Data</a></li>
														<li><a href="http://abcoenergy.com/investors/stock-data/quote">Quote</a></li>
														<li><a href="http://abcoenergy.com/investors/stock-data/charts">Charts</a></li>
														<li><a href="http://abcoenergy.com/investors/stock-data/historical-data">Historical Data</a></li>
										</ul>
						<ul class="height">
				<li class="title"><a href="http://abcoenergy.com/investors/sec-filings">SEC Filings</a></li>
														<li><a href="http://abcoenergy.com/investors/sec-filings/all-sec-filings">All SEC Filings</a></li>
														<li><a href="http://abcoenergy.com/investors/sec-filings/annual-reports">Annual Reports</a></li>
														<li><a href="http://abcoenergy.com/investors/sec-filings/quarterly-reports">Quarterly Reports</a></li>
														<li><a href="http://abcoenergy.com/investors/sec-filings/section-16-filings">Section 16 Filings</a></li>
										</ul>
						<ul class="height">
				<li class="title"><a href="http://abcoenergy.com/investors/corporate-governance">Governance</a></li>
														<li><a href="http://abcoenergy.com/investors/corporate-governance/board-of-directors">Board of Directors</a></li>
														<li><a href="http://abcoenergy.com/investors/corporate-governance/governance-docs">Governance Documents</a></li>
										</ul>
		</div>
</div>    </li>            <li class=" " data-submenu-id="submenu-contact">
<a  href="http://abcoenergy.com/contact">Contact</a>
</li>    </ul>
</nav>
</div>

			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'abcosolar' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	<!-- </div>  <!-- container -->
	<!-- </header><!-- #masthead -->

	<div id="content" class="site-content">
