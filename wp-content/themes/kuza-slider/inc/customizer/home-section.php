<?php
/**
 * Home Page Options.
 *
 * @package Kuza
 */

$default = kuza_slider_get_default_theme_options();
$homepage_design_layout     = kuza_slider_get_option( 'homepage_design_layout_options' );

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'kuza-slider' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/

if ($homepage_design_layout=='home-nature') {
	require get_template_directory() . '/inc/customizer/sections/header.php';
	require get_template_directory() . '/inc/customizer/sections/home-layout.php';
	require get_template_directory() . '/inc/customizer/sections/slider.php';
	require get_template_directory() . '/inc/customizer/sections/naturefeatured.php';
	require get_template_directory() . '/inc/customizer/sections/naturegallery.php';
	require get_template_directory() . '/inc/customizer/sections/gallery.php';
	require get_template_directory() . '/inc/customizer/sections/rightslide.php';
}
