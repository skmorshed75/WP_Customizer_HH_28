<?php
//Class 28.2
function cust_customizer_settings($wp_customizer){
    $wp_customizer->add_section('cust_services',array(
        'title' => __('Factorian Services','customizer'),
        'priority' => '30',
        'active_callback' => function(){
            return is_page_template('page-templates/landing.php');
        }
    ));
    
    $wp_customizer->add_setting('cust_services_heading',array(
        'default' => 'Mission Heading',
        'transport' => 'postMessage'
        //'transport' => 'refresh', //postMessage for javascript
        //'type' => 'option' // get_theme_mod or option
    ));    
    $wp_customizer->add_control('cust_services_heading_ctrl',array(
        'label' => __('Services Heading','customizer'),
        'section' => 'cust_services',
        'settings' => 'cust_services_heading',
        'type' => 'text'
    ));

    //WHO WE ARE SECTION
    $wp_customizer->add_section('cust_who_we_are',array(
        'title' => __('Who We Are?','customizer'),
        'priority' => 50
    ));

    $wp_customizer->add_setting('cust_who_we_are_icon_color',array(
        'default' => '#face69',
        'transport' => 'postMessage'
    ));
    $wp_customizer->add_control(new WP_Customize_Color_Control($wp_customizer,'cust_who_we_are_icon_color_ctrl', array(
        'label' => __('Icon Color','customizer'),
        'section' => 'cust_who_we_are',
        'settings' => 'cust_who_we_are_icon_color'
    )));
    
    $wp_customizer->add_setting('cust_who_we_are_number_of_items', array(
        'default' => 4,
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_who_we_are_number_of_items_ctrl', array(
        'label' => __('Number of Items','customizer'),
        'section' =>'cust_who_we_are',
        'settings' => 'cust_who_we_are_number_of_items',
        'type' => 'select',
        'choices' => array(
            '4' => '03 in each row',
            '6' => '02 in each row',
        )
    ));
    //END OF WHO WE ARE SECTION
    
    
    $wp_customizer->add_setting('cust_services_subheading',array(
        'default' => 'This is subheading for Services Section',
        'transport' => 'postMessage'
    ));
    $wp_customizer->add_control('cust_services_subheading_ctrl',array(
        'label' => __('Services Sub-Heading','customizer'),
        'section' => 'cust_services',
        'settings' => 'cust_services_subheading',
        'type' => 'textarea',
        'active_callback' => 'service_display_subheading' //Class 28.6 with function service_display_subheading or below
//        'active_callback' => function(){
//            if(get_theme_mod('cust_services_display_subheading') == 1){
//                return true;
//            }
//            return false;
//        }
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
    
    //Class 28.7
    /*
    About Page
    */
    $wp_customizer->add_section('cust_about', array(
        'title' => __('About Page','customizer'),
        'priority' => '40',
        //Class 28.7
        //'active_callback' => 'about_section_display'
        //OR
        'active_callback' => function(){
//            if(is_page_template('page-templates/about.php')){
//                return true;
//            }
//            return false;
        //OR
        return is_page_template('page-templates/about.php');
        }        
    ));
    
    $wp_customizer->add_setting('cust_about_heading', array(
        'default' => 'About Page Heading',
        'transport' => 'postMessage'
    ));
    
    $wp_customizer->add_control('cus_about_heading_ctrl', array(
        'label' => __('About Page Heading', 'customizer'),
        'section' =>'cust_about',
        'settings' =>'cust_about_heading',
        'type' => 'text'        
    ));
    //End of Class 28.7
        
    $wp_customizer->add_setting('cust_other_demo_select', array(
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
    
    $wp_customizer->add_setting('cust_other_demo_pages', array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_demo_pages_ctrl', array(
        'label' => __('Available Pages', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_demo_pages',
        'type' => 'dropdown-pages',
        'allow_addition' => true //Add new page
        
    ));
    
    $wp_customizer->add_setting('cust_other_html5_number', array(
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
    
    $wp_customizer->add_setting('cust_other_html5_date', array(
        'transport' => 'refresh'
    ));
    $wp_customizer->add_control('cust_other_html5_date_ctrl', array(
        'label' => __('Date Field', 'customizer'),
        'section' => 'cust_others',
        'settings' => 'cust_other_html5_date',
        'type' => 'date',
    ));
    
    $wp_customizer->add_setting('cust_other_html5_week', array(
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

//Class 28.6
function service_display_subheading(){
    if(get_theme_mod('cust_services_display_subheading') == 1){
        return true;
    }
    return false;
}
//End of Class 28.6

//Class 28.7
//function about_section_display(){
//    if(is_page_template('page-templates/about.php')){
//        return true;
//    }
//    return false;
//}
//End Class 28.7
        
        
