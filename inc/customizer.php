<?php 
    function morgan_customizer_settings($wp_customizer){
        $wp_customizer->add_section('hero_area',array(
            'title'=>__('Hero Area','morgan'),
            'priority'=> '10'
        ));
        $wp_customizer->add_setting('morgan_hero_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_hero_check_cntrl',array(
            'label'=>__('Is Active Hero',"morgan"),
            'section'=>'hero_area',
            'settings'=>'morgan_hero_check',
            'type'=>'checkbox'
        ));
        $wp_customizer->add_setting('morgan_hero_subtitle',array(
            'default'=>"Hello This is Emran Sikder",
            'transport'=> "postMessage"
        ));
        $wp_customizer->add_control('morgan_hero_subtitle_cntrl',array(
            'label'=>__('Hero Subtitle',"morgan"),
            'section'=>'hero_area',
            'settings'=>'morgan_hero_subtitle',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_hero_check') ==1){
                    return true;
                }
                return false;
            }  
        ));
        
        $wp_customizer->add_setting('title-1',array(
            'default'=>"Developer",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('title-1_cntrl',array(
            'label'=>__('Hero Title 1 ',"morgan"),
            'section'=>'hero_area',
            'settings'=>'title-1',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_hero_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('title-2',array(
            'default'=>"Designer",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('title-2_cntrl',array(
            'label'=>__('Hero Title 2 ',"morgan"),
            'section'=>'hero_area',
            'settings'=>'title-2',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_hero_check') ==1){
                    return true;
                }
                return false;
            }  
        ));
        $wp_customizer->add_setting('title-3',array(
            'default'=>"Freelencer",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('title-3_cntrl',array(
            'label'=>__('Hero Title 3 ',"morgan"),
            'section'=>'hero_area',
            'settings'=>'title-3',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_hero_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('hero_image',array(
            'default'=>"Upload An Image",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'hero_image',array(
            'label'=>__('Upload Hero Image',"morgan"),
            'section'=>'hero_area',
            'settings'=>'hero_image',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_hero_check') ==1){
                    return true;
                }
                return false;
            }
        )));





        //About Us Area
        $wp_customizer->add_section('about_section',array(
            'title'=>__('About Section','morgan'),
            'priority'=> '20'
        ));
        $wp_customizer->add_setting('morgan_about_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_about_check_cntrl',array(
            'label'=>__('Is Active About Section',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_about_check',
            'type'=>'checkbox'  
        ));
        $wp_customizer->add_setting('about_image',array(
            'default'=>"Upload An Image",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'about_image',array(
            'label'=>__('Upload Hero Image',"morgan"),
            'section'=>'about_section',
            'settings'=>'about_image',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_about_check') ==1){
                    return true;
                }
                return false;
            }
        )));
        $wp_customizer->add_setting('about_title',array(
            'default'=>"Developer",
            'transport'=> "postMessage"
        ));
        $wp_customizer->add_control('about_title_cntrl',array(
            'label'=>__('Hero Title 1 ',"morgan"),
            'section'=>'about_section',
            'settings'=>'about_title',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_about_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        
        $wp_customizer->selective_refresh->add_partial('about-section',array(
            'selector' => '#customize',
            'settings' => 'about_title',
            'render_callback'=>function(){
                return get_theme_mod('about_title');
            }
        ));
        $wp_customizer->add_setting('about_content',array(
            'default'=>"Developer",
            'transport'=> "postMessage"
        ));
        $wp_customizer->add_control('about_content_cntrl',array(
            'label'=>__('Content goes here',"morgan"),
            'section'=>'about_section',
            'settings'=>'about_content',
            'type'=>'textarea',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_about_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
       $wp_customizer->selective_refresh->add_partial('about-section-content',array(
            'selector' => '#customizer',
            'settings' => 'about_content',
            'render_callback'=>function(){
                return get_theme_mod('about_content');
            }
        ));
        
        $wp_customizer->add_setting('morgan_fb_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_fb_check_cntrl',array(
            'label'=>__('Have Facebook ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_fb_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('fb_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('fb_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'fb_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_fb_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        // twitter
        $wp_customizer->add_setting('morgan_tw_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_tw_check_cntrl',array(
            'label'=>__('Have Twitter ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_tw_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('tw_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('tw_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'tw_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_tw_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        // Google
        $wp_customizer->add_setting('morgan_go_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_go_check_cntrl',array(
            'label'=>__('Have Google ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_go_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('go_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('go_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'go_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_go_check') ==1){
                    return true;
                }
                return false;
            } 
        ));

        //Dribble
        $wp_customizer->add_setting('morgan_dri_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_dri_check_cntrl',array(
            'label'=>__('Have Dribble ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_dri_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('dri_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('dri_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'dri_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_dri_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        // Instagram 

        $wp_customizer->add_setting('morgan_ins_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_ins_check_cntrl',array(
            'label'=>__('Have Instagram ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_ins_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('ins_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('ins_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'ins_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_ins_check') ==1){
                    return true;
                }
                return false;
            } 
        ));


        // Youtube

        $wp_customizer->add_setting('morgan_you_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_you_check_cntrl',array(
            'label'=>__('Have Youtube ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_you_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('you_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('you_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'you_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_you_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        // Pinterest Check
        $wp_customizer->add_setting('morgan_pin_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_pin_check_cntrl',array(
            'label'=>__('Have Pinterest ? ',"morgan"),
            'section'=>'about_section',
            'settings'=>'morgan_pin_check',
            'type'=>'checkbox'  
        ));
        
        $wp_customizer->add_setting('pin_link',array(
            'default'=>"#",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('pin_content_cntrl',array(
            'label'=>__('Put Your link here',"morgan"),
            'section'=>'about_section',
            'settings'=>'pin_link',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_pin_check') ==1){
                    return true;
                }
                return false;
            } 
        ));

        //// Services Section
        $wp_customizer->add_section('service_section',array(
            'title'=>__('Service Section','morgan'),
            'priority'=> '20'
        ));
        $wp_customizer->add_setting('morgan_services_check',array(
            'default'=>"1",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('morgan_services_check_cntrl',array(
            'label'=>__('My Services ? ',"morgan"),
            'section'=>'service_section',
            'settings'=>'morgan_services_check',
            'type'=>'checkbox'  
        ));
        $wp_customizer->add_setting('service_icon',array(
            'default'=>"fa fa-desktop",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_icon_cntrl',array(
            'label'=>__('Service Icon',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_icon',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('service_title',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_title_cntrl',array(
            'label'=>__('Service Title',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_title',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->selective_refresh->add_partial('service-title-1',array(
            'selector' => '#st1',
            'settings' => 'service_title',
            'render_callback'=>function(){
                return get_theme_mod('service_title');
            }
        ));
        $wp_customizer->add_setting('service_descriptoin',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_descriptoin_cntrl',array(
            'label'=>__('Service Description',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_descriptoin',
            'type'=>'textarea',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        //
        $wp_customizer->add_setting('service_icon1',array(
            'default'=>"fa fa-desktop",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_icon1_cntrl',array(
            'label'=>__('Service Icon',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_icon1',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('service_title1',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_title1_cntrl',array(
            'label'=>__('Service Title',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_title1',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->selective_refresh->add_partial('service-title-2',array(
            'selector' => '#st2',
            'settings' => 'service_title1',
            'render_callback'=>function(){
                return get_theme_mod('service_title');
            }
        ));

        $wp_customizer->add_setting('service_descriptoin1',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_descriptoin1_cntrl',array(
            'label'=>__('Service Description',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_descriptoin1',
            'type'=>'textarea',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        ///
        $wp_customizer->add_setting('service_icon3',array(
            'default'=>"fa fa-desktop",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_icon3_cntrl',array(
            'label'=>__('Service Icon',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_icon3',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('service_title3',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_title3_cntrl',array(
            'label'=>__('Service Title',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_title3',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->selective_refresh->add_partial('service-title-3',array(
            'selector' => '#st3',
            'settings' => 'service_title3',
            'render_callback'=>function(){
                return get_theme_mod('service_title');
            }
        ));
        $wp_customizer->add_setting('service_descriptoin3',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_descriptoin3_cntrl',array(
            'label'=>__('Service Description',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_descriptoin3',
            'type'=>'textarea',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        ///
        $wp_customizer->add_setting('service_icon2',array(
            'default'=>"fa fa-desktop",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_icon2_cntrl',array(
            'label'=>__('Service Icon',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_icon2',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('service_title2',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_title2_cntrl',array(
            'label'=>__('Service Title',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_title2',
            'type'=>'text',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->selective_refresh->add_partial('service-title-4',array(
            'selector' => '#st4',
            'settings' => 'service_title2',
            'render_callback'=>function(){
                return get_theme_mod('service_title');
            }
        ));
        $wp_customizer->add_setting('service_descriptoin2',array(
            'default'=>"Web Design",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('service_descriptoin2_cntrl',array(
            'label'=>__('Service Description',"morgan"),
            'section'=>'service_section',
            'settings'=>'service_descriptoin2',
            'type'=>'textarea',
            'active_callback'=> function(){
                if(get_theme_mod( 'morgan_services_check') ==1){
                    return true;
                }
                return false;
            } 
        ));
        $wp_customizer->add_setting('footer_text',array(
            'default'=>"&copy; 2018 Morgan | All rights reserved.",
            'transport'=> "refresh"
        ));
        $wp_customizer->add_control('footer_text_cntrl',array(
            'label'=>__('Footer Text',"morgan"),
            'section'=>'hero_area',
            'settings'=>'footer_text',
            'type'=>'text'
        ));


    }
    add_action('customize_register','morgan_customizer_settings');


