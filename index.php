<?php
/**
 * The main template file
 *
 * @package JPHenri
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container" style="padding: 3rem 1rem;">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: 1.5rem;">';
				
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
				
				echo '</div>';

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
