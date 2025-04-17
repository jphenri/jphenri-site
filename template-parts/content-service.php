<?php
/**
 * Template part for displaying services
 *
 * @package JPHenri
 */

?>

<?php if ( is_singular() ) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="margin-bottom: 2rem;">
		<?php the_title( '<h1 class="entry-title" style="font-size: 2.5rem; font-weight: 700;">', '</h1>' ); ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail" style="margin-bottom: 2rem;">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>

<?php else : ?>

<div class="icon-box">
	<div class="icon-circle">
		<?php 
		$icon = get_post_meta( get_the_ID(), '_service_icon', true );
		?>
		<i class="fas <?php echo esc_attr( $icon ? $icon : 'fa-cog' ); ?>"></i>
	</div>
	<h3 class="icon-title"><?php the_title(); ?></h3>
	<p class="icon-description"><?php echo get_the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>" class="card-link">
		<?php esc_html_e( 'En savoir plus', 'jphenri' ); ?>
		<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
	</a>
</div>

<?php endif; ?>
