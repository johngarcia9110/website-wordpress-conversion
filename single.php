<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abcosolar
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="page-hero  overlay" style="background: url(../../../../../c.eqcdn.com/_6631f2d73f69cebadfd3a44607875b9a/abcosolar/db/223/381/image.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"></div>
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
                                <li class=" "><a href="http://abcoenergy.com/news/">Press Releases</a>
                                </li>
                                <li class=" "><a href="http://abcoenergy.com/events/">Events</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9 js-same-height">
                        <div class="main-content">

                            <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

		endwhile; // End of the loop.
		?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //container-->




        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
