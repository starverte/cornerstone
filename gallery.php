<?php
/**
 * Template Name: Gallery
 * Description: Gallery cover page
 *
 * @package Cornerstone
 */

get_header(); ?>

    <div id="primary" class="full-width">
      <div id="content" role="main">

        <div class="g-row" id="row1">
                        <a href="<?php bloginfo('url'); ?>/gallery/additions"><div class="g-cell g-text">
                            <h1>Additions</h1>
                        </div></a>
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/additions"><img src="<?php echo get_template_directory_uri(); ?>/images/add1.png" /></a>
                        </div>
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/light-construction"><img src="<?php echo get_template_directory_uri(); ?>/images/lc1.png" /></a>
                        </div>
                        <div class="g-cell g-cell4">
                            <a href="<?php bloginfo('url'); ?>/gallery/light-construction"><img src="<?php echo get_template_directory_uri(); ?>/images/lc2.png" /></a>
                        </div>
                </div>

                <div class="g-row" id="row2">
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/additions"><img src="<?php echo get_template_directory_uri(); ?>/images/add2.png" /></a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/gallery/custom-concepts"><div class="g-cell g-text">
                            <h1>Custom Concepts</h1>
                        </div></a>
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/custom-concepts"><img src="<?php echo get_template_directory_uri(); ?>/images/cc1.png" /></a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/gallery/light-commercial"><div class="g-cell g-cell4 g-text">
                            <h1>Light Commercial</h1>
                        </div></a>

                </div>

                <div class="g-row" id="row3">
                        <a href="<?php bloginfo('url'); ?>/gallery/new-construction"><div class="g-cell g-text">
                            <h1>New Construction</h1>
                        </div></a>
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/custom-concepts"><img src="<?php echo get_template_directory_uri(); ?>/images/cc2.png" /></a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/gallery/remodels"><div class="g-cell g-text">
                            <h1>Remodels</h1>
                        </div></a>
                        <div class="g-cell g-cell4">
                            <a href="<?php bloginfo('url'); ?>/gallery/small-projects"><img src="<?php echo get_template_directory_uri(); ?>/images/sp.png" /></a>
                        </div>
                </div>

                <div class="g-row" id="row4">
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/new-construction"><img src="<?php echo get_template_directory_uri(); ?>/images/nc1.png" /></a>
                        </div>
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/remodels"><img src="<?php echo get_template_directory_uri(); ?>/images/r1.png" /></a>
                        </div>
                        <div class="g-cell">
                            <a href="<?php bloginfo('url'); ?>/gallery/remodels"><img src="<?php echo get_template_directory_uri(); ?>/images/r2.png" /></a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/gallery/small-projects"><div class="g-cell g-cell4 g-text">
                            <h1>Small Projects</h1>
                        </div></a>
                </div>

                <div style="clear:both;float:none;height:5px;"></div>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>