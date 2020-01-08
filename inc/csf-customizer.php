
<?php
//Class 28.8
function customizer_csf_settings($options){
    $options[] = array(
        'name' => 'customizer_csf_section1',
        'title' => __('Codestar Demo','customizer'),
        'settings' => array(
            array(
                'name' => 'about_heading',
                'default' => __('Some Text Here','customizer'),
                'control' => array(
                    'label' => __('About Heading','customizer'),
                    'type' => 'text'
                )            
            ),
            array(
                'name' => 'about_description',
                'control' => array(
                    'label' => __('About Description', 'customizer'),
                    'type' => 'textarea'
                )
            ),
            array(
                'name' => 'dummy_control1',
                'control' => array(
                    'label' => __('Dummy Control 1', 'customizer'),
                    'type' => 'upload'
                )
            ),
            array(
                'name' => 'dummy_control2',
                'control' => array(
                    'label' => __('Dummy Control 2', 'customizer'),
                    'type' => 'media'
                )
            ),
            array(
                'name' => 'dummy_control3',
                'control' => array(
                    'label' => __('Dummy Control 3', 'customizer'),
                    'type' => 'color'
                )
            ),
        )
    );
    
    $options[] = array(
        'name' => 'customizer_csf_section_ctrl',
        'title' => __('Codestar Controls','customizer'),
        'settings' => array(
            array(
                'name' => 'switcher',
                'control' => array(
                    'type' => 'cs_field',
                    'options' => array(
                        'type' => 'switcher',
                        'title' => __('Select Color','customizer')
                    )
                )
            ),
            array(
                'name' => 'icon',
                'control' => array(
                    'type' => 'cs_field',
                    'options' => array(
                        'type' => 'icon',
                        'title' => __('Select Icon','customizer')
                    )
                )
            ),
            array(
                'name' => 's_post',
                'control' => array(
                    'type' => 'cs_field',
                    'options' => array(
                        'type' => 'select',
                        'title' => __('Select Post','customizer'),
                        'options' => 'posts',
                        'query_args' => array(
                            'post_type' => 'post',
                            'orderby' => 'post_date',
                            'order' => 'DESC',                            
                        ),
                        'default_options' =>'Select a Post'
                    )
                )
            ),
        )
    );
    return $options;
}
add_filter('cs_customize_options','customizer_csf_settings');


function customizer_csf_init(){
    CSFramework_Customize::instance(array());
}
add_action('init','customizer_csf_init');