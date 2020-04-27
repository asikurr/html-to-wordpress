<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
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

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="text-uppercase">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One Comment', 'comments title', 'themx' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s COMMENT',
							'%1$s COMMENTS',
							$comments_number,
							'comments title',
							'themx'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h3>
		<hr>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'callback'		=> 'themx_comment_style',
					'style'  		=> 'ul',
					'short_ping'  	=> true,
					'avatar_size' 	=> 100,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', '' ); ?></p>
	<?php endif; ?>

	
	<div class="msg_form">
		<?php
			// COMMENT FIELDS ARGUMENTS
			$fields = array(
				
				//Author Input field
				'author' => '<div class="row">
								<div class="col-md-12">
									<input id="author" class="form-control" name="author" type="text" placeholder="YOUR NAME*" value="' . esc_attr( $commenter['comment_author'] ) . '" />
								</div>',

				// Email Input field				
				'email' => '	<div class="col-md-6">
									<input id="email" class="form-control" name="email" type="email" placeholder="YOUR EMAIL*" value="' . esc_attr( $commenter['comment_author_email'] ) . '" />
								</div>',

				// URL Input field				
				'url' => '		<div class="col-md-6">
									<input id="url" class="form-control" name="url" type="url" placeholder="YOUR WEBSITE URL" value="' . esc_attr( $commenter['comment_author_url'] ) . '" />
								</div>
							</div>'
			);
			
			// COMMENT FORM
			comment_form( array(
				'title_reply'		=> __('ADD COMMENT', 'themx'),
				'title_reply_before'=> '<h4 class="text-uppercase margin_bottom__2">',
				'title_reply_after' => '</h4>',
				'label_submit'		=> __('ADD A COMMENT', 'themx'),
				'class_submit'		=> 'form-group submit-btn_ph',

				'must_log_in' 		=> '<p class="must-log-in">' . sprintf(
      				__( 'You must be <a href="%s">logged in</a> to post a comment.', 'themx' ),
      				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )) . '</p>',

				'logged_in_as'		=> '<p class="logged-in-as">' . sprintf(
					__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'themx' ), 
					admin_url( 'profile.php' ), 
					$user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    			) . '</p>',
    			
    			'fields' 			=> apply_filters( 'comment_form_default_fields', $fields ),

    			'comment_field' 	=> '<textarea id="comment" name="comment" class="form-control" placeholder="Your Message..." aria-required="true"></textarea>',
    			'format'			=> 'html5'
			) );

			
		?>
	</div>

</div><!-- .comments-area -->
