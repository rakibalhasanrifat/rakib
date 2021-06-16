<?php $solonick_options = get_option('solonick'); ?>
<?php
if ( post_password_required() ) {
	return;
}
?>
<?php
	
	if ( have_comments() ) : ?>
	<?php
	global $solonick_comment_meta_text, $solonick_comment_meta_text2, $solonick_comment_meta_text3;
	if(!empty($solonick_options['translet_opt_19'])):
	$solonick_comment_meta_text= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_19',''));;
	else: 
	$solonick_comment_meta_text='One thought on';
	endif;
	if(!empty($solonick_options['translet_opt_20'])):
	$solonick_comment_meta_text2= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_20',''));;
	else: 
	$solonick_comment_meta_text2='thought on';
	endif;
	if(!empty($solonick_options['translet_opt_21'])):
	$solonick_comment_meta_text3= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_21',''));;
	else: 
	$solonick_comment_meta_text3='thoughts on';
	endif;
	?>
	
		<h6 id="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
					
					esc_html_e( ''.$solonick_comment_meta_text.' &ldquo;%1$s&rdquo;', 'solonick' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s '.$solonick_comment_meta_text2.' &ldquo;%2$s&rdquo;', '%1$s '.$solonick_comment_meta_text3.' &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'solonick' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h6>
		
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>
		
		<ul class="commentlist clearafix">
			
			<?php
				wp_list_comments( array(
					'callback'   => 'solonick_comment',
					'short_ping' => true,
				) );
			?>
		</ul><!-- .comment-list -->
		<div class="clearfix"></div>
		
		<?php the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'solonick' ); ?></p>
		
		<?php
		endif;
	endif; // Check for have_comments().
	global $solonick_comment_your_name, $solonick_comment_your_email, $solonick_comment_your_comment, $solonick_comment_send_commen;
	if(!empty($solonick_options['translet_opt_22'])):
	$solonick_comment_your_name= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_22',''));;
	else: 
	$solonick_comment_your_name='Your Name*';
	endif;
	if(!empty($solonick_options['translet_opt_23'])):
	$solonick_comment_your_email= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_23',''));;
	else: 
	$solonick_comment_your_email='Your Email*';
	endif;
	if(!empty($solonick_options['translet_opt_24'])):
	$solonick_comment_your_comment= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_24',''));;
	else: 
	$solonick_comment_your_comment='Your Comment*';
	endif;
	if(!empty($solonick_options['translet_opt_25'])):
	$solonick_comment_send_comment= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_25',''));;
	else: 
	$solonick_comment_send_comment='Submit Comment';
	endif;
		 $solonick_args = array(
		'fields' => apply_filters(
		'comment_form_default_fields', array(
			
			'author' =>'<div class="row"><div class="col-md-6"><label><i class="fal fa-user"></i></label>' . '<input id="author"  placeholder="'. esc_attr( $solonick_comment_your_name ) .'" name="author" type="text" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="40"/>'.
				
				'</div>'
				,
			'email'  => '<div class="col-md-6"><label><i class="fal fa-envelope-open"></i></label>' . '<input id="email" placeholder="'. esc_attr( $solonick_comment_your_email ) .'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="40"/>'  .
				
				'</div></div>',
			
		)
		),
		'comment_field' => '<div class="comment-form-comment control-group"><div class="controls">' .
		'<textarea id="comment" class="form-control" name="comment" cols="50" rows="8" placeholder="'. esc_attr( $solonick_comment_your_comment ) .'" aria-required="true"></textarea>' .
		'</div></div>',
		'comment_notes_after' => '<button class="btn flat-btn color-btn comment-button-cus">'. esc_attr( $solonick_comment_send_comment ) .'</button>',
		'title_reply' => '<div class="comment-title-area crunchify-text"> <h3> <span>' . esc_html__( 'Leave a', 'solonick' ) . '</span> <b>' . esc_html__( 'Reply', 'solonick' ) . '</b>'.'</h3></div>'
		
	);
	comment_form($solonick_args);
	?>
	



