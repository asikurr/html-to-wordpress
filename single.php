<?php get_header(); ?>
    
        <div class="blog_standart_title_img" style="background: url(
    <?php
$image_id = cs_get_option( 's_img' );
$attachment = wp_get_attachment_image_src($image_id, 'full')[0];
            echo esc_url($attachment);
    ?>) no-repeat scroll center center;">
            <div class="portfolio_one_1_title_img_overlay">  </div>
            <div class="portfolio_one_1_cell">
                <div class="container">
                    <div class="row">
                        <div class="portfolio_text_one_cell text-center">
                            <h4 class="wow fadeInUp" data-wow-delay="300ms"><?php echo esc_html(cs_get_option('s_title'));?></h4>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms"><?php echo esc_html(cs_get_option('s_sub_title'));?></h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->

        <div class="Blog_single_p_page_blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                     <?php 
                            if(have_posts()) : while(have_posts()) : the_post();
                     ?>

                        <div class="blog_single_item">
                             <div class="blog__single_sa_img">
                                 <?php 
                                       if(has_post_thumbnail()){the_post_thumbnail();}
                                    ?>
                            </div>
                            <div class="blog_single_p_content">
                                <div class="blog_single_top_content">
                                    <h3><a href="#"><?php the_title(); ?></a></h3>
                                    <p class="blog_s_single_admin">
                                    <?php echo esc_html('BY','themx'); ?> <a href="<?php the_author_link();?>"><?php the_author();?></a>
                                    <?php echo esc_html(get_the_time('M'));?> <?php echo esc_html(get_the_time('d'));?> <?php echo esc_html(get_the_time('Y'));?><span>|</span> <?php the_category(' , ');?>  
                                   
                                    </p>

                                    <p><?php the_content();?></p>
                                </div>


         
                                     
                                <div class="COMMENT_1_Com">
                                    <div class="content_blog_a fix">
                                        <div class="e_blog_A">
                                        <?php  
                                    
                                          echo get_avatar( esc_attr(get_the_author_meta( 'ID' )), 80 ); ?>
                                        </div>
                                        <div class="blog_a_text">
                                            <h5><a href="<?php echo esc_attr(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>"><?php the_author(); ?></a></h5>
                                            <p><?php the_author_meta( 'description' ); ?></p>

                                              
                                            <ul class="blog_a_social_blog">
                                                 <?php
                                                    
                                                    $author_social = cs_get_option('author_link_icon');
                                                    if($author_social):
                                                        foreach($author_social as $a_social_value):

                                                 ?>
                                                <li><a href="<?php echo esc_url($a_social_value['a_social_link']);?>"><i class="<?php echo esc_attr($a_social_value['a_social_icon']);?>"></i></a></li>
                                               
                                                  <?php endforeach; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                  

                    


                                    <div class="content_blog_a fix">
                                        <?php
                                         if ( comments_open() || get_comments_number() ) {
                                                comments_template();
                                            }

                                         ?>
                                    </div>
                                </div>

                                
                            </div>
                        </div><!-- blog_single_item -->

                    <?php endwhile; endif; ?>
                    </div><!-- col-md-8 -->

                    <div class="col-md-4">
                         <?php get_sidebar(); ?>
                    </div><!-- col-md-4 -->
                </div><!-- row -->
            </div><!-- containenr -->
        </div><!-- Blog_single_p_page_blog -->

 

 <?php get_footer(); ?>