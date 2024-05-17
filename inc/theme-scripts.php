<?php
function solida_scripts() {
	//register styles
	$solida_option = get_option( 'solida_option' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css');		
	wp_enqueue_style( 'owl', get_template_directory_uri() .'/assets/css/owl.carousel.css');		
	wp_enqueue_style( 'slick', get_template_directory_uri() .'/assets/css/slick.css');		
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css');		
	wp_enqueue_style( 'remixicon', get_template_directory_uri() .'/assets/css/remixicon.css');		
	wp_enqueue_style( 'solida-style-default', get_template_directory_uri() .'/assets/css/default.css');
	wp_enqueue_style( 'solida-style-responsive', get_template_directory_uri() .'/assets/css/responsive.css');
	wp_enqueue_style( 'solida-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), '2.8.3', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.0.2', true );

	wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );
	
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.3.15', true );
	
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '2.0.3', true );
	wp_enqueue_script( 'waypoints-sticky', get_template_directory_uri() . '/assets/js/waypoints-sticky.min.js', array('jquery'), '2.0.5', true );
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery', 'imagesloaded'), '3.0.4', true );
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );	
	
	wp_enqueue_script('classie', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'), '1.0.1', true);	
	wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.js', array('jquery'), '1.7.0', true );	
		
	wp_enqueue_script('solida-mobilemenu', get_template_directory_uri() . '/assets/js/mobilemenu.js', array('jquery'), wp_get_theme()->get( 'Version' ), true);
	wp_enqueue_script('solida-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), wp_get_theme()->get( 'Version' ), true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'solida_scripts' );
	

add_action( 'admin_enqueue_scripts', 'solida_load_admin_styles' );
function solida_load_admin_styles($screen) {
	wp_enqueue_style( 'solida-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'solida-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'), wp_get_theme()->get( 'Version' ), true );
} 