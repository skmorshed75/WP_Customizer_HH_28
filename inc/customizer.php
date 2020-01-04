<?php
//Class 28.2
function cust_customizer_settings($wp_customizer){
    $wp_customizer->add_section('cust_services',array(
        'title' => __('Factorian Services','customizer'),
        'priority' => '30'
    ));
    
    $wp_customizer->add_setting('cust_services_heading',array(
        'default' => 'Mission Heading',
        'transport' => 'refresh', //postMessage for javascript
        //'type' => 'option' // get_theme_mod or option
    ));    
    $wp_customizer->add_control('cust_services_heading_ctrl',array(
        'label' => __('Services Heading','customizer'),
        'section' => 'cust_services',
        'settings' => 'cust_services_heading',
        'type' => 'text'
    ));
    
    $wp_customizer->add_setting('cust_services_sub_heading',array(
        'default' => 'This is subheading for Services Section',
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_services_sub_heading_ctrl',array(
        'label' => __('Services Sub-Heading','customizer'),
        'section' => 'cust_services',
        'settings' => 'cust_services_sub_heading',
        'type' => 'textarea'
    ));
}
add_action('customize_register','cust_customizer_settings');