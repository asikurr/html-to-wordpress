<?php

function themx_blog_widget() {
    register_sidebar( array(
        'name' => __( 'Themx Blog Sidebar', 'themx' ),
        'id' => 'blog_sidebar',
        'description' => __( 'This Widgets in this area will be shown on blog Sidebar Content', 'themx' ),
        'before_widget' => '<div class="Blog_standard_right_widget"><div class="right_widget_titles">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'themx_blog_widget' );



function themx_blog_side_post_widget() {
    register_sidebar( array(
        'name' => __( 'Themx Blog Sidebar no need', 'themx' ),
        'id' => 'blog_post_sidebar',
        'description' => __( 'This Widgets in this area will be shown on blog Sidebar Content', 'themx' ),
        'before_widget' => '<div class="Blog_standard_right_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'themx_blog_side_post_widget' );

//Blog side bar About Me

/*
* Plugin Name: Media Upload Widget
* Plugin URI: http://www.paulund.co.uk
* Description: A widget that allows you to upload media from a widget
* Version: 1.0
* Author: Paul Underwood
* Author URI: http://www.paulund.co.uk
* License: GPL2
Copyright 2012  Paul Underwood
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License,
version 2, as published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/
/**
 * Blog sidebar about us widget
 */

class themx_blog_sidebar_about_widget extends WP_Widget
{
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'themx_blog_media_upload',
            'description' => 'Widget that uses the built in Media library.'
        );
        parent::__construct( 'themx_blog_media_upload', 'Image Blog about us Widget', $widget_ops );
        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
    }
    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget', get_template_directory_uri(). '/assets/js/upload-media.js', array('jquery'));
        wp_enqueue_style('thickbox');
    }
    
    public function widget( $args, $instance )
    {
	    echo $args['before_widget'];
			if ( ! empty( $instance['title'] ) && ( $instance['image'] ) && ( $instance['link'] ) && ( $instance['description'] )) { ?>

	                  
                                <div class="right_widget_titles">
                                    <h4><?php echo apply_filters( 'title', $instance['title'] );?></h4>
                                </div>
                                <div class="right_widget_about_me_img">
                                    <img src="<?php echo apply_filters( 'image', $instance['image'] );?>" alt="">
                                </div>
                                <a href="#" class="right_widget_about_me"><?php echo apply_filters( 'description', $instance['description'] );?></a>
	                  
                  <?php
				
			}
			
		echo $args['after_widget'];
    }
    
    public function update( $new_instance, $old_instance ) {
        // update logic goes here
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
       

        return $instance;
    }
    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void
     **/
    public function form( $instance )
    {
       $title = __('title','themx');
        if(isset($instance['title']))
        {
            $title = $instance['title'];
        }

        $image = '';
        if(isset($instance['image']))
        {
            $image = $instance['image'];
        }

        $link = __('link','themx');
        if(isset($instance['link']))
        {
            $link = $instance['link'];
        }

        $description = __('description','themx');
        if(isset($instance['description']))
        {
            $description = $instance['description'];
        }     

        ?>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
<!-- Image - blog about us sidebar-->
        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image 1:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_attr_e( 'Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_attr_e( 'Description:', 'themx' ); ?></label> 
		<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="textarea" rows="4" cols="10" value=""><?php echo esc_html( $description ); ?></textarea>
		</p>	

    <?php
    }
}

add_action( 'widgets_init', create_function( '', 'register_widget("themx_blog_sidebar_about_widget");' ) );


add_action( 'widgets_init', 'themx_blog_side_post_widget' );
/**
 * Blog sidebar Latest Post
 */

class blog_side_post extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'themx_blog_sidebar_post', // Base ID
			esc_html__( 'Blog sidebar Latest post', 'themx' ), // Name
			array( 'description' => esc_html__( 'Widget that uses the Blog sidebar Latest post', 'themx' ), ) // Args
		);
	}


	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) && ( $instance['postno'] )) {  ?>



                             <div class="right_widget_titles">
                                    <h4><?php echo  apply_filters( 'title', $instance['title'] ); ?></h4>
                             </div>
                                <ul class="r-course">

					               <?php 
					                    $b_latest_post = new WP_Query(array(

					                    	'post_type'=>'post',
					                    	'posts_per_page'=>$instance['postno'],
					                    	'ignore_sticky_posts' => 1

					                    	));

					                           if($b_latest_post->have_posts()) : while($b_latest_post->have_posts()) : $b_latest_post->the_post();

					               ?>

                           <?php $sticky = !is_sticky() ? "non-sticky" : 'sticky'; ?>
					         <article id="post-<?php the_ID(); ?>" <?php post_class($sticky); ?>>
                                    <li>
                                        <div class="rcourse-img"><?php the_post_thumbnail('blog_r_post');?></div>
                                        <div class="rcourse-txt">
                                            <p><?php echo esc_html(wp_trim_words(get_the_content(),1)); ?></p>
                                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                                            <a href="<?php the_permalink();?>"><?php echo esc_html(get_the_time('F'));?> <?php echo esc_html(get_the_time('d'));?>, <?php echo esc_html(get_the_time('Y'));?></a>
                                        </div>
                                    </li>
                              </article>
                                    <?php  endwhile; endif; ?>
                        
                                </ul>

           <?php

			
		}

		echo $args['after_widget'];
	}


	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'themx' );
		$postno = ! empty( $instance['postno'] ) ? $instance['postno'] : esc_html__( 'Post No', 'themx' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'postno' ) ); ?>"><?php esc_attr_e( 'Post No:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'postno' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'postno' ) ); ?>" type="text" value="<?php echo esc_attr( $postno ); ?>">
		</p>
		<?php 
	}
	

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['postno'] = ( ! empty( $new_instance['postno'] ) ) ? strip_tags( $new_instance['postno'] ) : '';

		return $instance;
	}

}
function themx_blog_latest_post() {
    register_widget( 'blog_side_post' );
}

