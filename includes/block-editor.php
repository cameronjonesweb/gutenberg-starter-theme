<?php
/**
 * Block editor availability
 *
 * @package gutenberg-starter-theme
 */

add_filter( 'use_block_editor_for_post', 'gutenberg_starter_use_block_editor', 10, 2 );

/**
 * Conditionally disable the block editor
 *
 * @param bool    $use_block_editor Whether a post is able to be edited in the block editor.
 * @param WP_Post $post Post object.
 *
 * @return bool
 */
function gutenberg_starter_use_block_editor( $use_block_editor, $post ) {
	return $use_block_editor;
}
