<?php
/**
 * Archive entry template file
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
?>
<article <?php post_class( 'wrap' ); ?>>
	<h2 class="is-size-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
</article>
