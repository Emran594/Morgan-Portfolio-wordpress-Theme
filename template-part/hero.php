<?php 
        if(get_theme_mod( 'morgan_hero_check', 1)):
        ?>
        <section class="home svg_shape bg_image" id="home" style="background-image: url(<?php echo get_theme_mod( "hero_image");?>)">
            <div class="full_height">
                
                <!-- nav -->
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only"><?php _e("Toggle navigation")?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- LOGO -->
                            <a class="navbar-brand" href="<?php the_permalink( );?>">
                                <?php 
                                    if ( has_custom_logo() ) {
                                       the_custom_logo(  );
                                } else {
                                        echo get_bloginfo( 'name' );
                                }
                                ?>
                            </a>

                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#home" class="smooth_scroll"><?php _e("Home")?></a>
                                </li>
                                <li>
                                    <a href="#about" class="smooth_scroll"><?php _e("About")?></a>
                                </li>
                                <li>
                                    <a href="#services" class="smooth_scroll"><?php _e("Services")?></a>
                                </li>
                                <li>
                                    <a href="#portfolio" class="smooth_scroll"><?php _e("Portfolio")?></a>
                                </li>
                                <li>
                                    <a href="#contact" class="smooth_scroll"><?php _e("Contact")?></a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!--.container-->
                </nav>
        
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <h3 class="custom"><?php echo get_theme_mod('morgan_hero_subtitle');?></h3>
                            <h1 class="cd-headline letters rotate-2 is-full-width">
                                <span class="cd-words-wrapper">
                                    <b class="is-visible"><?php echo get_theme_mod('title-1');?></b>
                                    <b><?php echo get_theme_mod('title-2');?></b>
                                    <b><?php echo get_theme_mod('title-3');?></b>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container go_down_container">
                    <div class="go_down">
                        <a href="#about" class="smooth_scroll">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill: #fff;">
                    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
                </svg>
            </div><!--.full_height-->
        </section>
        <!--End Home Section-->
        <?php 
            endif;
        ?>