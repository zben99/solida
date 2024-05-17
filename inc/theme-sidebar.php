<?php
/**
 * @author  Tentaz
 * @since   1.0
 * @version 1.0 
 */

function solida_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'solida' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'This is sidebar area for blog post and single post.', 'solida' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	if (class_exists( 'ReduxFramework' )){
		register_sidebar( array(
			'name' => esc_html__( 'Topbar Widget Area', 'solida' ),
			'id' => 'topbar_menu',
			'description' => esc_html__( 'Topbar widget area', 'solida' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="topbar-title">',
			'after_title' => '</h3>'
		) ); 
	}

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar Shop', 'solida' ),
			'id'            => 'sidebar_shops',
			'description'   => esc_html__( 'Sidebar Shop', 'solida' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	
	if (class_exists( 'ReduxFramework' )){
		register_sidebar( array(
			'name'          => esc_html__( 'Off Canvas Sidebar', 'solida' ),
			'id'            => 'sidebarcanvas-1',
			'description'   => esc_html__( 'Off canvas widget area.', 'solida' ),
			'before_widget' => '<div id="%1$s" class="widget icon-list %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Footer CTA Widget Area', 'solida' ),
			'id' => 'footer_cta',
			'description' => esc_html__( 'Footer cta widget area', 'solida' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="footer-title">',
			'after_title' => '</h3>'
		) ); 

		register_sidebar( array(
			'name' => esc_html__( 'Service Menu', 'solida' ),
			'id' => 'tentaz__services',
			'description' => esc_html__( 'Service Menu Widget', 'solida' ),
			'before_widget' => '<section id="%1$s" class="ten_ser widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="service-title">',
			'after_title' => '</h3>'
		) ); 
	}

	register_sidebar( array(
		'name' => esc_html__( 'Footer One Widget Area', 'solida' ),
		'id' => 'footer1',
		'description' => esc_html__( 'Footer 1 widget area', 'solida' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="footer-title">',
		'after_title' => '</h3>'
	) ); 		 				



	register_sidebar( array(
		'name' => esc_html__( 'Footer Two Widget Area', 'solida' ),
		'id' => 'footer2',
		'description' => esc_html__( 'Footer 2 widget area', 'solida' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="footer-title">',
		'after_title' => '</h3>'
	) ); 
	
	 register_sidebar( array(
			'name' => esc_html__( 'Footer Three Widget Area', 'solida' ),
			'id' => 'footer3',
			'description' => esc_html__( 'Footer 3 widget area', 'solida' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="footer-title">',
			'after_title' => '</h3>'
	) );

	register_sidebar( array(
			'name' => esc_html__( 'Footer Four Widget Area', 'solida' ),
			'id' => 'footer4',
			'description' => esc_html__( 'Footer 4 widget area', 'solida' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="footer-title">',
			'after_title' => '</h3>'
	) );

	if (class_exists( 'ReduxFramework' )){
		register_sidebar( array(
				'name' => esc_html__( 'Copyright Widget', 'solida' ),
				'id' => 'copy_right',
				'description' => esc_html__( 'Copyright Right widget area', 'solida' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="footer-title">',
				'after_title' => '</h3>'
		) ); 

		register_sidebar( array(
				'name' => esc_html__( 'Social Widget', 'solida' ),
				'id' => 'copy_social',
				'description' => esc_html__( 'Copyright Right widget area', 'solida' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="footer-title">',
				'after_title' => '</h3>'
		) );

		register_sidebar( array(
				'name' => esc_html__( 'Copyright Menu', 'solida' ),
				'id' => 'copy_right_menu',
				'description' => esc_html__( 'Copyright Right widget area', 'solida' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h3 class="footer-title">',
				'after_title' => '</h3>'
		) );
	}
}

add_action( 'widgets_init', 'solida_widgets_init' );