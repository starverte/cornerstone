<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Cornerstone
 */
?>

	</div><!-- #main -->

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
    <div id="site-generator">
    	&copy;<?php echo date('Y'); ?> Content by Cornerstone Construction LLC. <br />
        970.663.1536 | <a href="http://g.co/maps/6e8jp">1991 E 11th St Loveland, CO 80537</a> | <a href="mailto:info@fccornerstone.com">info@fccornerstone.com</a> <br />
        <?php do_action( 'cornerstone_credits' ); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cornerstone' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'cornerstone' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cornerstone' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'cornerstone' ), 'Cornerstone', '<a href="http://starverte.com" rel="designer">Star Verte LLC</a>' ); ?>
	<a id="bbb" title="Click for the Business Review of Cornerstone Construction LLC, a Home Builders in Loveland CO" href="http://www.bbb.org/northern-colorado/business-reviews/home-builders/cornerstone-construction-in-loveland-co-46068240#sealclick" target="_blank"><img alt="Click for the BBB Business Review of this Home Builders in Loveland CO" style="border: 0;" src="http://seal-wynco.bbb.org/seals/blue-seal-96-50-cornerstoneconstructionllc-46068240.png" /></a>
	<div id="social">
		<a href="http://www.facebook.com/fccornerstone"><img src="<?php echo get_template_directory_uri(); ?>/images/f_icon.png" />Like us on Facebook</a>
		<a href="http://www.houzz.com/pro/cornerstone-constructionllc/cornerstone-construction-llc"><img src="<?php echo get_template_directory_uri(); ?>/images/h_icon.png" />View our ideabook on Houzz</a>
	</div>
    </div>
</footer><!-- #colophon -->

<script>
jQuery(document).ready(function($) {
  $('#slider-with-blocks-1').royalSlider({
    arrowsNav: true,
    arrowsNavAutoHide: false,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'none',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    numImagesToPreload: 6,
    transitionType: 'fade',
    keyboardNavEnabled: true,
    block: {
      delay: 400
    }
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>