add_action( 'widgets_init', 'themx_blog_latest_post' );


/**
 * Adds Themx Blog sidebar social widget.
 */
class themx_blog_social extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'themx_blog_social', // Base ID
			esc_html__( 'Blog Social sidebar Widget', 'themx' ), // Name
			array( 'description' => esc_html__( 'This Themx blog Social sidebar Widget', 'themx' ), ) // Args
		);
	}

	
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['social_title'] ) && ( $instance['icon1'] ) && ( $instance['link1'] ) && ( $instance['icon2'] ) && ( $instance['link2'] ) && ( $instance['icon3'] ) && ( $instance['link3'] ) && ( $instance['icon4'] ) && ( $instance['link4'] ) && ( $instance['icon5'] ) && ( $instance['link5'] )) { ?>

	
                                <div class="right_widget_titles">
                                    <h4><?php echo apply_filters( 'social_title', $instance['social_title'] ); ?></h4>
                                </div>
                                <ul class="subcribe_follow_item_b">
                                    <li><a href="<?php echo apply_filters( 'link1', $instance['link1'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon1', $instance['icon1'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link2', $instance['link2'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon2', $instance['icon2'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link3', $instance['link3'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon3', $instance['icon3'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link4', $instance['link4'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon4', $instance['icon4'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link5', $instance['link5'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon5', $instance['icon5'] ); ?>"></i></a></li>
                                </ul>
                     
 
       <?php
		}
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		
		$instance['social_title'] = ( ! empty( $new_instance['social_title'] ) ) ? strip_tags( $new_instance['social_title'] ) : '';
		$instance['icon1'] = ( ! empty( $new_instance['icon1'] ) ) ? strip_tags( $new_instance['icon1'] ) : '';
		$instance['link1'] = ( ! empty( $new_instance['link1'] ) ) ? strip_tags( $new_instance['link1'] ) : '';
		$instance['icon2'] = ( ! empty( $new_instance['icon2'] ) ) ? strip_tags( $new_instance['icon2'] ) : '';
		$instance['link2'] = ( ! empty( $new_instance['link2'] ) ) ? strip_tags( $new_instance['link2'] ) : '';
		$instance['icon3'] = ( ! empty( $new_instance['icon3'] ) ) ? strip_tags( $new_instance['icon3'] ) : '';
		$instance['link3'] = ( ! empty( $new_instance['link3'] ) ) ? strip_tags( $new_instance['link3'] ) : '';
		$instance['icon4'] = ( ! empty( $new_instance['icon4'] ) ) ? strip_tags( $new_instance['icon4'] ) : '';
		$instance['link4'] = ( ! empty( $new_instance['link4'] ) ) ? strip_tags( $new_instance['link4'] ) : '';		

		$instance['icon5'] = ( ! empty( $new_instance['icon5'] ) ) ? strip_tags( $new_instance['icon5'] ) : '';
		$instance['link5'] = ( ! empty( $new_instance['link5'] ) ) ? strip_tags( $new_instance['link5'] ) : '';

		return $instance;
	}



	public function form( $instance ) {

		$social_title = ! empty( $instance['social_title'] ) ? $instance['social_title'] : esc_html__( '', 'themx' );
		$icon1 = ! empty( $instance['icon1'] ) ? $instance['icon1'] : esc_html__( '', 'themx' );
		$link1 = ! empty( $instance['link1'] ) ? $instance['link1'] : esc_html__( '', 'themx' );
		$icon2 = ! empty( $instance['icon2'] ) ? $instance['icon2'] : esc_html__( '', 'themx' );
		$link2 = ! empty( $instance['link2'] ) ? $instance['link2'] : esc_html__( '', 'themx' );

		$icon3 = ! empty( $instance['icon3'] ) ? $instance['icon3'] : esc_html__( '', 'themx' );
		$link3 = ! empty( $instance['link3'] ) ? $instance['link3'] : esc_html__( '', 'themx' );

		$icon4 = ! empty( $instance['icon4'] ) ? $instance['icon4'] : esc_html__( '', 'themx' );
		$link4 = ! empty( $instance['link4'] ) ? $instance['link4'] : esc_html__( '', 'themx' );

		$icon5 = ! empty( $instance['icon5'] ) ? $instance['icon5'] : esc_html__( '', 'themx' );
		$link5 = ! empty( $instance['link5'] ) ? $instance['link5'] : esc_html__( '', 'themx' );


		?>
		
<!-- Social Title -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'social_title' ) ); ?>"><?php esc_attr_e( 'Social title:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social_title' ) ); ?>" type="text" value="<?php echo esc_attr( $social_title ); ?>">
		</p>

