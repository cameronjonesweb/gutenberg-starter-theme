<?php
/**
 * Header template file
 *
 * @package gutenberg-starter-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
?>
<header>
	<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
		<div class="container">
			<div class="navbar-brand">
				<div class="navbar-item">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						printf(
							'<a href="%1$s" class="has-text-white">%2$s</a>',
							esc_url( home_url() ),
							esc_html( get_bloginfo( 'name' ) )
						);
					}
					?>
				</div>
				<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
			<div class="navbar-menu">
				<div class="navbar-start">
				</div>
				<div class="navbar-end">
					<div class="navbar-item">
						<div class="buttons">
							<a class="button is-link" href="<?php echo esc_url( admin_url() ); ?>">
								<strong><?php echo is_user_logged_in() ? esc_html__( 'Dashboard' ) : esc_html__( 'Log in' ); ?></strong>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
