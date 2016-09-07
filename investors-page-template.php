<?php
/**
 * Template Name: Investors Page Template
 *
 */
get_header(); ?>

    <div class="page-hero  overlay" style="background: url(../c.eqcdn.com/_a1c5a9358f82ef3cec846a8ca3d8ad2d/abcosolar/db/223/380/image.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"></div>
    <div class="container">
        <div class="row js-same-height-row">
            <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Investor Sidebar') ) : ?>
            <?php endif; ?>
            <div class="col-md-9 js-same-height">
                <div class="main-content">
                    <?php while ( have_posts() ) : the_post();
                        if (is_page (array('investors')))
                        
        				    get_template_part( 'template-parts/content', 'ir-overview' );
                        
                        else
                            get_template_part( 'template-parts/content', 'content');
                            
        				// If comments are open or we have at least one comment, load up the comment template.
        				if ( comments_open() || get_comments_number() ) :
        					comments_template();
        				endif;
        
        			endwhile; // End of the loop.
        			?>
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

    <?php
get_footer();