<?php
/**
 * Template part for displaying projects
 *
 * @package JPHenri
 */

?>

<?php if ( is_singular() ) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="margin-bottom: 2rem;">
		<?php the_title( '<h1 class="entry-title" style="font-size: 2.5rem; font-weight: 700;">', '</h1>' ); ?>
		
		<?php
		$client = get_post_meta( get_the_ID(), '_project_client', true );
		$year = get_post_meta( get_the_ID(), '_project_year', true );
		$url = get_post_meta( get_the_ID(), '_project_url', true );
		
		if ( $client || $year || $url ) :
		?>
		<div class="project-meta" style="margin-top: 1rem; display: flex; flex-wrap: wrap; gap: 1.5rem;">
			<?php if ( $client ) : ?>
			<div>
				<strong><?php esc_html_e( 'Client:', 'jphenri' ); ?></strong>
				<span><?php echo esc_html( $client ); ?></span>
			</div>
			<?php endif; ?>
			
			<?php if ( $year ) : ?>
			<div>
				<strong><?php esc_html_e( 'Année:', 'jphenri' ); ?></strong>
				<span><?php echo esc_html( $year ); ?></span>
			</div>
			<?php endif; ?>
			
			<?php if ( $url ) : ?>
			<div>
				<strong><?php esc_html_e( 'Site web:', 'jphenri' ); ?></strong>
				<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( preg_replace( '#^https?://#', '', $url ) ); ?></a>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail" style="margin-bottom: 2rem;">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		
		<?php
		$features = get_post_meta( get_the_ID(), '_project_features', true );
		if ( $features ) :
			$features_array = explode( "\n", $features );
		?>
		<div class="project-features" style="margin-top: 2rem; padding: 1.5rem; background-color: var(--muted); border-radius: 0.5rem;">
			<h3><?php esc_html_e( 'Caractéristiques clés', 'jphenri' ); ?></h3>
			<ul style="list-style-type: disc; padding-left: 1.5rem; margin-top: 1rem;">
				<?php foreach ( $features_array as $feature ) : ?>
					<li><?php echo esc_html( trim( $feature ) ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</article>

<?php else : ?>

<div class="card">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="card-image">
			<?php the_post_thumbnail( 'medium_large' ); ?>
		</div>
	<?php else : ?>
		<div class="card-image">
			<span style="font-size: 0.875rem;">
				<?php esc_html_e( 'Image du projet', 'jphenri' ); ?> <?php the_title(); ?>
			</span>
		</div>
	<?php endif; ?>
	<div class="card-content">
		<h3 class="card-title"><?php the_title(); ?></h3>
		<div class="card-description"><?php the_excerpt(); ?></div>
		<?php
		$features = get_post_meta( get_the_ID(), '_project_features', true );
		if ( $features ) :
			$features_array = explode( "\n", $features );
		?>
		<div style="margin-top: 0.5rem;">
			<h4 style="font-size: 0.875rem; font-weight: 600; margin-bottom: 0.25rem;">
				<?php esc_html_e( 'Caractéristiques clés:', 'jphenri' ); ?>
			</h4>
			<ul style="list-style-type: disc; padding-left: 1.25rem; font-size: 0.875rem; color: var(--muted-foreground);">
				<?php foreach ( $features_array as $feature ) : ?>
					<?php if ( trim( $feature ) ) : ?>
						<li><?php echo esc_html( trim( $feature ) ); ?></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="card-link">
			<?php esc_html_e( 'Voir le projet', 'jphenri' ); ?>
			<i class="fas fa-chevron-right" style="margin-left: 0.25rem;"></i>
		</a>
	</div>
</div>

<?php endif; ?>
