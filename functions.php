<?php
const VERSION = 1.0;

function vcl_theme_setup(){
	load_theme_textdomain( 'vcl');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form' ) );
	add_theme_support( 'post-formats', array('aside','image','gallery','video','audio','link','quote','status') );
	add_editor_style('assets/css/editor-style.css');
	register_nav_menu('topmenu',__('Top Menu','vcl'));

	register_nav_menus(array(
		'footer-middle' => __('Footer Middle Menu','vcl'),
		'footer-right' => __('Footer Right Menu','vcl'),
	));

	// add_image_size('philosophy-home-square',400,400,true);
}
add_action('after_setup_theme','vcl_theme_setup');


function vcl_assets(){
	//css enqueue
	
	
    wp_enqueue_style('vcl-fontawesome-css','https://use.fontawesome.com/releases/v5.7.1/css/all.css',null, VERSION);
    wp_enqueue_style('vcl-bootstrap-css',get_theme_file_uri('vendor/bootstrap/css/bootstrap.min.css'),null, VERSION);
    wp_enqueue_style('vcl-video-css',get_theme_file_uri('vendor/modal-video/css/modal-video.min.css'),null, VERSION);

    wp_enqueue_style('leaflet-css',get_theme_file_uri('vendor/leaflet/leaflet.css'),null, VERSION);
	wp_enqueue_style('vcl-owl-css',get_theme_file_uri('vendor/owl.carousel2/assets/owl.carousel.min.css'),null, VERSION);
	wp_enqueue_style('vcl-owl-theme-css',get_theme_file_uri('vendor/owl.carousel2/assets/owl.theme.default.min.css'),null, VERSION);
	wp_enqueue_style('poppins-font','https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap',null, VERSION);
	wp_enqueue_style('vcl-theme-css',get_theme_file_uri('css/style.default.css'),null, VERSION);
	wp_enqueue_style('vcl-custom-css',get_theme_file_uri('css/custom.css'),null, VERSION);
    wp_enqueue_style('vcl-css',get_stylesheet_uri(),null, VERSION);
    



    wp_enqueue_script('vcl-bootstrap-bundle-js',get_theme_file_uri('vendor/bootstrap/js/bootstrap.bundle.min.js'),array('jquery'), VERSION,true);
    wp_enqueue_script('vcl-owl-js',get_theme_file_uri('vendor/owl.carousel2/owl.carousel.min.js'),array('jquery'), VERSION,true);
    wp_enqueue_script('vcl-modal-video-js',get_theme_file_uri('vendor/modal-video/js/modal-video.js'),array('jquery'), VERSION,true);
    wp_enqueue_script('vcl-leaflet-js',get_theme_file_uri('vendor/leaflet/leaflet.js'),array('jquery'), VERSION,true);
    wp_enqueue_script('vcl-front-js',get_theme_file_uri('js/front.js'),array('jquery'), VERSION,true);


	// //js enqueue
	// wp_enqueue_script('modernizr',get_theme_file_uri('/assets/js/modernizr.js'),null, VERSION);
	// wp_enqueue_script('pace-js',get_theme_file_uri('/assets/js/pace.min.js'),null, VERSION);
	// wp_enqueue_script('plugins-js',get_theme_file_uri('/assets/js/plugins.js'),array('jquery'), VERSION,true);
	// wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),array('jquery'), VERSION,true);
}
add_action( 'wp_enqueue_scripts','vcl_assets' );



