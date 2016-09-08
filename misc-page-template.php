<?php
/**
 * Template Name: Misc Page Template
 *
 */
get_header(); ?>

    <div class="page-hero  overlay" style="background: url(../c.eqcdn.com/_6631f2d73f69cebadfd3a44607875b9a/abcosolar/files/theme/images/hero-about.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"></div>

    <div class="container">
        <div class="row js-same-height-row">
            <div class="col-md-9 js-same-height">
                <div class="main-content">
                    <?php
                        while (have_posts()): the_post();

                        get_template_part('template-parts/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()):
                            comments_template();
                        endif;

                        endwhile; // End of the loop.
                        ?
                        >
                </div>
            </div>

            <div class="col-md-3 right-sidebar-column">
                <div class="right-sidebar js-same-height">
                    <div class="side-module">
                        <h3>A One-Stop Solar Partner</h3>
                        <p>Our subsidiaries offer full-service, licensed electrical contractors helping with every stage of solar panel installation; from determining the size, financing options, tax and utility incentives.</p> <a href="subsidiaries/overview.html"
                            class="cta">View Subsidiaries</a></div>
                    <div class="side-module">
                        <h3>An Expanding Market</h3>
                        <p>The solar market is expected to reach $125 billion by 2016 and ABCO Energy plans on being a very large part of this growth.</p> <a href="about/market-strategy.html" class="cta">View Market Strategy</a></div>
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
