<?php 
/**
 * Theme Options.
 *
 * @package Kuza
 */

$default = kuza_slider_get_default_theme_options();

// Single Page Setting Section starts
$wp_customize->add_section('section_single_page', 
	array(    
	'title'       => __('Single Page Option', 'kuza-slider'),
	'panel'       => 'theme_option_panel'    
	)
);

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'default'           => $default['single_page_header_image_as_header_image_enable'],
	'sanitize_callback' => 'kuza_slider_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image As Header Image', 'kuza-slider' ),
	'description' => __('If this option is Enable then Display Header Image as Header Image Otherwise display Featured Image as Header Image  ', 'kuza-slider'),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_enable]', array(
	'default'           => $default['single_page_header_image_enable'],
	'sanitize_callback' => 'kuza_slider_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image', 'kuza-slider' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );
