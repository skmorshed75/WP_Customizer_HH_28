<?php
require_once get_theme_file_path("/inc/customizer.php");

function cust_theme_setup(){
    load_theme_textdomain('customizer', get_template_directory()."/languages");
    add_theme_support('post_thumbnails');
    
}
add_action('after_setup_theme','cust_theme_setup');

function cust_theme_assets(){
    wp_enqueue_style('cust-bootstrap',get_theme_file_uri('/assets/css/bootstrap.min.css'),null,1.0);
    wp_enqueue_style('cust-font-awesome',get_theme_file_uri('/assets/css/font-awesome.min.css'),null, 1.0);
    wp_enqueue_style('cust-owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.css'), null, 1.0);
    wp_enqueue_style('cust-stylesheet', get_stylesheet_uri(), null, time());
    //wp_enqueue_style('meal-stylesheet',get_stylesheet_uri(),null, VERSION);
    wp_enqueue_style('cust-responsive',get_theme_file_uri('/assets/css/responsive.css'), null, 1.0);
    wp_enqueue_style('cust-animate', get_theme_file_uri('/assets/css/animate.css'), null, 1.0);
    
    wp_enqueue_script('cust-bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('cust-owl-carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('cust-wow', get_theme_file_uri("/assets/js/wow.min-1.3.0.js"), array('jquery'), 1.0, true);
    wp_enqueue_script('cust-active', get_theme_file_uri("/assets/js/active.js"), array('jquery'), 1.0, true);
}
add_action('wp_enqueue_scripts','cust_theme_assets');

?>