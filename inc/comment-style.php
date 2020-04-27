<?php 
/**
 * Themx Post Comment Style Functionalities
 *
 */


//COMMENT BODY STYLE
function themx_comment_style($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    } ?>

    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>


    	<!-- ======== Single Comment Body ======== -->
    	<div class="content_blog_a fix">
    		<!-- ====== Avatar ====== -->
            <div class="e_blog_A">
                <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            	
            </div>
            <div class="blog_a_text">
    			<!-- ====== Comment Author Name & link  ====== -->
                <h5><?php printf( __( '%s', 'themx' ), get_comment_author_link() ); ?></h5>

                <!-- ====== Comment Text  ====== -->
                <div class="comment_text"><?php comment_text(); ?></div>

                <h4 class="text_uppercase">
                	<!-- ====== Comment Date & Time  ====== -->
    		        <?php
    			        /* translators: 1: date, 2: time   21 JAN 2017 AT 10:03 PM*/
    			        printf( __('%1$s at %2$s', 'themx'), get_comment_date('d M Y'),  get_comment_time('h:i A') ); 
    		        ?><span> | </span>

    		        <!-- ====== Comment Edit Link  ====== -->
    		        <?php edit_comment_link( __( 'Edit Comment', 'themx' ), '  ', '' ); ?><span> | </span>

    		        <!-- ====== Comment Replay Link  ====== -->
    		        <?php 
    		        	comment_reply_link( 
    		        		array_merge( 
    		        			$args, 
    		        			array( 
    		        				'add_below' => $add_below, 
    		        				'depth' => $depth, 
    		        				'max_depth' => $args['max_depth'],
    		        				'reply_text'=> __('Reply', 'themx'),
    		        			) 
    		        		) 
    		        	); 
    		        ?>
        		</h4>
            </div>
        </div>

    	<!-- ====== Comment Moderation  ====== -->
        <?php if ( $comment->comment_approved == '0' ) : ?>
             <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'themx' ); ?></em>
              <br />
        <?php endif; ?>


    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
}

// START: KEEP COMMENT TEXTAREA FIELD BOTTOM OF THE COMMENT FORM
function themx_textarea_top( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'themx_textarea_top' );
// CLOSE: KEEP COMMENT TEXTAREA FIELD BOTTOM OF THE COMMENT FORM