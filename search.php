<?php
/**
 * The template for displaying search results pages
 *
 * @package JPHenri
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container" style="padding: 3rem 1rem;">
			<?php if ( have_posts() ) : ?>

				<header class="page-header" style="margin-bottom: 2rem; text-align: center;">
					<h1 class="section-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Résultats de recherche pour: %s', 'jphenri' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: 1.5rem;">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
					?>
				</div>

				<?php
				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
