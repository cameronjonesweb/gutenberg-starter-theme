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
	if ( isset( $block['attrs']['fontSize'] ) ) {
		$block['innerContent'] = str_replace( 'has-' . $block['attrs']['fontSize'] . '-font-size', 'is-size-' . $block['attrs']['fontSize'], $block['innerContent'] );
	}
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
	$block_name = str_replace( '/', '-', $block['blockName'] );
	if ( ! empty( locate_template( 'template-parts/blocks/' . $block_name . '.php' ) ) ) {
		ob_start();
		include get_template_directory() . '/template-parts/blocks/' . $block_name . '.php';
		$block['innerContent'] = array( ob_get_contents() );
		ob_end_clean();
	}
	return $block;
}
