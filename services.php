<?php
/**
 * Template Name: Services
 * Description: A template for displaying services horizontally
 *
 * @package Cornerstone
 */

get_header(); ?>

    <div id="primary" class="full-width">
      <div id="content" role="main">

        <div id="remodel" class="services">
                    <h2>Renovations and Remodeling</h2>
                        <?php wp_nav_menu( array('menu' => 'Renovations and Remodeling' )); ?>
                 </div>
                <div id="customconcepts" class="services">
                    <h2>Custom Outdoor and Indoor Concepts</h2>
                        <?php wp_nav_menu( array('menu' => 'Custom Outdoor and Indoor Concepts' )); ?>
                 </div>
                <div id="com" class="services">
                    <h2>Light Commercial</h2>
                        <?php wp_nav_menu( array('menu' => 'Light Commercial' )); ?>
                 </div>
                <div id="newconstruct" class="services">
                    <h2>New Construction</h2>
                        <?php wp_nav_menu( array('menu' => 'New Construction' )); ?>
                 </div>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>