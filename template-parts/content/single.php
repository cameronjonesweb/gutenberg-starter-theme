<?php
/**
 * Singular template file
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
?>
<article <?php post_class( 'wrap-items' ); ?>>
	<h1 class="is-size-1"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
</article>
