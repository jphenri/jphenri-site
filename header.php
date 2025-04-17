<?php
/**
 * The header for our theme
 *
 * @package JPHenri
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jphenri' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container header-container">
			<div class="site-branding">
				<?php
				if ( has_custom_logo() ) :
					the_custom_logo();
				else :
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>

			<div class="header-actions">
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary">
					<?php esc_html_e( 'Prendre rendez-vous', 'jphenri' ); ?>
				</a>
			</div>

			<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<i class="fas fa-bars"></i>
			</button>
		</div>

		<div id="mobile-menu" class="mobile-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'mobile-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
			<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary" style="display: block; margin-top: 1rem; text-align: center;">
				<?php esc_html_e( 'Prendre rendez-vous', 'jphenri' ); ?>
			</a>
		</div>
	</header>
