<?php
/**
 * Index template file
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php get_header(); ?>
	<div id="content">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				$template = is_singular() ? 'single' : 'archive';
				get_template_part( 'template-parts/content/' . $template, get_post_type() );
			}
		} else {
			get_template_part( 'template-parts/content/no-posts' );
		}
		the_posts_pagination();
		?>
	</div>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>
