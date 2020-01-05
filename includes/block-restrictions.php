<?php
/**
 * Blacklist or whitelist for blocks
 *
 * @package gutenberg-starter-theme
 */

add_filter( 'allowed_block_types', 'gutenberg_starter_blocks_whitelist', 10, 2 );

/**
 * Only allow blocks declared in whitelist
 *
 * @param array   $block_types Allowed block types.
 * @param WP_Post $post Post object.
 *
 * @return array
 */
function gutenberg_starter_blocks_whitelist( $block_types, $post ) {
	return $block_types;
}
