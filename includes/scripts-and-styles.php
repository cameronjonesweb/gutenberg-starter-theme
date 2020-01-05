<?php
/**
 * Theme scripts and styles
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'init', 'gutenberg_starter_register_scripts' );

/**
 * Register all the scripts and styles our theme has
 */
function gutenberg_starter_register_scripts() {
	wp_register_style( 'bulma', get_template_directory_uri() . '/css/bulma/bulma.min.css', array(), filemtime( get_template_directory() . '/css/bulma/bulma.min.css' ) );
	wp_register_style( 'theme', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'gutenberg_starter_common_scripts' );

/**
 * Enqueue scripts and styles on the front end only
 */
function gutenberg_starter_common_scripts() {
	wp_enqueue_style( 'bulma' );
	wp_enqueue_style( 'theme' );

	wp_enqueue_script( 'jquery' );
}

add_action( 'enqueue_block_editor_assets', 'gutenberg_starter_block_editor_assets' );

/**
 * Enqueue scripts and styles for the block editor only
 */
function gutenberg_starter_block_editor_assets() {
}

add_action( 'enqueue_block_assets', 'gutenberg_starter_block_assets' );

/**
 * Enqueue scripts and styles for blocks both on the front end and in the block editor
 */
function gutenberg_starter_block_assets() {
}

add_action( 'after_setup_theme', 'gutenberg_starter_block_styles' );

/**
 * Register custom block styles
 */
function gutenberg_starter_block_styles() {
}
