<?php get_header(); ?>	
<div class="container">
		<div id="main-content">
		<div class="blog-page-li">
			<?php 
				if(have_posts()):while(have_posts()): the_post();
					the_content();
					// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
				endwhile; 														
				else :
					get_template_part( 'template-parts/content', 'none' );
			endif; ?>
		</div>
		</div>
</div>
<?php get_footer(); ?>