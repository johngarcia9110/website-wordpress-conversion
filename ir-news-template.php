<?php
/**
 * Template Name: IR News Page Template
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
                    <?php if(is_page (array('press-releases'))){
                        the_title( '<h1 class="entry-title">', '</h1>' );
                        query_posts('cat=press-releases');
                        while (have_posts()) : the_post();
                        the_title( '<h2 class="entry-title media-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    ?>
                    <div class="entry-meta date">
                        <?php abcosolar_posted_on(); ?>
                    </div>
                    <!-- .entry-meta -->
                    <?php endwhile;?>
                    <?php }elseif(is_page(array('ir-calendar', 'email-alerts'))){
                  while (have_posts()) : the_post();
                    get_template_part( 'template-parts/content', 'page');

                  endwhile;}
                ?>






                </div>
            </div>

        </div>
    </div>
    <!-- //container-->


    <?php
get_footer();
