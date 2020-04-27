<?php
/**
 * The template part for displaying Blog page posts content
 *
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog_standard_item">


        <div class="sticky-thumb">
            <!-- ==================== Post Thumbnail ==================== -->
            <?php if(has_post_thumbnail()): ?>
                <div class="blog_standard_img">
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            if(! is_single()):
                                the_post_thumbnail('blog_post_img');
                            else:
                                the_post_thumbnail('single_post_img'); 
                            endif;
                        ?>
                    </a>
                </div>
            <?php endif; ?>

            <!-- ==================== Sticky Posts conditon ==================== -->
            <?php
                // Sticky post codition 
                if ( is_sticky() && is_home() && ! is_single() && ! is_paged() ) : 
            ?>    
                <div class="sticky_post <?php if(has_post_thumbnail()) echo 'sticky_no_thumb'; ?>">
                    <span class="sticky_text"><?php echo __( 'Featured', 'themx' ); ?></span>
                </div>
            <?php endif; ?>
        </div>

        
        <!-- ==================== Cotent Body ==================== -->  
        <div class="blog_standard_content">
            
            <!-- ==================== Posts Title ==================== -->
            <?php  
                if(! is_single()):
                    the_title('<h3 class="post_title text-uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>');
                else:  
                    the_title('<h3 class="post_title text-uppercase">', '</h3>');
                endif;
            ?>
            
            <!-- ==================== Posts Meta Info ==================== -->
            <div class="blog_standard_single_admin text-uppercase">
                BY <?php the_author_posts_link(); ?>
                <span> | </span><?php comments_popup_link('No Comments', '1 Comment', '% Comment', 'comment_link', 'Comments are Off'); ?>
                <span> | </span><?php the_time('d M Y'); ?><span> |</span>  
                <?php the_category(' , ') ?><span> |</span>
                <br />
                <?php 
                    if(has_tag()):  
                        the_tags('tagged in ', ' , ', '');
                        echo '<span> |</span> ';
                    endif;
                ?>

            </div>
            
            <!-- ==================== Posts Content ==================== -->
            <?php 
                if(! is_single()):
            ?>
                <p class="blog_standard_single_details">
                    <?php 
                        if(has_excerpt()):
                            the_excerpt();
                        else:
                            echo esc_html(wp_trim_words(get_the_content(), 45, ' '));
                        endif;

                    ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="blog_standard_single_readmore">
                    READ MORE
                </a>
            <?php 
                else: 
            ?>
                <div class="blog_standard_single_details">
                    <?php echo get_the_content(); ?>
                </div>
            <?php 
                endif;
            ?>
            
            <!-- ==================== Wp Link pages ==================== -->
            <?php 
                // wp link pages
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'themx' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( '', 'themx' ) . ' </span>%',
                    'separator'   => '',
                ) );
            ?>
        </div>
    </div><!-- blog_standard_item -->
</article>