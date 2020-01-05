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
    wp_enqueue_style('cust-responsive',get_theme_file_uri('/assets/css/responsive.css'), null, 1.0);
    wp_enqueue_style('cust-animate', get_theme_file_uri('/assets/css/animate.css'), null, 1.0);
    wp_enqueue_style('cust-stylesheet', get_stylesheet_uri(), null, time());
    //Class 28.4
    $services_icon_color = get_theme_mod('cust_who_we_are_icon_color','face69');

    $services_style =<<<EOD
        .single-promo i.fa {
            color:{$services_icon_color};
        }        
EOD;
    wp_add_inline_style('cust-stylesheet',$services_style);
    //End Class 28.4
    
    
    wp_enqueue_script('cust-bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('cust-owl-carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('cust-wow', get_theme_file_uri("/assets/js/wow.min-1.3.0.js"), array('jquery'), 1.0, true);
    wp_enqueue_script('cust-active', get_theme_file_uri("/assets/js/active.js"), array('jquery'), 1.0, true);
}
add_action('wp_enqueue_scripts','cust_theme_assets');

//Class 28.5
function cust_customizer_assets(){
    wp_enqueue_script('cust-customizer-js', get_theme_file_uri("/assets/js/customizer.js"), array('jquery','customize-preview'), time(), true);
}
add_action('customize_preview_init','cust_customizer_assets');
//End of Class 28.5
?>