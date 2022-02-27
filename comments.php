<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buson
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

<div id="comments" class="comment-list">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<?php the_comments_navigation(); ?>
		<div class="comment-list">
			<div class="single-comment justify-content-between d-flex">
				<div class="desc">
					<p class="comment">
					<?php
					wp_list_comments(
						array(
							'style'      => 'ul',
							'short_ping' => true,
							'avatar_size' => 60,
							'max_depth'   => 5,
							'type'        => 'all',
							'walker'            => null,
							'callback'          => null,
							'end-callback'      => null,
							// 'type'              => 'all',
							'page'              => '',
							'per_page'          => '',	
							'reverse_top_level' => null,
							'reverse_children'  => '',
							'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
							// 'short_ping'        => false,   // @since 3.6
							'echo'              => true     // boolean, default is true
						)
					);
					?>
					</p>
				</div>
			</div>
	</div>
		<!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'buson' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->