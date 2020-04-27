<?php 
/**
Template Name: Landing Page
@package WordPress
@since Planet 1.0
**/
get_header(); 
?>	
	<!-- Start section-edit -->
<div class="container">
	<div id="section-edit">
		<div class="section-edt">
			<?php while ( have_posts() ) : the_post();  ?>					
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content-posts">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div><!-- /.section-edt -->
	</div><!-- /#section-edit -->	
</div><!-- /#Container -->	

<?php get_footer(); ?>
	
