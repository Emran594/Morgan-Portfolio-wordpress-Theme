
        <!--Start Footer-->
        <footer>
            <div class="container text-center animated animated_scroll fadeInUp" style="animation-delay: 0.3s">
                <h3><?php 
                        if ( has_custom_logo() ) {
                                       the_custom_logo(  );
                        } else {
                                        echo get_bloginfo( 'name' );
                        }
                            ?></h3>
                <div class="social-links">
                    <!--Social links-->
                    <?php if(get_theme_mod( 'morgan_fb_check', 1)):?>
                    <a href="<?php echo get_theme_mod( 'fb_link');?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(get_theme_mod( 'morgan_tw_check', 1)):?>
                    <a href="<?php echo get_theme_mod( 'tw_link');?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(get_theme_mod( 'morgan_go_check', 1)):?>
                    <a href="<?php echo get_theme_mod( 'go_link');?>" target="_blank">
                        <i class="fa fa-google"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(get_theme_mod( 'morgan_dri_check', 1)):?>
                    <a href="<?php echo get_theme_mod( 'dri_link');?>" target="_blank">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <?php endif; ?>
                </div>
                <p><?php echo get_theme_mod('footer_text');?></p>
            </div><!--.container-->  
        </footer>
        <!--End Footer-->


     <?php wp_footer(  );?>

    </body>

<!-- Mirrored from morgan-avab.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 16:32:57 GMT -->
</html>