<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package JPHenri
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found" style="text-align: center; padding: 5rem 1rem;">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title" style="font-size: 3rem; font-weight: 700;"><?php esc_html_e( '404', 'jphenri' ); ?></h1>
					<p style="font-size: 1.5rem; margin-top: 1rem;"><?php esc_html_e( 'Page non trouvée', 'jphenri' ); ?></p>
				</header><!-- .page-header -->

				<div class="page-content" style="max-width: 600px; margin: 2rem auto;">
					<p><?php esc_html_e( 'Il semble que rien n\'ait été trouvé à cet endroit. Peut-être essayer une recherche?', 'jphenri' ); ?></p>

					<?php get_search_form(); ?>

					<div style="margin-top: 2rem;">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
							<?php esc_html_e( 'Retour à l\'accueil', 'jphenri' ); ?>
						</a>
					</div>
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
