<?php
/**
 * Kuza Slider metabox file.
 *
 * This is the template that includes all the other files for metaboxes of Kuza Slider theme
 *
 * @package Kuza
 * @since Kuza Slider 0.1
 */

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/about-meta.php'; 

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/video-url.php'; 




if ( ! function_exists( 'kuza_slider_custom_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function kuza_slider_custom_meta() {
        $post_type = array( 'post', 'page' );

        // POST Subtitle 
        add_meta_box( 'kuza_slider_video_url', esc_html__( 'Video Links', 'kuza-slider' ), 'kuza_slider_video_url_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'kuza_slider_custom_meta' );


if ( ! function_exists( 'kuza_slider_about_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function kuza_slider_about_meta() {
        $post_type = array( 'post' );

        // POST Subtitle 
        add_meta_box( 'kuza_slider_about_meta', esc_html__( 'About Meta', 'kuza-slider' ), 'kuza_slider_about_meta_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'kuza_slider_about_meta' );


