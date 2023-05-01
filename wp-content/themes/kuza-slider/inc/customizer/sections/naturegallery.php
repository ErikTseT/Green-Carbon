<?php
/**
 * Featured Posts options.
 *
 * @package Kuza Slider Pro
 */

$default = kuza_slider_get_default_theme_options();

// Featured Posts Section
$wp_customize->add_section( 'section_home_naturegallery',
	array(
		'title'      => __( 'Featured Slider', 'kuza-slider' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		'active_callback' => 'kuza_slider_naturegallery_design_enable',
		)
);

$wp_customize->add_setting( 'theme_options[disable_naturegallery_section]',
	array(
		'default'           => $default['disable_naturegallery_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kuza_slider_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kuza_Slider_Switch_Control( $wp_customize, 'theme_options[disable_naturegallery_section]',
    array(
		'label' 			=> __('Enable/Disable Featured Posts Section', 'kuza-slider'),
		'section'    		=> 'section_home_naturegallery',
		 'settings'  		=> 'theme_options[disable_naturegallery_section]',
		'on_off_label' 		=> kuza_slider_switch_options(),
    )
) );

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[naturegallery_content_align]', array(
	'default'           => $default['naturegallery_content_align'],
	'sanitize_callback' => 'kuza_slider_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[naturegallery_content_align]', array(
	'label'             => esc_html__( 'Choose Content Align', 'kuza-slider' ),
	'section'           => 'section_home_naturegallery',
	'type'              => 'radio',
	'active_callback' => 'kuza_slider_naturegallery_active',
	'choices'				=> array( 
		'content-right'     => esc_html__( 'Right Side', 'kuza-slider' ), 
		'content-center'     => esc_html__( 'Center Side', 'kuza-slider' ), 
		'content-left'     => esc_html__( 'Left Side', 'kuza-slider' )
		)
) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[naturegallery_category_enable]', array(
	'default'           => $default['naturegallery_category_enable'],
	'sanitize_callback' => 'kuza_slider_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[naturegallery_category_enable]', array(
	'label'             => esc_html__( 'Enable Category', 'kuza-slider' ),
	'section'           => 'section_home_naturegallery',
	'type'              => 'checkbox',
	'active_callback' => 'kuza_slider_naturegallery_active',
) );	
// Add content enable setting and control.
$wp_customize->add_setting( 'theme_options[naturegallery_content_enable]', array(
	'default'           => $default['naturegallery_content_enable'],
	'sanitize_callback' => 'kuza_slider_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[naturegallery_content_enable]', array(
	'label'             => esc_html__( 'Enable Content', 'kuza-slider' ),
	'section'           => 'section_home_naturegallery',
	'type'              => 'checkbox',
	'active_callback' => 'kuza_slider_naturegallery_active',
) );

// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[naturegallery_posted_on_enable]', array(
	'default'           => $default['naturegallery_posted_on_enable'],
	'sanitize_callback' => 'kuza_slider_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[naturegallery_posted_on_enable]', array(
	'label'             => esc_html__( 'Enable Date', 'kuza-slider' ),
	'section'           => 'section_home_naturegallery',
	'type'              => 'checkbox',
	'active_callback' => 'kuza_slider_naturegallery_active',
) );

// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[naturegallery_author_enable]', array(
	'default'           => $default['naturegallery_author_enable'],
	'sanitize_callback' => 'kuza_slider_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[naturegallery_author_enable]', array(
	'label'             => esc_html__( 'Enable Author', 'kuza-slider' ),
	'section'           => 'section_home_naturegallery',
	'type'              => 'checkbox',
	'active_callback' => 'kuza_slider_naturegallery_active',
) );

// Number of items
$wp_customize->add_setting('theme_options[naturegallery_excerpt_length]', 
	array(
	'default' 			=> $default['naturegallery_excerpt_length'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kuza_slider_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[naturegallery_excerpt_length]', 
	array(
	'label'       => __('Excerpt Length', 'kuza-slider'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 1000.', 'kuza-slider'),
	'section'     => 'section_home_naturegallery',   
	'settings'    => 'theme_options[naturegallery_excerpt_length]',		
	'type'        => 'number',
	'active_callback' => 'kuza_slider_naturegallery_active',
	'input_attrs' => array(
			'min'	=> 0,
			'max'	=> 1000,
			'step'	=> 1,
		),
	)
);
$number_of_naturegallery_items = kuza_slider_get_option( 'number_of_naturegallery_items' );

for( $i=1; $i<=$number_of_naturegallery_items; $i++ ){
	// Posts
	$wp_customize->add_setting('theme_options[naturegallery_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kuza_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[naturegallery_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kuza-slider'), $i),
		'section'     => 'section_home_naturegallery',   
		'settings'    => 'theme_options[naturegallery_post_'.$i.']',		
		'type'        => 'select',
		'choices'	  => kuza_slider_post_choices(),
		'active_callback' => 'kuza_slider_naturegallery_active',
		)
	);
}