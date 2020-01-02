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
