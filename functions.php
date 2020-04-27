<?php



//Enqueue Linking
 if ( file_exists( get_template_directory(). '/inc/enqueue.php' ) ){
        require_once(get_template_directory(). '/inc/enqueue.php');
 }
//theme Support Linking
 if ( file_exists( get_template_directory(). '/inc/theme-support.php' ) ){
        require_once(get_template_directory(). '/inc/theme-support.php');
 }
//theme wp-bootstrap-navwalker
 if ( file_exists( get_template_directory(). '/inc/wp-bootstrap-navwalker.php' ) ){
        require_once(get_template_directory(). '/inc/wp-bootstrap-navwalker.php');
 }
//themx TGM plugin activation
 if ( file_exists( get_template_directory(). '/inc/plugin/tgm-activation.php' ) ){
        require_once(get_template_directory(). '/inc/plugin/tgm-activation.php');
 }
//themx Theme Option linking
 if ( file_exists( get_template_directory(). '/inc/theme-options.php' ) ){
        require_once(get_template_directory(). '/inc/theme-options.php');
 }
/*//themx custom-portfolio linking
 if ( file_exists( get_template_directory(). '/inc/custom-portfolio.php' ) ){
        require_once(get_template_directory(). '/inc/custom-portfolio.php');
 }*/
//themx custom-footer Widgets linking
 if ( file_exists( get_template_directory(). '/inc/custom-widget.php' ) ){
        require_once(get_template_directory(). '/inc/custom-widget.php');
 }
//themx custom-blog-widgets linking
 if ( file_exists( get_template_directory(). '/inc/blog-widgets.php' ) ){
        require_once(get_template_directory(). '/inc/blog-widgets.php');
 }
//themx Codestar framework linking
 if ( file_exists( get_template_directory(). '/codestar/cs-framework.php' ) ){
        require_once(get_template_directory(). '/codestar/cs-framework.php');
 }
//themx comment style linking
 if ( file_exists( get_template_directory(). '/inc/comment-style.php' ) ){
        require_once(get_template_directory(). '/inc/comment-style.php');
 }




?>