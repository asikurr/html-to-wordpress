                     <div class="blog_standard_item">
                             <div class="blog_standard_img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php 
                       if(has_post_thumbnail()){the_post_thumbnail();}
                    ?>
                                </a>
                            </div>

                            <div class="blog_standard_content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="blog_standard_single_admin">
                                    <?php echo esc_html('BY','themx'); ?> <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                                    <?php echo esc_html(get_the_time('M'));?> <?php echo esc_html(get_the_time('d'));?> <?php echo esc_html(get_the_time('Y'));?><span>|</span> <?php the_category(' , ');?> <?php the_tags(); ?>
                       
                                </p>

                                <p class="blog_standard_single_details">
                                    <?php
                                           if(!has_excerpt()) {
                                            echo esc_html(wp_trim_words(get_the_content(), 50));
                                           }else
                                           {
                                            has_excerpt();
                                           }
                                       ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="blog_standard_single_readmore">READ MORE</a>
                            </div>
                        </div><!-- blog_standard_item -->