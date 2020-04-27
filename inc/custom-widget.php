<?php

function themx_footer_widget() {
    register_sidebar( array(
        'name' => __( 'Themx Footer Sidebar', 'themx' ),
        'id' => 'footer_sidebar',
        'description' => __( 'This Widgets in this area will be shown on Footer Content', 'themx' ),
        'before_widget' => '<div class="footer_widget_seceond">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer_title_seceond">',
		'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'themx_footer_widget' );

/**
 * Adds Foo_Widget_details widget.
 */
class Foo_Widget_details extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Foo_Widget_details', // Base ID
			esc_html__( 'Footer Widget Details', 'themx' ), // Name
			array( 'description' => esc_html__( 'This Footer Widget area shown Themx Details', 'themx' ), ) // Args
		);
	}

	
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) && ( $instance['theme_de'] ) && ( $instance['email_link'] ) && ( $instance['email_addr'] ) && ( $instance['phone_num'] ) && ( $instance['social_title'] ) && ( $instance['icon1'] ) && ( $instance['link1'] ) && ( $instance['icon2'] ) && ( $instance['link2'] ) && ( $instance['icon3'] ) && ( $instance['link3'] ) && ( $instance['icon4'] ) && ( $instance['link4'] )) { ?>

			

                                <h4 class="footer_title_seceond"><?php echo apply_filters( 'title', $instance['title'] ); ?></h4>
                                <p class="company_detailS_footer"><?php echo apply_filters( 'theme_de', $instance['theme_de'] ); ?></p>
                                <div class="widget_seceond_phoneNo_x">
                                    <p><a href="mailto:<?php echo apply_filters( 'email_link', $instance['email_link'] ); ?>" class="phoneNo_x"><?php echo apply_filters( 'email_addr', $instance['email_addr'] ); ?></a></p>
                                    <p><a href="#" class="phoneNo_x"><?php echo apply_filters( 'phone_num', $instance['phone_num'] ); ?></a></p>
                                </div>

                                <h3><?php echo apply_filters( 'social_title', $instance['social_title'] ); ?></h3>
                                <ul class="seceond_footer_soical_icon">
                                    <li><a href="<?php echo apply_filters( 'link1', $instance['link1'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon1', $instance['icon1'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link2', $instance['link2'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon2', $instance['icon2'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link3', $instance['link3'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon3', $instance['icon3'] ); ?>"></i></a></li>
                                    <li><a href="<?php echo apply_filters( 'link4', $instance['link4'] ); ?>"><i class="fa fa-<?php echo apply_filters( 'icon4', $instance['icon4'] ); ?>"></i></a></li>
                                </ul>


 
       <?php
		}
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['theme_de'] = ( ! empty( $new_instance['theme_de'] ) ) ? strip_tags( $new_instance['theme_de'] ) : '';
		$instance['email_link'] = ( ! empty( $new_instance['email_link'] ) ) ? strip_tags( $new_instance['email_link'] ) : '';
		$instance['email_addr'] = ( ! empty( $new_instance['email_addr'] ) ) ? strip_tags( $new_instance['email_addr'] ) : '';
		$instance['phone_num'] = ( ! empty( $new_instance['phone_num'] ) ) ? strip_tags( $new_instance['phone_num'] ) : '';
		$instance['social_title'] = ( ! empty( $new_instance['social_title'] ) ) ? strip_tags( $new_instance['social_title'] ) : '';
		$instance['icon1'] = ( ! empty( $new_instance['icon1'] ) ) ? strip_tags( $new_instance['icon1'] ) : '';
		$instance['link1'] = ( ! empty( $new_instance['link1'] ) ) ? strip_tags( $new_instance['link1'] ) : '';
		$instance['icon2'] = ( ! empty( $new_instance['icon2'] ) ) ? strip_tags( $new_instance['icon2'] ) : '';
		$instance['link2'] = ( ! empty( $new_instance['link2'] ) ) ? strip_tags( $new_instance['link2'] ) : '';
		$instance['icon3'] = ( ! empty( $new_instance['icon3'] ) ) ? strip_tags( $new_instance['icon3'] ) : '';
		$instance['link3'] = ( ! empty( $new_instance['link3'] ) ) ? strip_tags( $new_instance['link3'] ) : '';
		$instance['icon4'] = ( ! empty( $new_instance['icon4'] ) ) ? strip_tags( $new_instance['icon4'] ) : '';
		$instance['link4'] = ( ! empty( $new_instance['link4'] ) ) ? strip_tags( $new_instance['link4'] ) : '';

		return $instance;
	}



	public function form( $instance ) {

		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'themx' );
		$theme_de = ! empty( $instance['theme_de'] ) ? $instance['theme_de'] : esc_html__( '', 'themx' );
		$email_link = ! empty( $instance['email_link'] ) ? $instance['email_link'] : esc_html__( '', 'themx' );
		$email_addr = ! empty( $instance['email_addr'] ) ? $instance['email_addr'] : esc_html__( '', 'themx' );
		$phone_num = ! empty( $instance['phone_num'] ) ? $instance['phone_num'] : esc_html__( '', 'themx' );
		$social_title = ! empty( $instance['social_title'] ) ? $instance['social_title'] : esc_html__( '', 'themx' );
		$icon1 = ! empty( $instance['icon1'] ) ? $instance['icon1'] : esc_html__( '', 'themx' );
		$link1 = ! empty( $instance['link1'] ) ? $instance['link1'] : esc_html__( '', 'themx' );
		$icon2 = ! empty( $instance['icon2'] ) ? $instance['icon2'] : esc_html__( '', 'themx' );
		$link2 = ! empty( $instance['link2'] ) ? $instance['link2'] : esc_html__( '', 'themx' );

		$icon3 = ! empty( $instance['icon3'] ) ? $instance['icon3'] : esc_html__( '', 'themx' );
		$link3 = ! empty( $instance['link3'] ) ? $instance['link3'] : esc_html__( '', 'themx' );

		$icon4 = ! empty( $instance['icon4'] ) ? $instance['icon4'] : esc_html__( '', 'themx' );
		$link4 = ! empty( $instance['link4'] ) ? $instance['link4'] : esc_html__( '', 'themx' );


		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Theme Title:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'theme_de' ) ); ?>"><?php esc_attr_e( 'Theme Details:', 'themx' ); ?></label> 
		<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'theme_de' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'theme_de' ) ); ?>" type="textarea" rows="4" cols="10" value=""><?php echo esc_html( $theme_de ); ?></textarea>
		</p>
