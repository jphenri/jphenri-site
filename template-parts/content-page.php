<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package JPHenri
 */

?>

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
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jphenri' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>
