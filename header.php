<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
    <head>
        <!-- META DATA -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
        
         <?php wp_head(); ?> 

    </head>
    <body <?php body_class();?>>
        <!-- Pre-loader Start -->
        <div id="spinningSquaresG1">
            <div id="spinningSquaresG2">
                <div id="fountainTextG">
                    <div id="fountainTextG_1" class="fountainTextG">T</div>
                    <div id="fountainTextG_2" class="fountainTextG">H</div>
                    <div id="fountainTextG_3" class="fountainTextG">E</div>
                    <div id="fountainTextG_4" class="fountainTextG">M</div>
                    <div id="fountainTextG_5" class="fountainTextG">E</div>
                    <div id="fountainTextG_6" class="fountainTextG">X</div>
                </div>
            </div>
        </div>
        <!-- Pre-loader End -->

        <header>
            <nav class="main-nav menu-dark js-transparent menu-transparent">
                <div class="container">
                    <div class="navbar">
                        <div class="brand-logo">
                            <?php 
                                    $header_logo = cs_get_option('header_loho');
                                    if ($header_logo) { ?>
                            <a class="navbar-brand" href="<?php echo esc_url(site_url('/'));?>">
                                <img src="<?php echo esc_url(wp_get_attachment_image_src($header_logo, 'full')[0] ); ?>" alt="THEMEX">
                            </a>
                            <?php
                                    }
                                   ?>
                        </div><!--brand-logo -->

                        <div class="navbar-header">
                            <div class="inner-nav right-nav">
                                <ul>
                                    <li>
                                        <a href="#/" class="ti-search" id='search-trigger'></a>
                                    </li> 
                                </ul>

                                <form action='<?php echo home_url( '/' ); ?>' id='search' method='get'>
                                    <div class="input">
                                        <div class="container">
                                            <input class="search" placeholder='Search...' type='text' value="<?php get_search_query(); ?>" >
                                            <button class="submit ti-search" type="submit" value="close"></button>
                                        </div>
                                    </div>
                                    <button class="ti-close" id="close" type="reset"></button>
                                </form>
                            </div><!-- inner-nav right-nav  -->
                        </div><!-- navbar-header  -->

                             <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'header_menu',
                                        'theme_location'    => 'header_menu',
                                        'depth'             => 5,
                                        'container'         => 'div',
                                        'container_class'   => 'custom-collapse navbar-collapse collapse inner-nav',
                                        'container_id'      => '',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                ?>

                    </div>
                </div><!-- container -->
            </nav><!-- nav -->
           
        </header><!-- Header End -->