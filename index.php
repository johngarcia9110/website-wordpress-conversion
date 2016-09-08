<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abcosolar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page-hero  overlay" style="background: url(http://abcoenergy.com/wp-content/uploads/2016/09/image-4.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"></div>


			<div class="container">
				<div class="row js-same-height-row">
					<div class="col-md-3 sidebar-nav js-same-height">
						<a class="visible-xs visible-sm mobile-sub-nav-trigger collapsed" data-toggle="collapse" data-target="#sub-navigation">
							<div class="trigger-container">
								<div class="meat"></div>
								<div class="meat"></div>
								<div class="meat"></div>
							</div>
							News</a>
						<nav class="collapse sb-nav" id="sub-navigation">
							<ul>
								<li class="active "><a href="http://abcoenergy.com/news/">Press Releases</a>
								</li>
								<li class=" "><a href="http://abcoenergy.com/events/">Events</a>
								</li>

							</ul>
						</nav>
					</div>
					<div class="col-md-9 js-same-height">
						<div class="main-content">
							<h1>Press Releases</h1>
							<hr>
							<?php
								if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text">
										<?php single_post_title(); ?>
									</h1>
								</header>

								<?php
									endif;

									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'news' );

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'news' );

								endif; ?>


						</div>
					</div>

				</div>
			</div>
			<!-- //container-->
			<div class="subscribe prefooter">
				<h2>Sign up for email alerts</h2>
				<p>Be the first to receive breaking news</p>
				<a href="investors/news-events/email-alerts.html" class="btn">Sign up today</a>
			</div>



		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php
get_footer();
