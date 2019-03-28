<?php
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( esc_html_x( 'One comment to &ldquo;%s&rdquo;', 'comments title', 'cgs-fashion-trend' ), esc_html(get_the_title()));
			} else {
				printf(
				/* translators: %1$s: number */
					esc_html(_nx(
						'%1$s comment to &ldquo;%2$s&rdquo;',
						'%1$s comments to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'cgs-fashion-trend'
					)),
					esc_attr(number_format_i18n( $comments_number )),
					esc_html(get_the_title())
				);
			}
			?>
		</h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'cgs-fashion-trend' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'cgs-fashion-trend' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'cgs-fashion-trend' ) ); ?></div>
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="commentlist">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
				//'callback' => 'custom_comment'
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'cgs-fashion-trend' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( esc_html_e( '&larr; Older Comments', 'cgs-fashion-trend' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html_e( 'Newer Comments &rarr;', 'cgs-fashion-trend' ) ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cgs-fashion-trend' ); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>
    <?php
    $args = array(
	    'fields' => apply_filters(
		    'comment_form_default_fields', array(
			    'author' =>'<p class="comment-form-author">'.'<label for="author">' . esc_html_e( 'Your Name','cgs-fashion-trend' ) . '</label><span class="required">*</span><input id="author" name="author" type="text" value="'.esc_attr( $commenter['comment_author'] ) . '" class="form-control" />'.'</p>',

			    'email'  => '<p class="comment-form-email">'.'<label for="email">' . esc_html_e( 'Your Email','cgs-fashion-trend' ) . '</label><span class="required">*</span><input id="email" name="email" type="text" value="'.esc_attr(  $commenter['comment_author_email'] ).'" class="form-control" />'.'</p>',

			    'url'    => '<p class="comment-form-url">' .
			                '<label for="url">' . esc_html_e( 'Website', 'cgs-fashion-trend' ) . '</label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" class="form-control" /></p>'
		    )
	    ),
	    'comment_field' => '<p class="comment-form-comment">' .
	                       '<label for="comment">' . esc_html_e( 'Let us know what you have to say:', 'cgs-fashion-trend' ) . '</label>' .
	                       '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea>' .
	                       '</p>',
	    'comment_notes_after' => '',
	    'title_reply' => '<div class="crunchify-text"> <h5>'.esc_html_e('Please Post Your Comments & Reviews', 'cgs-fashion-trend').'</h5></div>',
        'class_submit' => 'btn btn-primary'
    );
    ?>
	<?php comment_form($args); ?>
</div><!-- #comments -->