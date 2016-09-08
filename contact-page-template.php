<?php
/**
 * Template Name: Contact Page Template
 *
 */
get_header(); ?>
    <div class="page-hero  overlay" style="background: url(http://abcoenergy.com/wp-content/uploads/2016/09/image-3.jpg);background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
    </div>
    <div class="container">
        <div class="row js-same-height-row">
            <div class="col-md-9 js-same-height">
                <div class="main-content">
                    <div class="row">
                        <div class="contact-info col-md-6">
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
                        <div class="contact-form col-md-5">
                            <form method="post" action="http://www.abcoenergy.com/form-submit" id="contact-form" class="contact-form validate-form">
                                <input type="hidden" name="f" value="contact-form" />
                                <fieldset>
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name" value="" class="required form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" value="" class="required form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="" class="required email form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="comments">Comments:</label>
                                        <textarea name="comments" id="comments" cols="30" rows="6" class="form-control"></textarea>
                                    </div>

                                    <button class="btn" type="submit">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 right-sidebar-column">
                <div class="right-sidebar js-same-height">
                    <div class="side-module">
                        <h3>A One-Stop Solar Partner</h3>
                        <p>Our subsidiaries offer full-service, licensed electrical contractors helping with every stage of solar panel installation; from determining the size, financing options, tax and utility incentives.</p> <a href="http://abcoenergy.com/subsidiaries/"
                            class="cta">View Subsidiaries</a></div>
                    <div class="side-module">
                        <h3>An Expanding Market</h3>
                        <p>The solar market is expected to reach $125 billion by 2016 and ABCO Energy plans on being a very large part of this growth.</p> <a href="http://abcoenergy.com/about/market-strategy/" class="cta">View Market Strategy</a></div>
                    <div class="side-module">
                        <div class="text">
                            <h3>Latest News</h3>
                            <div class="single-new">
                                <span class="date">Apr 19, 2016</span>
                                <p>ABCO Energy, Inc. Announces Launch of Large Phoenix, Arizona Commercial Project</p>
                            </div>
                        </div>
                        <a href="http://abcoenergy.com/news/" class="cta">View All News</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- / / container-- >
    <div class="subscribe prefooter">
    <h2>Sign up for email alerts</h2>
    <p>Be the first to receive breaking news</p>
    <a href="investors/news-events/email-alerts.html" class="btn">Sign up today</a>
</div>



<?php
get_footer();
