<?php
/**
 * The template for displaying the footer
 *
 * @package JPHenri
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-content">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | <?php esc_html_e( 'Consultant en IA et Spécialiste en Optimisation Numérique', 'jphenri' ); ?>. <?php esc_html_e( 'Tous droits réservés', 'jphenri' ); ?>.</p>
				
				<?php if ( jphenri_get_option( 'social_linkedin' ) || jphenri_get_option( 'social_twitter' ) ) : ?>
				<div class="social-links" style="margin-top: 1rem;">
					<?php if ( $linkedin = jphenri_get_option( 'social_linkedin' ) ) : ?>
					<a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" rel="noopener noreferrer" style="margin: 0 0.5rem;">
						<i class="fab fa-linkedin"></i>
					</a>
					<?php endif; ?>
					
					<?php if ( $twitter = jphenri_get_option( 'social_twitter' ) ) : ?>
					<a href="<?php echo esc_url( $twitter ); ?>" target="_blank" rel="noopener noreferrer" style="margin: 0 0.5rem;">
						<i class="fab fa-twitter"></i>
					</a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
