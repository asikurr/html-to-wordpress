<?php get_header(); ?>
			
			<?php get_header(); ?>
    
        <div class="blog_standart_title_img">
            <div class="portfolio_one_1_title_img_overlay"></div>
            <div class="portfolio_one_1_cell">
                <div class="container">
                    <div class="row">
                        <div class="portfolio_text_one_cell text-center">
                            <h4 class="wow fadeInUp" data-wow-delay="300ms">A WONDERFUl POSSESSION ARCHIVE</h4>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">ARCHIVE</h2>
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
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
								// Start the Loop.
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );

								// End the loop.
								endwhile;

								// Previous/next page navigation. ?>
								<div class="pageedit">
						
								  <?php 
										the_posts_pagination( array(
											/*'mid_size' 			 => 2,*/
											'prev_text'          => __( '', 'themx' ),
											'next_text'          => __( '&raquo;', 'themx' ),
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
                        <?php get_sidebar(); ?>
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

	