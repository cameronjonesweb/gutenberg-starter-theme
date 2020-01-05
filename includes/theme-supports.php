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
}
