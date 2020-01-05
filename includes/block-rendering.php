<?php
/**
 * Block rendering modifications
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_filter( 'render_block_data', 'gutenberg_starter_filter_block_rendering' );

/**
 * Filters the block markup
 *
 * @param array $block Block object.
 *
 * @return array
 */
function gutenberg_starter_filter_block_rendering( $block ) {
	return $block;
}

add_filter( 'render_block_data', 'gutenberg_starter_custom_block_template' );

/**
 * Allows using template files to override block markup
 *
 * @param array $block Block object.
 *
 * @return array
 */
function gutenberg_starter_custom_block_template( $block ) {
	return $block;
}
