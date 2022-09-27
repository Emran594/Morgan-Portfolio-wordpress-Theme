<?php
 require_once get_theme_file_path( "/inc/tgm.php" );
 require_once get_theme_file_path("/inc/customizer.php" );
 function morgan_bootstraping(){
    load_theme_textdomain( "morgan");
    add_theme_support( "title-tag" );
    add_theme_support( "custom-logo" );
    add_theme_support( "automatic-feed-links" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( 'html5',array(
        'search-form','comment-form','comment-list','gallery','caption  '
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'morgan' ),
        'social'  => __( 'Social Links Menu', 'morgan' ),
    ) );
    $defaults = array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
       

}
add_action("after_setup_theme","morgan_bootstraping" );

function morgan_assets(){
    wp_enqueue_style( "google-fonts","//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CMontserrat:300,400,500,600,700,800,900" );
    wp_enqueue_style( "bootstrap", get_template_directory_uri()."/assets/css/bootstrap.css", array(), '1.0');
    wp_enqueue_style( "animate-css", get_template_directory_uri()."/assets/css/animate.css", array(), '1.0');
    wp_enqueue_style( "magnific", get_template_directory_uri()."/assets/css/magnific-popup.css", array(), '1.0');
    wp_enqueue_style( "font-awesome", get_template_directory_uri()."/assets/css/font-awesome.min.css", array(), '1.0');
    wp_enqueue_style( "main-css", get_template_directory_uri()."/assets/css/style.css", array(), '1.0');
    wp_enqueue_style( "responsive-css", get_template_directory_uri()."/assets/css/responsive.css", array(), '1.0');
    wp_enqueue_style( "morgan-style",get_stylesheet_uri(  ) );


   // wp_enqueue_script( "spy-roll", get_template_directory_uri(  )."/assets/js/spy-scroll.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "fittext-js", get_template_directory_uri(  )."/assets/js/jquery.fittext.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "svg-min-js", get_template_directory_uri(  )."/assets/js/snap.svg-min.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "classie-js", get_template_directory_uri(  )."/assets/js/classie.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "svgloader", get_template_directory_uri(  )."/assets/js/svgLoader.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "bootstrap-js", get_template_directory_uri(  )."/assets/js/bootstrap.min.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "magnific-js", get_template_directory_uri(  )."/assets/js/jquery.magnific-popup.min.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "isotope-js", get_template_directory_uri(  )."/assets/js/isotope.pkgd.min.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "animate-js", get_template_directory_uri(  )."/assets/js/animateHeader.js", array("jquery"), "1.0", true );
    wp_enqueue_script( "custom-js", get_template_directory_uri(  )."/assets/js/custom.js", array("jquery"), "1.0", true );
    
}
add_action( "wp_enqueue_scripts","morgan_assets" ); 

function photo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'sidebar', 'photo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'photo' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'photo_widgets_init' );

function custom_form(){
    $form = do_shortcode( "[contact-form-7 id='717' title='Contact form 1']");
    $final  = str_replace("class='wpcf7-form-control wpcf7-text wpcf7-validates-as-required'","class='form-control wpcf7-text wpcf7-validates-as-required'",$form);
    $final1  = str_replace('wpcf7-form-control wpcf7-submit','wpcf7-form-control submit btn wpcf7-submit',$form);
    echo $form;
}


function morgan_cust_assets(){
    wp_enqueue_script( "morgan-customizer-js", get_theme_file_uri( "/assets/js/customizer.js" ), array('jquery','customize-preview'),time(),true );
}
add_action( "customize_preview_init","morgan_cust_assets" );