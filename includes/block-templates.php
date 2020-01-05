<?php
/**
 * Block templates
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_filter( 'register_post_type_args', 'gutenberg_starter_block_templates', 10, 2 );

/**
 * Add block templates to post types
 *
 * @param array  $args Post type args.
 * @param string $post_type Post type slug.
 *
 * @return array
 */
function gutenberg_starter_block_templates( $args, $post_type ) {
	return $args;
}
