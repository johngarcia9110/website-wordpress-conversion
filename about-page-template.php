<?php
/**
 * Template Name: About Pages Template
 *
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <div class="page-hero  overlay" style="background: url(http://abcoenergy.com/wp-content/uploads/2016/09/hero-about.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"></div>
            <div class="container">
                <div class="row js-same-height-row">
                    <div class="col-md-3 sidebar-nav js-same-height">
                        <a class="visible-xs visible-sm mobile-sub-nav-trigger collapsed" data-toggle="collapse" data-target="#sub-navigation">
                            <div class="trigger-container">
                                <div class="meat"></div>
                                <div class="meat"></div>
                                <div class="meat"></div>
                            </div>
                            About</a>
                        <nav class="collapse sb-nav" id="sub-navigation">
                            <ul>
                                <li class=" "><a href="http://abcoenergy.com/about/">Overview</a>
                                </li>
                                <li class=" "><a href="http://abcoenergy.com/about/mission-statement/">Mission Statement</a>
                                </li>
                                <li class=" "><a href="http://abcoenergy.com/about/key-projects/">Key Projects</a>
                                </li>
                                <li class=" "><a href="http://abcoenergy.com/about/market-strategy">Market Strategy</a>
                                </li>
                                <li class=" "><a href="http://abcoenergy.com/about/management-team/">Management Team</a>
                                </li>
                                <li class=" "><a href="http://abcoenergy.com/about/board-of-directors/">Board of Directors</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6 js-same-height">
                        <div class="main-content">

                            <?php
                    			while ( have_posts() ) : the_post();

                    				get_template_part( 'template-parts/content', 'page' );

                    				// If comments are open or we have at least one comment, load up the comment template.
                    				if ( comments_open() || get_comments_number() ) :
                    					comments_template();
                    				endif;

                    			endwhile; // End of the loop.
                    			?>

                        </div>
                    </div>

                    <div class="col-md-3 right-sidebar-column">
                        <div class="right-sidebar js-same-height">
                            <div class="side-module">
                                <h3>An Expanding Market</h3>
                                <p>The solar market is expected to reach $125 billion by 2016 and ABCO Energy plans on being a very large part of this growth.</p> <a href="http://abcoenergy.com/about/market-strategy/" class="cta">View Market Strategy</a></div>
                            <div class="side-module">
                                <div class="text">
                                    <h3>Latest News</h3>
                                    <div class="single-new">
                                        <span class="date">Apr 19, 2016</span>
                                        <a href="news/press-releases/detail/11/abco-energy-inc-announces-launch-of-large-phoenix.html">ABCO Energy, Inc. Announces Launch of Large Phoenix, Arizona Commercial Project</a>
                                    </div>
                                </div>
                                <a href="news.html" class="cta">View All News</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //container-->






            <?php
get_footer();
