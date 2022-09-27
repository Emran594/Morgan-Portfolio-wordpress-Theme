        <!--Start Contact Section-->
        <section class="contact padding-top-110 padding-bottom-90 primary_bg" id="contact">
                <div class="container">
                    <div class="sec_title">
                        <h2><?php _e("Contact");?></h2>
                    </div>
                    <div class="row">
                        
                        <div class="col-sm-9">
                            <div class="contact_form animated animated_scroll fadeInUp" style="animation-delay: 0.4s">
                                <form action="index.php" method="post">
                                    <?php custom_form();?>
                                    
                                </form>
                               
                                
                            </div>
                        </div>

                        <div class="col-sm-3 padding-left-25">
                            <div class="info animated animated_scroll fadeInUp" style="animation-delay: 0.3s">

                                <div class="content">
                                    <?php if(is_active_sidebar( "sidebar-1" )){
                                        dynamic_sidebar( 'sidebar-1' );
                                    }
                                    
                                    ?>
                                </div>

                            </div>
                        </div>


                    </div><!--.row-->
                </div><!--.container-->    
        </section>
        <!--End Contact Section-->