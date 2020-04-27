<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 *
 */

get_header(); ?>

	<?php get_header(); ?>
    
        <div class="blog_standart_title_img"  style="background: url(
    <?php
$image_id = cs_get_option( 'f04_img' );
$attachment = wp_get_attachment_image_src($image_id, 'full')[0];
            echo esc_url($attachment);
    ?>) no-repeat scroll center center;">
            <div class="portfolio_one_1_title_img_overlay"></div>
            <div class="portfolio_one_1_cell">
                <div class="container">
                    <div class="row">
                        <div class="portfolio_text_one_cell text-center">
                            <h4 class="wow fadeInUp" data-wow-delay="300ms"><?php echo esc_html(cs_get_option('f04_title'));?></h4>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms"><?php echo esc_html(cs_get_option('f04_sub_title'));?></h2>
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
                     	<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">

								<section class="error-404 not-found">
									<header class="page-header">
										<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'themx' ); ?></h1>
									</header><!-- .page-header -->

									<div class="page-content">
										<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'themx' ); ?></p>

										<?php get_search_form(); ?>
									</div><!-- .page-content -->
								</section><!-- .error-404 -->

							</main><!-- .site-main -->

						</div><!-- .content-area -->
         
                                     
                    </div>
                 
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
