<?php
/*-----------------------------------------------------------------------------------*/
/*	Register & enqueue styles/scripts Start
/*-----------------------------------------------------------------------------------*/ 

//Enqueue Css Files
function themx_theme_css_js() {
	
	wp_enqueue_style( 'themx-fonts', themx_fonts_url(), array(), '1.0.0' );

	/*wp_enqueue_style( 'themx_g_font', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,700i,900%7COpen+Sans:300,400,600,700,800', array(), '1.0.0', 'all' );*/

	wp_enqueue_style( 'themx_font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.5.0', 'all' );

	wp_enqueue_style( 'themx_animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '4.5.0', 'all' );

	wp_enqueue_style( 'themx_owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '4.5.0', 'all' );	
	
	wp_enqueue_style( 'themx_jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), '4.5.0', 'all' );
		
	wp_enqueue_style( 'themx_lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', array(), '4.5.0', 'all' );
			
	wp_enqueue_style( 'themx_layers', get_template_directory_uri() . '/rs-plugin/css/layers.css', array(), '4.5.0', 'all' );
				
	wp_enqueue_style( 'themx_settings', get_template_directory_uri() . '/rs-plugin/css/settings.css', array(), '4.5.0', 'all' );	
					
	wp_enqueue_style( 'themx_ms-staff-style', get_template_directory_uri() . '/assets/css/ms-staff-style.css', array(), '4.5.0', 'all' );	
					
	wp_enqueue_style( 'themx_ms-fullscreen', get_template_directory_uri() . '/assets/css/ms-fullscreen.css', array(), '4.5.0', 'all' );	
						
	wp_enqueue_style( 'themx_masterslider', get_template_directory_uri() . '/assets/css/masterslider.main.css', array(), '4.5.0', 'all' );	
						
	wp_enqueue_style( 'themx_video-js', get_template_directory_uri() . '/assets/css/video-js.css', array(), '4.5.0', 'all' );	
							
	wp_enqueue_style( 'themx_themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '4.5.0', 'all' );	
							
	wp_enqueue_style( 'themx_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.0', 'all' );	
	
								
	wp_enqueue_style( 'themx_style', get_template_directory_uri() . '/assets/css/style.css', array(), '4.5.0', 'all' );	
	
								
	wp_enqueue_style( 'themx_responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '4.5.0', 'all' );	
	
	
	
//Enqueue Js Files
	 
	wp_enqueue_script( 'themx_jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), '2.8.3', true ); 
		 
	wp_enqueue_script( 'themx_modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '2.8.3', true );
	 		 
	wp_enqueue_script( 'themx_waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '2.8.3', true ); 
		 		 
	wp_enqueue_script( 'themx_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_ripples', get_template_directory_uri() . '/assets/js/ripples-min.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_video', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.js', array('jquery'), '2.8.3', true );   
		 		 
	wp_enqueue_script( 'themx_mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_themepunch_tools', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_themepunch_revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_masterslider', get_template_directory_uri() . '/assets/js/masterslider.min.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_masterslider_staff', get_template_directory_uri() . '/assets/js/masterslider.staff.carousel.js', array('jquery'), '2.8.3', true );  
		 		 
	wp_enqueue_script( 'themx_extension_video', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_slideanims', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_actions', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_layeranimation', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_kenburn', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_navigation', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_migration', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_parallax', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '2.8.3', true ); 
 	 
	wp_enqueue_script( 'themx_extension_custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '2.8.3', true ); 


}
add_action( 'wp_enqueue_scripts', 'themx_theme_css_js' );


//Google font add

function themx_fonts_url() {
$fonts_url = '';

$lato = _x( 'on', 'Lato font: on or off', 'themx' );
$open_sans = _x( 'on', 'Open Sans font: on or off', 'themx' );


 
if ( 'off' !== $lato || 'off' !== $open_sans ) {
$font_families = array();
 
if ( 'off' !== $lato ) {
$font_families[] = 'Lato:100,300,400,700,900italic';
}

if ( 'off' !== $open_sans ) {
$font_families[] = 'Open Sans:300,400,600,700,800italic';
}

 
$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'latin,latin-ext,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,vietnamese' ),
);
 
$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
}
 
return esc_url_raw( $fonts_url );
}

//Adding Google fonts to the editor

function themx_editor_styles() {
add_editor_style( array( 'editor-style.css', themx_fonts_url() ) );
}
add_action( 'after_setup_theme', 'themx_editor_styles' );

//Adding fonts to the Custom Header screen

function themx_custom_header_fonts() {
wp_enqueue_style( 'themx-fonts', themx_fonts_url(), array(), '1.0.0' );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'themx_custom_header_fonts' );