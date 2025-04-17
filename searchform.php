<?php
/**
 * Custom search form
 *
 * @package JPHenri
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div style="display: flex; max-width: 500px; margin: 0 auto;">
		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Rechercher...', 'placeholder', 'jphenri' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="btn btn-primary" style="margin-left: 0.5rem; white-space: nowrap;">
			<i class="fas fa-search" style="margin-right: 0.5rem;"></i>
			<?php echo esc_html_x( 'Rechercher', 'submit button', 'jphenri' ); ?>
		</button>
	</div>
</form>
