<?php 
        if(get_theme_mod( 'morgan_about_check', 1)):
        ?>
        <!--Start About Section-->
        <section class="about padding-top-110 padding-bottom-90" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 about-img">
                        <div class="my__img animated animated_scroll fadeInUp" style="animation-delay: 0.3s">
                            <img src="<?php echo get_theme_mod( "about_image");?>">
                        </div>
                    </div>
                    <div class="col-md-7 padding-left-25">
                        <h3 class="animated animated_scroll fadeInUp" style="animation-delay: 0.3s" id = "customize"><?php echo get_theme_mod( 'about_title');?></h3>
                        <p class="animated animated_scroll fadeInUp" style="animation-delay: 0.3s" id = "customizer"><?php echo get_theme_mod('about_content');?></p>
                        <div class="follow-me animated animated_scroll fadeInUp" style="animation-delay: 0.3s">
                            <h6>Follow Me :</h6>
                            <ul class="text-center list-unstyled social">
                                <?php if(get_theme_mod( 'morgan_fb_check', 1)):?>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'fb_link');?>">
                                        <i class="fa fa-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_theme_mod( 'morgan_tw_check', 1)):?>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'tw_link');?>">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_theme_mod( 'morgan_go_check', 1)):?>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'go_link');?>">
                                        <i class="fa fa-google-plus fa-2x"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_theme_mod( 'morgan_dri_check', 1)):?>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'dri_link');?>">
                                        <i class="fa fa-dribbble fa-2x"></i>                            
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_theme_mod( 'morgan_ins_check', 1)):?>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'ins_link');?>">
                                        <i class="fa fa-instagram fa-2x"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_theme_mod( 'morgan_you_check', 1)):?>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube fa-2x"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(get_theme_mod( 'morgan_pin_check', 1)):?>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'pin_link');?>">
                                        <i class="fa fa-pinterest fa-2x"></i>
                                    </a>
                                </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div><!--.col-sm-7-->
                </div><!--.row-->
            </div><!--.container-->
            <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill: #fff;">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>
        </section>
        <!--End About Section-->
        <?php 
            endif;
        ?>

