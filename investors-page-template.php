<?php
/**
 * Template Name: Investors Page Template
 *
 */
get_header(); ?>

    <div class="page-hero  overlay" style="background: url(http://abcoenergy.com/wp-content/uploads/2016/09/image-2.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"></div>
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
                            get_template_part( 'template-parts/content', 'page');

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


    <?php
get_footer();