<!-- Social Icon And Link -->
<!-- Social Icon And Link 1-->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'icon1' ) ); ?>"><?php esc_attr_e( 'Social icon 1:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon1' ) ); ?>" type="text" value="<?php echo esc_attr( $icon1 ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link1' ) ); ?>"><?php esc_attr_e( 'Social icon Link 1:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link1' ) ); ?>" type="text" value="<?php echo esc_attr( $link1 ); ?>">
		</p>		

<!-- Social Icon And Link 2-->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'icon2' ) ); ?>"><?php esc_attr_e( 'Social icon 2:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon2' ) ); ?>" type="text" value="<?php echo esc_attr( $icon2 ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link2' ) ); ?>"><?php esc_attr_e( 'Social icon Link 2:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link2' ) ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>">
		</p>		


<!-- Social Icon And Link 3-->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'icon3' ) ); ?>"><?php esc_attr_e( 'Social icon 3:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon3' ) ); ?>" type="text" value="<?php echo esc_attr( $icon3 ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link3' ) ); ?>"><?php esc_attr_e( 'Social icon Link 3:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link3' ) ); ?>" type="text" value="<?php echo esc_attr( $link3 ); ?>">
		</p>		
<!-- Social Icon And Link 4-->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'icon4' ) ); ?>"><?php esc_attr_e( 'Social icon 4:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon4' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon4' ) ); ?>" type="text" value="<?php echo esc_attr( $icon4 ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link4' ) ); ?>"><?php esc_attr_e( 'Social icon Link 4:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link4' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link4' ) ); ?>" type="text" value="<?php echo esc_attr( $link4 ); ?>">
		</p>
<!-- Social Icon And Link 4-->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'icon5' ) ); ?>"><?php esc_attr_e( 'Social icon 5:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon5' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon5' ) ); ?>" type="text" value="<?php echo esc_attr( $icon5 ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link5' ) ); ?>"><?php esc_attr_e( 'Social icon Link 5:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link5' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link5' ) ); ?>" type="text" value="<?php echo esc_attr( $link5 ); ?>">
		</p>		




		<?php 
	}


} 
// register Foo_Widget widget
function themx_blog_social_widget() {
    register_widget( 'themx_blog_social' );
}
add_action( 'widgets_init', 'themx_blog_social_widget' );
