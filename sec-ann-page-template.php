<?php
/**
 * Template Name: SEC-Annual Filings Page Template
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

        			endwhile; // End of the loop.
        			?>
          <?php wp_reset_postdata(); ?>
          <div class="spr-ir-sec-filings" style="width: 600;">
            <div class="spr-ir-sec-filters">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spr-ir-table">
                <tbody>
                  <tr>
                    <td class="quick-filter"><a href="http://www.abcoenergy.com/investors/sec-filings">All SEC Filings</a></td>
                    <td class="quick-filter"><a href="http://www.abcoenergy.com/investors/sec-filings/annual-reports">Annual Reports</a></td>
                    <td class="quick-filter"><a href="http://www.abcoenergy.com/investors/sec-filings/quarterly-reports">Quarterly Reports</a></td>
                    <td class="quick-filter"><a href="http://www.abcoenergy.com/investors/sec-filings/section-16-filings">Section 16 Filings</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spr-ir-table">
            <thead class="qm_heading_bar">
              <tr>
                <td class="spr-sec-date-head qm_heading_text">Date</td>
                <td class="spr-sec-form-head qm_heading_text">Form</td>
                <td class="spr-sec-desc-head qm_heading_text">Description</td>
                <td class="spr-sec-desc-head qm_heading_text" width="38">Docs</td>
                <td class="spr-sec-desc-head qm_heading_text" width="58">XBRL</td>
              </tr>
            </thead>
            <tbody>
              <?php $args = array(
                  	'numberposts'	=> -1,
                  	'post_type'		=> 'sec_filings',
                  	'meta_key'		=> 'category',
                  	'meta_value'	=> 'ann',
                    'orderby'     => 'meta_value_num',
                    'order'
                  );

                  $the_query = new WP_Query( $args );
                  ?>
              <?php while($the_query->have_posts()) : $the_query->the_post();?>
              <tr>
                <td class="spr-sec-date">
                  <?php the_field('date'); ?>
                </td>
                <td class="spr-sec-form">
                  <?php the_field('form_type'); ?>
                </td>
                <td class="spr-sec-desc">
                  <?php the_field('sec-description'); ?>
                </td>
                <td><a href="<?php the_field('docs'); ?>">PDF</a></td>
                <td>
                  <?php if( $xbrl ){?>
                  <a href="<?php echo $xbrl ?>">.xlxs</a>
                  <?php }else{
                  echo " ";
                } ?>
                  <?php if ( $raw ){?>
                  <a href="<?php echo $raw ?>">.raw</a>
                  <?php }else{ echo " ";} ?>
                </td>
              </tr>



              <?php endwhile; ?>
          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- //container-->


  <?php
get_footer();
