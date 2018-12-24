<?php 
require_once(get_template_directory().'/inc/initialization.php');

function admin_style() {
  wp_enqueue_style('Flaticon', get_template_directory_uri().'/fonts/flaticon/font/flaticon.css' );
}
add_action('admin_enqueue_scripts', 'admin_style');
function spinybabbler_scripts_method() {

	 wp_enqueue_style( 'icomoon', spinybabbler_css.'/icomoon.css' );    
	 wp_enqueue_style( 'bootstrap', spinybabbler_vendor_css.'/bootstrap/bootstrap.css' );
   wp_enqueue_style('flaticon', spinybabbler_fonts.'/flaticon/font/flaticon.css' );
   wp_enqueue_style( 'spinybabbler_style', spinybabbler_css.'/spinybabbler_style.css' );
   wp_enqueue_style( 'style.css', spinybabbler_path.'/style.css' );


 //************************script enqueue**************************\\
  wp_enqueue_script( 'jquery-1.12.4', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), '3.3.1', true );
  wp_enqueue_script( 'bootstrap', spinybabbler_vendor_js.'/bootstrap/bootstrap.js', array(),'', true );
  wp_enqueue_script( 'incrementalNumber', spinybabbler_js . '/incrementalNumber.js', array('jquery'),'', true );
  wp_enqueue_script( 'sbinybabbler', spinybabbler_js.'/spinybabbler.js', array('jquery'), '', true );	
}
add_action( 'wp_enqueue_scripts', 'spinybabbler_scripts_method' );

// add_action( 'after_setup_theme', 'spinybabbler_theme_setup' );
// function spinybabbler_theme_setup() {
//     add_image_size( 'small-thumb', 350, 218 ); 
//     add_image_size( 'fresh-thumb', 534, 390 ); 
//     add_image_size( 'sidebar-thumb', 363, 162);
//     add_image_size('inner-slide-thumb',848, 565);
//     add_image_size('banqute_slide-thumb',1140,760);
//     add_image_size('single_page-thumb',1140,560);
//     add_image_size('banqute-thumb',1140,760);
//     add_image_size('service-cover-thumb', 1140, 377);
//     add_image_size('service-cover-thumb', 360,240);
//     add_image_size('related-thumb', 263, 222);
//     add_image_size('gall-big-thumb', 350, 320);
//     add_image_size('gall-big-thumb', 350, 197);
// }
add_action( 'after_setup_theme', 'spinybabbler_register_my_menu' );
function spinybabbler_register_my_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
}
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'custom-logo' );



add_action( 'widgets_init', 'spinybabbler_widgets_init' );
function spinybabbler_widgets_init() 
  {
    register_sidebar( array(
        'name' => __( 'Footer widget', 'spinybabbler' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Second Footer widget', 'spinybabbler' ),
        'id' => 'sidebar-2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1 spinybab-widget">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
     register_sidebar( array(
        'name' => __( 'Third Footer widget', 'spinybabbler' ),
        'id' => 'sidebar-3',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
    //  register_sidebar( array(
    //     'name' => __( 'Sidebar Link widget', 'Nepchulo' ),
    //     'id' => 'sidebar-4',
    //     'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    //     'before_widget' => '<div class="footer-widget-title">',
    //  'after_widget'  => '</div>',
    //  'before_title'  => '<h2>',
    //   'after_title'   => '</h2>',
    // ) );
    // register_sidebar( array(
    //     'name' => __( 'Reservation  widget', 'Nepchulo' ),
    //     'id' => 'sidebar-5',
    //     'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    //     'before_widget' => '',
    //  'after_widget'  => '',
    //  'before_title'  => '',
    //   'after_title'   => '',
    // ) );
    //     register_sidebar( array(
    //     'name' => __( 'Contact  widget', 'Nepchulo' ),
    //     'id' => 'sidebar-6',
    //     'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    //     'before_widget' => '<div class="col-md-8">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '',
    //     'after_title'   => '',
    // ) );
    // register_sidebar( array(
    //     'name' => __( 'Apply  widget', 'Nepchulo' ),
    //     'id' => 'sidebar-7',
    //     'description' => __( 'Widgets in this area will be shown on only career page.', 'theme-slug' ),
    //     'before_widget' => '<div class="wp_interested_form">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h4 class="career-title">',
    //     'after_title'   => '</h4>',
    // ) );
  }


require_once(get_template_directory().'/inc/spinybabbler_PostType.php');
require_once(get_template_directory().'/inc/spinybabbler_Metabox.php');
require_once(get_template_directory().'/inc/spinybabbler_customizer.php');
require_once(get_template_directory().'/inc/bootstrap-navwalker.php');
