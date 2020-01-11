<?php
//Class 28.16

Kirki::add_config( 'customizer', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'customizer_panel_id', array(
    'priority'    => 10,
    'title'       => esc_html__( 'My Panel', 'customizer' ),
    'description' => esc_html__( 'My panel description', 'customizer' ),
) );

Kirki::add_section( 'customizer_section_one', array(
    'title'       => esc_attr__( 'My Section', 'customizer' ),
    'description' => esc_attr__( 'My Section description', 'customizer' ),
    'priority'    => 10,
    'panel' =>'customizer_panel_id'
//print_r("sdfjdlfdf")        
) );

Kirki::add_field( 'customizer_section_one', [
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => esc_html__( 'Text Control', 'customizer' ),
	'section'  => 'customizer_section_one',
	'default'  => esc_attr__( 'This is a default value', 'customizer' ),
	'priority' => 10,
] );



