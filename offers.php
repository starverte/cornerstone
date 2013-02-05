<?php
/**
 * Template Name: Offers
 *
 * @package Cornerstone
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<div id="secondary" class="widget-area" role="complementary">
					
                <aside class="widget side-content">
                    <h1 class="widget-title">Design Phase</h1>
					<ul>
                    	<li>Customer Input Session**</li>
                        <li>Design Development</li>
                        <li>Design Commitment Contract**</li>
                        <li>Floor plans and elevation drawings</li>
                        <li>Architectural plans approval**</li>
                        <li>Pricing Approval**</li>
                        <li>Exterior Selection Deadline**</li>
                    </ul>
				</aside>
                <aside class="widget side-content">
                    <h1 class="widget-title">Construction Phase</h1>
					<ul>
                    	<li>Pre-construction Meeting: Establishing Confidence**</li>
                        <li>Foundation/Backfill</li>
                        <li>Framing</li>
                        <li>Interior Selection Deadline**</li>
                        <li>Exterior Finished</li>
                        <li>Rough-in Meeting: Opportunity for any changes**</li>
                        <li>Heating, Plumbing, Electrical (Rough-in)</li>
                        <li>Fixture Selection Deadline**</li>
                        <li>Installation and Drywall</li>
                        <li>Cabinets/Countertops and Trim</li>
                        <li>Interior Paint</li>
                        <li>Flooring and Interior Finishes</li>
                        <li>Outdoor Area Completion</li>
                    </ul>
				</aside>
                <aside class="widget side-content">
                    <h1 class="widget-title">Completion Phase</h1>
					<ul>
                    	<li>Final Quality Inspection**</li>
                        <li>New Home Orientation Meeting**</li>
                        <li>Final Settlement: Letter of Occupancy**</li>
                    </ul>
                    <p>**Customer involvement required</p>
				</aside>
                
		</div><!-- #secondary .widget-area -->

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="tertiary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #tertiary .widget-area -->
		<?php endif; ?>

<?php get_footer(); ?>