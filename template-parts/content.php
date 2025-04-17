<?php
/**
 * Template part for displaying posts
 *
 * @package JPHenri
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( is_singular() ? '' : 'card' ); ?>>
	<?php if ( is_singular() ) : ?>
		<header class="entry-header" style="margin-bottom: 2rem;">
			<?php the_title( '<h1 class="entry-title" style="font-size: 2.5rem; font-weight: 700;">', '</h1>' ); ?>
			<div class="entry-meta" style="color: var(--muted-foreground); margin-top: 0.5rem;">
				<?php
				jphenri_posted_on();
				jphenri_posted_by();
				?>
			</div>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail" style="margin-bottom: 2rem;">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jphenri' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jphenri' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<footer class="entry-footer" style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid var(--border);">
			<?php jphenri_entry_footer(); ?>
		</footer>
	<?php else : ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="card-image">
				<?php the_post_thumbnail( 'medium_large' ); ?>
			</div>
		<?php else : ?>
			<div class="card-image">
				<span style="font-size: 0.875rem;">
					<?php esc_html_e( 'Image de l\'article', 'jphenri' ); ?>
				</span>
			</div>
		<?php endif; ?>
		
		<div class="card-content">
			<p class="card-meta"><?php echo get_the_date(); ?></p>
			<?php the_title( '<h3 class="card-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' ); ?>
			<div class="card-description"><?php the_excerpt(); ?></div>
			<a href="<?php the_permalink(); ?>" class="card-link">
				<?php esc_html_e( 'Lire l\'article', 'jphenri' ); ?>
				<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
			</a>
		</div>
	<?php endif; ?>
</article>
