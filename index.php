<?php get_header();

/**
Template Name: post page
@package WordPress
@since Planet 1.0
**/
 ?>

        <div class="blog_standart_title_img">
            <div class="portfolio_one_1_title_img_overlay"></div>
            <div class="portfolio_one_1_cell">
                <div class="container">
                    <div class="row">
                        <div class="portfolio_text_one_cell text-center">
                            <h4 class="wow fadeInUp" data-wow-delay="300ms">A WONDERFUl POSSESSION BLOG</h4>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">BLOG STANDARD</h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->

        <div class="Blog_standard_page_blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                      <?php
                           $blog_p = new WP_Query(array(

                               'post_type' => 'post',
                              // 'posts_per_page' =>10,
                               'paged' => get_query_var('paged'),

                           ));

                           if($blog_p->have_posts()) : while($blog_p->have_posts()) : $blog_p->the_post();

                       ?>
                    <?php $sticky = !is_sticky() ? "non-sticky" : 'sticky'; ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class($sticky); ?>>
                        <div class="blog_standard_item">
                             <div class="blog_standard_img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php 
                       if(has_post_thumbnail()){the_post_thumbnail();}
                    ?>
                                </a>
                            </div>

                            <div class="blog_standard_content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="blog_standard_single_admin">
                                    <?php echo esc_html('BY','themx'); ?> <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                                    <?php echo esc_html(get_the_time('M'));?> <?php echo esc_html(get_the_time('d'));?> <?php echo esc_html(get_the_time('Y'));?><span>|</span> <?php the_category(' , ');?> <?php the_tags(); ?>
                       
                                </p>

                                <p class="blog_standard_single_details">
                                    <?php
                                           if(!has_excerpt()) {
                                            echo esc_html(wp_trim_words(get_the_content(), 50));
                                           }else
                                           {
                                            has_excerpt();
                                           }
                                       ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="blog_standard_single_readmore"><?php echo __('READ MORE') ?></a>
                            </div>
                        </div><!-- blog_standard_item -->
                         
                         <?php endwhile; endif; ?>


                     
                            <div class="pageedit">
                             
                             <?php

                             
                            
                                 // the_posts_pagination( array(
                                  echo the_posts_pagination( array(

                                      //'mid_size' => 10,
                                      'total' => $blog_p->max_num_pages, 


                                      'prev_text' => '<i class="fa fa-angle-left"></i> '.__( 'PREV', 'themx' ),
                                      'next_text' => __( 'NEXT', 'themx' ).' <i class="fa fa-angle-right"></i>',
                                  ) );
                              ?>
                            </div>
                        
                    </div><!-- col-md-8 -->

                    <div class="col-md-4">
                         <?php get_sidebar(); ?>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- Blog_standard_page_blog -->
  
<?php get_footer(); ?>