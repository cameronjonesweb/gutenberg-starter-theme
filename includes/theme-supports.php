<?php
/**
 * Theme supports
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'after_setup_theme', 'gutenberg_starter_theme_supports' );

/**
 * Add theme supports
 */
function gutenberg_starter_theme_supports() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	// add_theme_support( 'disable-custom-font-sizes' );
	// add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-color-palette', gutenberg_starter_theme_colour_palette() );
	add_theme_support( 'editor-font-sizes', gutenberg_starter_theme_font_sizes() );
}

/**
 * Get the theme colour palette
 */
function gutenberg_starter_theme_colour_palette() {
	return [
		[
			'name'  => 'White',
			'slug'  => 'white',
			'color' => 'hsl(0, 0%, 100%)',
		],
		[
			'name'  => 'Black',
			'slug'  => 'black',
			'color' => 'hsl(0, 0%, 4%)',
		],
		[
			'name'  => 'Light',
			'slug'  => 'light',
			'color' => 'hsl(0, 0%, 96%)',
		],
		[
			'name'  => 'Dark',
			'slug'  => 'dark',
			'color' => 'hsl(0, 0%, 21%)',
		],
		[
			'name'  => 'Primary',
			'slug'  => 'primary',
			'color' => 'hsl(171, 100%, 41%)',
		],
	];
}

/**
 * Get the theme font sizes
 */
function gutenberg_starter_theme_font_sizes() {
	return [
		[
			'name'      => __( 'Size 7' ),
			'shortName' => __( '7' ),
			'size'      => calc_px_from_rem( .75 ),
			'slug'      => '7',
		],
		[
			'name'      => __( 'Size 6' ),
			'shortName' => __( '6' ),
			'size'      => calc_px_from_rem( 1 ),
			'slug'      => '6',
		],
		[
			'name'      => __( 'Size 5' ),
			'shortName' => __( '5' ),
			'size'      => calc_px_from_rem( 1.25 ),
			'slug'      => '5',
		],
		[
			'name'      => __( 'Size 4' ),
			'shortName' => __( '4' ),
			'size'      => calc_px_from_rem( 1.5 ),
			'slug'      => '4',
		],
		[
			'name'      => __( 'Size 3' ),
			'shortName' => __( '3' ),
			'size'      => calc_px_from_rem( 2 ),
			'slug'      => '3',
		],
		[
			'name'      => __( 'Size 2' ),
			'shortName' => __( '2' ),
			'size'      => calc_px_from_rem( 2.5 ),
			'slug'      => '2',
		],
		[
			'name'      => __( 'Size 1' ),
			'shortName' => __( '1' ),
			'size'      => calc_px_from_rem( 3 ),
			'slug'      => '1',
		],
	];
}

/**
 * Calculate a pixel value from a rem value
 *
 * @param float $rem REM value.
 * @param float $px Pixel value of 1rem.
 *
 * @return float
 */
function calc_px_from_rem( $rem, $px = 16 ) {
	return $rem * $px;
}
