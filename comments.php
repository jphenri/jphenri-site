<?php
/**
 * The template for displaying comments
 *
 * @package JPHenri
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border);">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem;">
			<?php
			$jphenri_comment_count = get_comments_number();
			if ( '1' === $jphenri_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Un commentaire sur &ldquo;%1$s&rdquo;', 'jphenri' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s commentaire sur &ldquo;%2$s&rdquo;', '%1$s commentaires sur &ldquo;%2$s&rdquo;', $jphenri_comment_count, 'comments title', 'jphenri' ) ),
					number_format_i18n( $jphenri_comment_count ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list" style="list-style: none; padding: 0; margin: 0;">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Les commentaires sont fermés.', 'jphenri' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form(
		array(
			'title_reply'        => esc_html__( 'Laisser un commentaire', 'jphenri' ),
			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem;">',
			'title_reply_after'  => '</h3>',
			'class_submit'       => 'btn btn-primary',
			'comment_field'      => '<div class="form-group"><label for="comment" class="form-label">' . esc_html_x( 'Commentaire', 'noun', 'jphenri' ) . '</label><textarea id="comment" name="comment" class="form-control" rows="5" required></textarea></div>',
			'fields'             => array(
				'author' => '<div class="form-grid form-grid-2"><div class="form-group"><label for="author" class="form-label">' . esc_html__( 'Nom', 'jphenri' ) . ( get_option( 'require_name_email' ) ? ' <span class="required">*</span>' : '' ) . '</label><input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ( get_option( 'require_name_email' ) ? ' required' : '' ) . ' /></div>',
				'email'  => '<div class="form-group"><label for="email" class="form-label">' . esc_html__( 'Email', 'jphenri' ) . ( get_option( 'require_name_email' ) ? ' <span class="required">*</span>' : '' ) . '</label><input id="email" name="email" type="email" class="form-control" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . ( get_option( 'require_name_email' ) ? ' required' : '' ) . ' /></div></div>',
				'url'    => '<div class="form-group"><label for="url" class="form-label">' . esc_html__( 'Site web', 'jphenri' ) . '</label><input id="url" name="url" type="url" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
			),
		)
	);
	?>

</div><!-- #comments -->
