<?php
/**
 * Rivers Lawn Theme
 *
 * This file contains the widget functions for this theme.
 *
 * @package   StudioPro
 * @link      https://seothemes.com/themes/rivers-lawn
 * @author    SEO Themes
 * @copyright Copyright © 2017 SEO Themes
 * @license   GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

// Register Front Page 1 widget area.
genesis_register_sidebar( array(
	'id'           => 'front-page-1',
	'name'         => __( 'Front Page 1', 'rivers-lawn' ),
	'description'  => __( 'Front page 1 widget area.', 'rivers-lawn' ),
	'before_title' => '<h1 itemprop="headline">',
	'after_title'  => '</h1>',
) );

// Register Front Page 2 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-2',
	'name'        => __( 'Front Page 2', 'rivers-lawn' ),
	'description' => __( 'Front page 2 widget area.', 'rivers-lawn' ),
) );

// Register Front Page 3 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-3',
	'name'        => __( 'Front Page 3', 'rivers-lawn' ),
	'description' => __( 'Front page 3 widget area.', 'rivers-lawn' ),
) );

// Register Front Page 4 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-4',
	'name'        => __( 'Front Page 4', 'rivers-lawn' ),
	'description' => __( 'Front page 4 widget area.', 'rivers-lawn' ),
) );

// Register Front Page 5 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-5',
	'name'        => __( 'Front Page 5', 'rivers-lawn' ),
	'description' => __( 'Front page 5 widget area.', 'rivers-lawn' ),
) );

// Register Front Page 6 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-6',
	'name'        => __( 'Front Page 6', 'rivers-lawn' ),
	'description' => __( 'Front page 6 widget area.', 'rivers-lawn' ),
) );

// Register Before Footer widget area.
genesis_register_sidebar( array(
	'id'          => 'before-footer',
	'name'        => __( 'Before Footer', 'rivers-lawn' ),
	'description' => __( 'Before Footer widget area.', 'rivers-lawn' ),
) );

add_action( 'genesis_before_footer_wrap', 'riverslawn_before_footer_widget_area', 0 );
/**
 * Display Before Footer widget area.
 *
 * @since  1.0.0
 *
 * @return null
 */
function riverslawn_before_footer_widget_area() {

	genesis_widget_area( 'before-footer', array(
		'before' => '<div class="before-footer widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}
