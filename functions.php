<?php 
function saasup_theme_setup(){
    // Theme Supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');


    // Register Nave Menus
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));

    // Feature Custom Post type
    register_post_type('features',array(
        'label' => 'Features',
        'public' => true,
        'supports' => array('title','editor','thumbnail'),
        'menu_icon' => 'dashicons-welcome-widgets-menus'
    ));
    // Register Taxonomy for Feature Post Type
    register_taxonomy('feature_types','features',array(
        'label' => 'Feature Type',
        'public' => true, 
        'hierarchical' => true
    ));

    // Pricing Custom Post type
    register_post_type('pricing',array(
        'label' => 'Pricing',
        'public' => true,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-share-alt'
    ));
    // Career Custom Post type
    register_post_type('careers',array(
        'label' => 'Careers',
        'public' => true,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
    // Integrations Custom Post type
    register_post_type('integrations',array(
        'label' => 'Integrations',
        'public' => true,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-randomize'
    ));
};
add_action('after_setup_theme','saasup_theme_setup');


// Saasup CSS JS
function saasup_css_js(){
    // CSS
    wp_register_style('google-fonts','https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap'); 
    wp_register_style('fontawesome',get_template_directory_uri().'/assets/css/fontawesome.min.css'); 
    wp_register_style('aos','https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_register_style('owl-theme',get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
    wp_register_style('owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_register_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_register_style('main-style',get_template_directory_uri().'/assets/css/style.css');
    wp_register_style('responsive',get_template_directory_uri().'/assets/css/responsive.css'); 
    wp_register_style('style',get_stylesheet_uri()); 
 

    wp_enqueue_style('google-fonts');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('aos');
    wp_enqueue_style('owl-theme');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main-style');
    wp_enqueue_style('responsive');
    wp_enqueue_style('style');

    // JS
    wp_register_script('local-jquery',get_template_directory_uri().'/assets/js/jquery.min.js');
    wp_register_script('popper',get_template_directory_uri().'/assets/js/popper.min.js');
    wp_register_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_register_script('owl-carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js');
    wp_register_script('aos','https://unpkg.com/aos@2.3.1/dist/aos.js');
    wp_register_script('counterup',get_template_directory_uri().'/assets/js/countMe.min.js');
    wp_register_script('magnific',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js');
    wp_register_script('scripts',get_template_directory_uri().'/assets/js/scripts.js');
    
    wp_enqueue_script('local-jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('aos');
    wp_enqueue_script('counterup');
    wp_enqueue_script('magnific');
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts','saasup_css_js');


function saasup_widgets(){
    // Register footer widgets
    register_sidebar(array(
        'id' => 'footer-sidebar-1',
        'name' => 'Footer Widgets 1',
        'description' => 'Set your Footer Widgets',
        'before_widget' => '<div class="pages">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'id' => 'footer-sidebar-2',
        'name' => 'Footer Widgets 2',
        'description' => 'Set your Footer Widgets',
        'before_widget' => '<div class="pages">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'id' => 'footer-sidebar-3',
        'name' => 'Footer Widgets 3',
        'description' => 'Set your Footer Widgets',
        'before_widget' => '<div class="downlod_area">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init','saasup_widgets');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



// Codestar Theme Options
require_once('inc/theme-options/codestar-framework.php');
require_once('inc/theme-options/options.php');