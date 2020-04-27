    
       <div id="scroll-Top">
            <a class="ScrollUp" id="Themx_Scrool_top" href="#">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div><!--.scroll-Top-->

     <footer>
            <div class="seceond_main_footer_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                             <?php dynamic_sidebar('footer_sidebar');?>
                        </div>
                        <div class="col-md-4">
                            
                            <?php dynamic_sidebar('footer_sidebar1');?>
                            
                        </div>
                        <div class="col-md-4">
                            <?php dynamic_sidebar('footer_sidebar2');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seceond_footer_section text-center">
                <h4><?php echo esc_html(cs_get_option('copyright_1')); ?> <span>|</span> <?php echo esc_html(cs_get_option('copyright_2')); ?> <span>|</span> <?php echo esc_html(cs_get_option('copyright_3')); ?> <span>|</span> <?php echo esc_html(cs_get_option('copyright_4')); ?></h4>
            </div>    
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>