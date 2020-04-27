<?php get_header(); ?>
			
        <div class="blog_standart_title_img">
            <div class="portfolio_one_1_title_img_overlay"></div>
            <div class="portfolio_one_1_cell">
                <div class="container">
                    <div class="row">
                        <div class="portfolio_text_one_cell text-center">
                            <h4 class="wow fadeInUp" data-wow-delay="300ms">A WONDERFUl POSSESSION BLOG</h4>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">BLOG SINGLE</h2>
                        </div>
                    </div>
                </div><!--container-->
            </div><!--B_latest_news-->
        </div><!--.Blog_1_title-->

        <div class="Blog_single_p_page_blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <div class="blog_single_item">
                      
                             					
						<?php if ( have_posts() ) : ?>

								<header class="page-header">
									<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'themx' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
								</header><!-- .page-header -->

								<?php
								// Start the loop.
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

								// End the loop.
								endwhile;

								// Previous/next page navigation. ?>
							<div class="pageedit">
					
							  <?php 
									the_posts_pagination( array(
										  'total' => $blog_p->max_num_pages, 


                                      'prev_text' => '<i class="fa fa-angle-left"></i> '.__( 'PREV', 'themx' ),
                                      'next_text' => __( 'NEXT', 'themx' ).' <i class="fa fa-angle-right"></i>',
									) );
								?>
							
							</div>
							<?php
							// If no content, include the "No posts found" template.
							else :
								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>

							

                        </div><!-- blog_single_item -->

   
                    </div><!-- col-md-8 -->

                    <div class="col-md-4">
                        <div class="blog_right_sidebaR">

                            <?php dynamic_sidebar('blog_sidebar');?>
                            
                        </div><!-- col-md-4 -->
                    </div><!-- col-md-4 -->
                </div><!-- row -->
            </div><!-- containenr -->
        </div><!-- Blog_single_p_page_blog -->

        <div id="scroll-Top">
            <a class="ScrollUp" id="Themx_Scrool_top" href="#">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div><!--.scroll-Top-->

 <?php get_footer(); ?>	
			
	
	
