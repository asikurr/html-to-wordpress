<?php
   function themx_theme_support(){
       // Register Nav Menu
	 register_nav_menus( array(
	'header_menu' => __('My Custom Header Menu','themx'),
	'footer_menu' => __('My Custom Footer Menu','themx'),
) );

	/* For the Featured Images
	===============================================================================*/
	add_theme_support('post-thumbnails' );
	/* For the Title tag
	===============================================================================*/	
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_editor_style( $stylesheet = 'editor-style.css' );
	/* Switch default core markup for search form, comment form, and comments to output valid HTML5.
	===============================================================================*/
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	if ( ! isset( $content_width ) ) {
			$content_width = 1920;
		}
	/* Enable support for Post Formats.
	===============================================================================*/
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );	
	/* Default Thumbnail
	===============================================================================*/
	add_image_size('blog_r_post',90,90,true);
	add_image_size('home_blog_post',370,234,true);
	add_image_size('',true);


	/* Makes wci textdomain for translation
	===============================================================================*/
	load_theme_textdomain( 'themx', get_template_directory() . '/languages' );
	/*  Add default posts and comments RSS feed links to head.
	===============================================================================*/
	add_theme_support( 'automatic-feed-links' );	
	/* This theme uses wp_nav_menu()
	===============================================================================*/

   }

add_action('after_setup_theme','themx_theme_support');





















?>