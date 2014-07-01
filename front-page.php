<?php
/**
 * Template Name: Front
 * Description: The home page when static home page is selected
 *
 * @package Jewel
 */

get_header(); ?>

<div id="primary" class="full-width">
  <div id="content" role="main">

    <?php echo do_shortcode('[nivoslider slug="splash"]'); ?>

    <div id="mid">

      <div id="link-gallery">
        <a href="gallery"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery.png" />
        <h4>View our Gallery</h4></a>
      </div><!-- #link-gallery -->

      <div id="link-quote">
        <a href="contact/quote"><img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" />
        <h4>Request a Quote</h4></a>
      </div><!-- #link-quote -->

      <div id="welcome">
        <p>Build trust through <strong>integrity</strong>,<br />
        <span style="margin-left: 25px;">Expect quality <strong>craftsmanship</strong>,</span> <br />
        <span style="margin-left: 50px;">Aim for nothing short of <strong>excellence</strong></span> <br /></p>
      </div><!-- #welcome -->

    </div><!-- #mid -->

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>