<?php
/**
 * Template part for displaying results in search pages
 *
 * @package JPHenri
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="card-image">
			<?php the_post_thumbnail( 'medium_large' ); ?>
		</div>
	<?php endif; ?>
	
	<div class="card-content">
		<?php the_title( sprintf( '<h3 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<p class="card-meta"><?php echo get_the_date(); ?></p>
		<?php endif; ?>

		<div class="card-description">
			<?php the_excerpt(); ?>
		</div>
		
		<a href="<?php the_permalink(); ?>" class="card-link">
			<?php 
			if ( 'post' === get_post_type() ) {
				esc_html_e( 'Lire l\'article', 'jphenri' );
			} elseif ( 'service' === get_post_type() ) {
				esc_html_e( 'En savoir plus', 'jphenri' );
			} elseif ( 'project' === get_post_type() ) {
				esc_html_e( 'Voir le projet', 'jphenri' );
			} else {
				esc_html_e( 'Voir plus', 'jphenri' );
			}
			?>
			<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
