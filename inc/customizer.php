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
    
    $wp_customizer->add_setting('cust_services_subheading',array(
        'default' => 'This is subheading for Services Section',
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_services_subheading_ctrl',array(
        'label' => __('Services Sub-Heading','customizer'),
        'section' => 'cust_services',
        'settings' => 'cust_services_subheading',
        'type' => 'textarea'
    ));
    
    //Class 28.3    
    $wp_customizer->add_setting('cust_services_display_subheading', array(
        'default' => 1,
        'transport'=> 'refresh'
    ));    
    $wp_customizer->add_control('cust_services_display_subheading_ctrl', array(
        'label' => __('Display Subheading', 'customizer'),
        'section' => 'cust_services',
        'settings' => 'cust_services_display_subheading',
        'type' => 'checkbox'
    ));
    
    /*
    ** Other Controls
    */
    $wp_customizer->add_section('cust_others', array(
        'title' => __('Other Controls','customizer'),
        'priority' => '40'
    ));
    
    $wp_customizer->add_setting('cust_other_demo_radio',array(
        'default' => 'choice3',
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_demo_radio_ctrl', array(
        'label' => __('Radio Button', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_demo_radio',
        'type' => 'radio',
        'choices' =>array(
            'choice1' => __('Choice One','customizer'),
            'choice2' => __('Choice two','customizer'),
            'choice3' => __('Choice three','customizer'),
            'choice4' => __('Choice four','customizer'),
        )
    ));
        
    $wp_customizer->add_setting('cust_other_demo_select',array(
        'default' => 'choice3',
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_demo_select_ctrl', array(
        'label' => __('Dropdown Button', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_demo_select',
        'type' => 'select',
        'choices' =>array(
            'choice1' => __('Choice One','customizer'),
            'choice2' => __('Choice two','customizer'),
            'choice3' => __('Choice three','customizer'),
            'choice4' => __('Choice four','customizer'),
        )
    ));
    
    $wp_customizer->add_setting('cust_other_demo_pages',array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_demo_pages_ctrl', array(
        'label' => __('Available Pages', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_demo_pages',
        'type' => 'dropdown-pages',
        'allow_addition' => true //Add new page
        
    ));
    
    $wp_customizer->add_setting('cust_other_html5_number',array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_html5_number_ctrl', array(
        'label' => __('Number Field', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_html5_number',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 10,
            'max' => 20,
            'step' => 2
        )        
    ));
    
    $wp_customizer->add_setting('cust_other_html5_range',array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_html5_range_ctrl', array(
        'label' => __('Range Field', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_html5_range',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 10,
            'max' => 20,
            'step' => 2
        )
    ));
    
    $wp_customizer->add_setting('cust_other_html5_date',array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_html5_date_ctrl', array(
        'label' => __('Date Field', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_html5_date',
        'type' => 'date',
    ));
    
    $wp_customizer->add_setting('cust_other_html5_week',array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_html5_week_ctrl', array(
        'label' => __('Week Field', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_html5_week',
        'type' => 'week'
    ));
    
}
add_action('customize_register','cust_customizer_settings');