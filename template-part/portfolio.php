
        <!--Start Portfolio Section-->
        <section class="portfolio padding-top-110 padding-bottom-90" id="portfolio">
            <div class="container">
                <div class="sec_title">
                    <h2><?php _e("Portfolio");?></h2>
                </div>
                <ul class="list-unstyled ul-filter">
                    <li data-filter="*" class="active_filter"><?php echo __("all","morgan");?></li>                   
                <?php
                $categories = get_categories();
                foreach($categories as $category):
                    $cat_name = $category->name;
                    ?>
                    <li data-filter=".<?php echo esc_html( $cat_name );?>"><?php echo esc_html( $cat_name );?></li>

                    <?php 
                endforeach;
                ?>

                </ul>
                <div class="row grid">
                <?php 
                    while(have_posts(  )){
                        the_post(  );
                        ?><!--project 1-->
                    <div class="col-xs-12 col-sm-6 col-md-4 grid-sizer grid-item
                     <?php 
                     $categories = get_the_category( );
                     foreach($categories as $category){
                       echo $category->name;
                    }
                        ?>">
                        <div class="box animated animated_scroll fadeInUp" style="animation-delay: 0.3s">
                            <div class="my_img">
                                <?php the_post_thumbnail( 'large' );?>
                            </div>
                        </div>
                    </div>
                        <?php 
                    }
                ?>
                </div><!--.row-->
            </div><!--.container-->
            <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill: #fff;">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>
        </section>
        <!--End Portfolio Section-->