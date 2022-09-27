<!--Start Services Section-->
        <?php 
        if(get_theme_mod( 'morgan_services_check', 1)):
        ?>
    <section class="services padding-top-110 padding-bottom-90 primary_bg" id="services">
            <div class="container">
                <div class="sec_title">
                    <h2><?php _e("Services")?></h2>
                </div>
                <div class="row">
                    
                    <!--Service 1-->
                    <div class="col-md-3 col-sm-6 item animated animated_scroll fadeInUp" style="animation-delay: 0.3s">
                        <div class="content">
                            <div class="icon">
                                <i class="<?php echo get_theme_mod( "service_icon" );?>"></i>
                            </div>
                            <h3 id = "st1"><?php echo get_theme_mod( "service_title" );?></h3>
                            <?php echo get_theme_mod("service_descriptoin");?>
                        </div>
                    </div>
                    
                    <!--Service 2-->
                    <div class="col-md-3 col-sm-6 item animated animated_scroll fadeInUp" style="animation-delay: 0.6s">
                        <div class="content">
                            <div class="icon">
                            <i class="<?php echo get_theme_mod( "service_icon1" );?>"></i>
                            </div>
                            <h3 id = "st2"><?php echo get_theme_mod( "service_title1" );?></h3>
                            <?php echo get_theme_mod("service_descriptoin1");?>
                        </div>
                    </div>

                    <!--Service 3-->
                    <div class="col-md-3 col-sm-6 item animated animated_scroll fadeInUp" style="animation-delay: 0.9s">
                        <div class="content">
                            <div class="icon">
                            <i class="<?php echo get_theme_mod( "service_icon3" );?>"></i>
                            </div>
                            <h3 id = "st3"><?php echo get_theme_mod( "service_title3" );?></h3>
                            <?php echo get_theme_mod("service_descriptoin3");?>
                        </div>
                    </div>
                    
                    <!--Service 4-->
                    <div class="col-md-3 col-sm-6 item animated animated_scroll fadeInUp" style="animation-delay: 1.2s">
                        <div class="content">
                            <div class="icon">
                            <i class="<?php echo get_theme_mod( "service_icon2" );?>"></i>
                            </div>
                            <h3 id = "st4"><?php echo get_theme_mod( "service_title2" );?></h3>
                            <?php echo get_theme_mod("service_descriptoin2");?>
                        </div>
                    </div>
                    
                </div><!--.row-->
            </div><!--.container-->
            <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>
        </section>
        <!--End Services Section-->
        <?php endif;?>