<!-- Email address -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'email_link' ) ); ?>"><?php esc_attr_e( 'Email Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_link' ) ); ?>" type="text" value="<?php echo esc_attr( $email_link ); ?>">
		</p>		

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'email_addr' ) ); ?>"><?php esc_attr_e( 'Email Address:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email_addr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email_addr' ) ); ?>" type="text" value="<?php echo esc_attr( $email_addr ); ?>">
		</p>

<!-- Phone Number -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone_num' ) ); ?>"><?php esc_attr_e( 'Phone Number:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone_num' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone_num' ) ); ?>" type="text" value="<?php echo esc_attr( $phone_num ); ?>">
		</p>		
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




		<?php 
	}


} 
// register Foo_Widget widget
function themx_foo_widget_details() {
    register_widget( 'Foo_Widget_details' );
}
add_action( 'widgets_init', 'themx_foo_widget_details' );

/**
 * Adds Foo_Widget widget.
 */

function themx_footer_recent_widget() {
    register_sidebar( array(
        'name' => __( 'Themx Footer Recent post', 'themx' ),
        'id' => 'footer_sidebar1',
        'description' => __( 'This Widgets in this area will be shown on Footer Recent post', 'themx' ),
        'before_widget' => '<div class="footer_widget_seceond">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer_title_seceond">',
		'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'themx_footer_recent_widget' );

class themx_footer_recent extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'themx_footer_recent_p', // Base ID
			esc_html__( 'Footer Recent Post', 'themx' ), // Name
			array( 'description' => esc_html__( 'Widget that uses the built footer recent post', 'themx' ), ) // Args
		);
	}


	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) && ( $instance['postno'] )) {  ?>






                              <h4 class="footer_title_seceond"><?php echo  apply_filters( 'title', $instance['title'] ); ?></h4>
                                <ul class="RECent_postT">

									<?php 
									        $recent_post = new WP_Query(array(

									        	'post_type'=>'post',
									        	'posts_per_page'=>$instance['postno'],
									        	'ignore_sticky_posts' => 1

									        	));

									               if($recent_post->have_posts()) : while($recent_post->have_posts()) : $recent_post->the_post();

									   ?>
							   <?php $sticky = !is_sticky() ? "non-sticky" : 'sticky'; ?>
					             <article id="post-<?php the_ID(); ?>" <?php post_class($sticky); ?>>   
				                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <p><span><?php echo esc_html(get_the_time('F'));?> </span><?php echo esc_html(get_the_time('j'));?>, <?php echo esc_html(get_the_time('Y'));?></p>
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
function themx_footer_recent_post() {
    register_widget( 'themx_footer_recent' );
}

add_action( 'widgets_init', 'themx_footer_recent_post' );

//Footer widget instagraam

function themx_footer_insta_widget() {
    register_sidebar( array(
        'name' => __( 'Themx Footer Instagram', 'themx' ),
        'id' => 'footer_sidebar2',
        'description' => __( 'This Widgets in this area will be shown on Footer Instagram image', 'themx' ),
        'before_widget' => '<div class="footer_widget_single">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer_title_seceond">',
		'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'themx_footer_insta_widget' );
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
 * Register the Widget
 */

class themx_instagram_upload_widget extends WP_Widget
{
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'themx_media_upload',
            'description' => 'Widget that uses the built in Media library.'
        );
        parent::__construct( 'themx_media_upload', 'Media Upload Footer Widget', $widget_ops );
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
			if ( ! empty( $instance['title'] ) && ( $instance['image'] ) && ( $instance['link'] )  && ( $instance['image2'] ) && ( $instance['link2'] )  && ( $instance['image3'] ) && ( $instance['link3'] ) && ( $instance['image4'] )  && ( $instance['link4'] )  && ( $instance['image5'] ) && ( $instance['link5'] ) && ( $instance['image6'] ) && ( $instance['link6'] )) { ?>

	                  

	                   <h4 class="footer_title_seceond"><?php echo apply_filters( 'title', $instance['title'] );?></h4>
                                <div class="instagram_item">
                                    <div class="outer_ clearfix">
                                        <figure class="image image2">
                                            <a href="<?php echo apply_filters( 'link', $instance['link'] );?>" data-fancybox="gallery">
                                                <img src="<?php echo apply_filters( 'image', $instance['image'] );?>" alt="">
                                            </a>
                                        </figure>
                                        <figure class="image image2">
                                            <a href="<?php echo apply_filters( 'link2', $instance['link2'] );?>" data-fancybox="gallery">
                                                <img src="<?php echo apply_filters( 'image2', $instance['image2'] );?>" alt="">
                                            </a>
                                        </figure>
                                        <figure class="image image2">
                                            <a href="<?php echo apply_filters( 'link3', $instance['link3'] );?>" data-fancybox="gallery">
                                                <img src="<?php echo apply_filters( 'image3', $instance['image3'] );?>" alt="">
                                            </a>
                                        </figure>
                                        <figure class="image image2">
                                            <a href="<?php echo apply_filters( 'link4', $instance['link4'] );?>" data-fancybox="gallery">
                                                <img src="<?php echo apply_filters( 'image4', $instance['image4'] );?>" alt="">
                                            </a>
                                        </figure>
                                        <figure class="image image2">
                                            <a href="<?php echo apply_filters( 'link5', $instance['link5'] );?>" data-fancybox="gallery">
                                                <img src="<?php echo apply_filters( 'image5', $instance['image5'] );?>" alt="">
                                            </a>
                                        </figure>
                                        <figure class="image image2">
                                            <a href="<?php echo apply_filters( 'link6', $instance['link6'] );?>" data-fancybox="gallery">
                                                <img src="<?php echo apply_filters( 'image6', $instance['image6'] );?>" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div><!-- instagram_item -->
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
        $instance['image2'] = ( ! empty( $new_instance['image2'] ) ) ? strip_tags( $new_instance['image2'] ) : '';
        $instance['link2'] = ( ! empty( $new_instance['link2'] ) ) ? strip_tags( $new_instance['link2'] ) : '';

        $instance['image3'] = ( ! empty( $new_instance['image3'] ) ) ? strip_tags( $new_instance['image3'] ) : '';
        $instance['link3'] = ( ! empty( $new_instance['link3'] ) ) ? strip_tags( $new_instance['link3'] ) : '';

        $instance['image4'] = ( ! empty( $new_instance['image4'] ) ) ? strip_tags( $new_instance['image4'] ) : '';
        $instance['link4'] = ( ! empty( $new_instance['link4'] ) ) ? strip_tags( $new_instance['link4'] ) : '';

        $instance['image5'] = ( ! empty( $new_instance['image5'] ) ) ? strip_tags( $new_instance['image5'] ) : '';
        $instance['link5'] = ( ! empty( $new_instance['link5'] ) ) ? strip_tags( $new_instance['link5'] ) : '';

        $instance['image6'] = ( ! empty( $new_instance['image6'] ) ) ? strip_tags( $new_instance['image6'] ) : '';
        $instance['link6'] = ( ! empty( $new_instance['link6'] ) ) ? strip_tags( $new_instance['link6'] ) : '';

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
// Image 1 with link 
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
// Image 2 with link 
        $image2 = '';
        if(isset($instance['image2']))
        {
            $image2 = $instance['image2'];
        }

        $link2 = __('link2','themx');
        if(isset($instance['link2']))
        {
            $link2 = $instance['link2'];
        }
// Image 3 with link 
        $image3 = '';
        if(isset($instance['image3']))
        {
            $image3 = $instance['image3'];
        }

        $link3 = __('link3','themx');
        if(isset($instance['link3']))
        {
            $link3 = $instance['link3'];
        }
// Image 4 with link 
        $image4 = '';
        if(isset($instance['image4']))
        {
            $image4 = $instance['image4'];
        }

        $link4 = __('link4','themx');
        if(isset($instance['link4']))
        {
            $link4 = $instance['link4'];
        }
// Image 5 with link 
        $image5 = '';
        if(isset($instance['image5']))
        {
            $image5 = $instance['image5'];
        }

        $link5 = __('link5','themx');
        if(isset($instance['link5']))
        {
            $link5 = $instance['link5'];
        }
// Image 6 with link 
        $image6 = '';
        if(isset($instance['image6']))
        {
            $image6 = $instance['image6'];
        }

        $link6 = __('link6','themx');
        if(isset($instance['link6']))
        {
            $link6 = $instance['link6'];
        }

        ?>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
<!-- Image 1 with link -->
        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image 1:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_attr_e( 'Image 1 Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
		</p>	
<!-- Image 2 with link -->
        <p>
            <label for="<?php echo $this->get_field_name( 'image2' ); ?>"><?php _e( 'Image 2:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image2' ); ?>" id="<?php echo $this->get_field_id( 'image2' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image2 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link2' ) ); ?>"><?php esc_attr_e( 'Image 2 Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link2' ) ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>">
		</p>
<!-- Image 3 with link -->
        <p>
            <label for="<?php echo $this->get_field_name( 'image3' ); ?>"><?php _e( 'Image 3:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image3' ); ?>" id="<?php echo $this->get_field_id( 'image3' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image3 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link3' ) ); ?>"><?php esc_attr_e( 'Image 3 Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link3' ) ); ?>" type="text" value="<?php echo esc_attr( $link3 ); ?>">
		</p>
<!-- Image 4 with link -->
        <p>
            <label for="<?php echo $this->get_field_name( 'image4' ); ?>"><?php _e( 'Image 4:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image4' ); ?>" id="<?php echo $this->get_field_id( 'image4' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image4 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link4' ) ); ?>"><?php esc_attr_e( 'Image 4 Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link4' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link4' ) ); ?>" type="text" value="<?php echo esc_attr( $link4 ); ?>">
		</p>
<!-- Image 5 with link -->
        <p>
            <label for="<?php echo $this->get_field_name( 'image5' ); ?>"><?php _e( 'Image 5:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image5' ); ?>" id="<?php echo $this->get_field_id( 'image5' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image5 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link5' ) ); ?>"><?php esc_attr_e( 'Image 5 Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link5' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link5' ) ); ?>" type="text" value="<?php echo esc_attr( $link5 ); ?>">
		</p>
<!-- Image 6 with link -->
        <p>
            <label for="<?php echo $this->get_field_name( 'image6' ); ?>"><?php _e( 'Image 6:','themx' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image6' ); ?>" id="<?php echo $this->get_field_id( 'image6' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image6 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link6' ) ); ?>"><?php esc_attr_e( 'Image 6 Link:', 'themx' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link6' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link6' ) ); ?>" type="text" value="<?php echo esc_attr( $link6 ); ?>">
		</p>	

    <?php
    }
}

add_action( 'widgets_init', create_function( '', 'register_widget("themx_instagram_upload_widget");' ) );

