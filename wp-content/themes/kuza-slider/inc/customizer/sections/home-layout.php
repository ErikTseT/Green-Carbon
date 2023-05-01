<?php
/**
 * Category options.
 *
 * @package Kuza
 */

$default = kuza_slider_get_default_theme_options();

// Category Author Section
$wp_customize->add_section( 'section_home_layout',
	array(
		'title'      => __( 'Homepage Layout', 'kuza-slider' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[homepage_layout_options]', array(
	'default'           => $default['homepage_layout_options'],
	'sanitize_callback' => 'kuza_slider_sanitize_select',
	'type'				=> 'theme_mod',
) );

$wp_customize->add_control( 'theme_options[homepage_layout_options]', array(
	'label'             => esc_html__( 'Choose HomePage Color Layout', 'kuza-slider' ),
	'section'           => 'section_home_layout',
	'type'              => 'radio',
	'choices'				=> array( 
		'lite-layout'     => esc_html__( 'Lite HomePage', 'kuza-slider' ), 
		'dark-layout'     => esc_html__( 'Dark HomePage', 'kuza-slider' ),
		)
) );



$wp_customize->add_setting('theme_options[homepage_design_layout_options]', 
	array(
	'default' 			=> $default['homepage_design_layout_options'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kuza_slider_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[homepage_design_layout_options]', 
	array(
	'label'             => esc_html__( 'Choose HomePage Layout', 'kuza-slider' ),
	'description' => __('Save & Refresh the customizer to see its effect.', 'kuza-slider'),
	'section'     => 'section_home_layout',   
	'settings'    => 'theme_options[homepage_design_layout_options]',		
	'type'        => 'select',
	'choices'	  => array(  
		'home-fitness'     => esc_html__( 'Fitness HomePage', 'kuza-slider' ),
		'home-medical'     => esc_html__( 'Medical HomePage', 'kuza-slider' ), 
		'home-education'     => esc_html__( 'Education HomePage', 'kuza-slider' ), 
		'home-nature'     => esc_html__( 'Slider HomePage', 'kuza-slider' ), 
		'home-magazine'     => esc_html__( 'Magazine HomePage', 'kuza-slider' ),
		'home-blog'     => esc_html__( 'Blog HomePage', 'kuza-slider' ),
		'home-business'     => esc_html__( 'Business HomePage', 'kuza-slider' ),
		'home-normal-magazine'     => esc_html__( 'Normal Magazine HomePage', 'kuza-slider' ), 
		'home-corporate'     => esc_html__( 'Corporate HomePage', 'kuza-slider' ),  
		'home-normal-blog'     => esc_html__( 'Normal Blog HomePage', 'kuza-slider' ),  
		'home-minimal-blog'     => esc_html__( 'Minimal Blog HomePage', 'kuza-slider' ), 
		'home-classic-blog'     => esc_html__( 'Classic Blog HomePage', 'kuza-slider' ),
		),
	)
);

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[homepage_sidebar_position]', array(
	'default'           => $default['homepage_sidebar_position'],
	'sanitize_callback' => 'kuza_slider_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[homepage_sidebar_position]', array(
	'label'             => esc_html__( 'Choose HomePage sidebar Layout', 'kuza-slider' ),
	'section'           => 'section_home_layout',
	'type'              => 'radio',
	'active_callback'	=> 'kuza_slider_home_magazine_enable',
	'choices'				=> array( 
		'home-no-sidebar'     => esc_html__( 'No Sidebar', 'kuza-slider' ), 
		'home-right-sidebar'     => esc_html__( 'Right Sidebar', 'kuza-slider' ),
		)
) );

