<?php if ( post_password_required() ) {
	return;
}

$main_test_theme_child = get_comments_number();
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		;
		?>
		<h3 class="comments-title">
			<?php
			$main_test_theme_child_comment_count = get_comments_number();
			if ( '1' === $main_test_theme_child_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'main_test_theme-child' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $main_test_theme_child_comment_count, 'comments title', 'main_test_theme-child' ) ),
					number_format_i18n( $main_test_theme_child_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();


		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'main_test_theme-child' ); ?></p>
			<?php
		endif;

	 // Check for have_comments().
	?>
	

	<?php
	comment_form(
		array(
			'logged_in_as'       => null,
			'title_reply'        => esc_html__( 'Leave a comment', 'main_test_theme-child' ),
			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h3>',
		)
	);
endif;
	?>
</div><!-- #comments -->
