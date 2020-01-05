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
	if ( 'post' === $post_type ) {
		$args['template'] = array(
			array(
				'core/cover',
				array(
					'overlayColor' => 'primary',
					'align'        => 'full',
				),
				array(
					array(
						'core/paragraph',
						array(
							'fontSize' => '1',
							'content'  => 'Noot',
							'align'    => 'center',
						),
					),
				),
			),
			array(
				'core/paragraph',
				array(
					'dropCap' => true,
					'content' => __( 'Lorem ipsum siwt dolor amet...' ),
				),
			),
		);
		// $args['template_lock'] = 'all';
	}
	return $args;
}
