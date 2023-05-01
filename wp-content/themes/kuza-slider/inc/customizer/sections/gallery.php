<?php
/**
 * Gallery options.
 *
 * @package Kuza Slider Pro
 */

$default = kuza_slider_get_default_theme_options();

// Gallery Slider Section
$wp_customize->add_section( 'section_home_gallery',
	array(
		'title'      => __( 'Gallery Slider', 'kuza-slider' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		'active_callback' => 'kuza_slider_gallery_design_enable',
		)
);

$wp_customize->add_setting( 'theme_options[disable_gallery_section]',
	array(
		'default'           => $default['disable_gallery_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kuza_slider_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kuza_Slider_Switch_Control( $wp_customize, 'theme_options[disable_gallery_section]',
    array(
		'label' 			=> __('Enable/Disable Gallery Slider Section', 'kuza-slider'),
		'section'    		=> 'section_home_gallery',
		 'settings'  		=> 'theme_options[disable_gallery_section]',
		'on_off_label' 		=> kuza_slider_switch_options(),
    )
) );

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[gallery_image_option]', array(
	'default'           => $default['gallery_image_option'],
	'sanitize_callback' => 'kuza_slider_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[gallery_image_option]', array(
	'label'             => esc_html__( 'Choose Galley Image View', 'kuza-slider' ),
	'section'           => 'section_home_gallery',
	'type'              => 'radio',
	'active_callback' => 'kuza_slider_gallery_active',
	'choices'				=> array( 
		'gallery-bg-image'     => esc_html__( 'Image in Background Side', 'kuza-slider' ), 
		'gallery-featured-image'     => esc_html__( 'Full Size Image', 'kuza-slider' ),
		)
) );


// Setting  Team Category.
$wp_customize->add_setting( 'theme_options[gallery_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Kuza_Slider_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[gallery_category]',
		array(
		'label'    => __( 'Select Category', 'kuza-slider' ),
		'section'  => 'section_home_gallery',
		'settings' => 'theme_options[gallery_category]',	
		'active_callback' => 'kuza_slider_gallery_active',		
		)
	)
);
