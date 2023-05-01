<?php
/**
 * Default theme options.
 *
 * @package Kuza
 */


if ( ! function_exists( 'kuza_slider_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	
	function kuza_slider_get_default_theme_options() {

		$theme_data = wp_get_theme();
		$defaults = array();

		$defaults['show_header_contact_info'] 	= true;
		$defaults['disable_homepage_content_section'] 			= true;
		$defaults['topbar_layout_option'] 			= 'contact-info-option';
	    $defaults['header_email']             	= __( 'info@sensationaltheme.com','kuza-slider' );
	    $defaults['header_phone' ]            	= __( '+1-541-754-3010','kuza-slider' );
	    $defaults['header_location' ]           = __( 'London, UK','kuza-slider' );
	    $defaults['enable_header_contact_info'] 	= true;
	    $defaults['header_email_text']             	= __( 'Email ID','kuza-slider' );
	    $defaults['header_phone_text' ]            	= __( 'Free Call','kuza-slider' );
	    $defaults['header_location_text' ]           = __( 'Visit Us','kuza-slider' );
	    $defaults['header_email_address']             	= __( 'info@sensationaltheme.com','kuza-slider' );
	    $defaults['header_phone_contact' ]            	= __( '+1-541-754-3010','kuza-slider' );
	    $defaults['header_location_address' ]           = __( 'London, UK','kuza-slider' );
	    $defaults['show_header_social_links'] 	= true;
	    $defaults['header_social_links']		= array();
	    $defaults['disable_header_background_section'] = false;
	    $defaults['show_header_search'] 	= true;
	    $defaults['show_current_date'] 	= true;


	    $defaults['menu_text_hover'] 	= 'menu-hover-none';
	    $defaults['header_text_hover'] 	= 'title-hover-none';
	    $defaults['preloader_loader_enable'] 	= false;
	    $defaults['preloader_loader_options'] 	= 'loader-1';
	    $defaults['header_text_transform_options'] 	= 'none';
	    $defaults['header_text_decoration_options'] 	= 'none';
	    $defaults['header_font_style_options'] 	= 'none';
	    $defaults['header_text_design'] 	= false;
	    $defaults['homepage_layout_options']			= 'lite-layout';
	    $defaults['header_layout_options']			= 'header-four';
	    $defaults['homepage_design_layout_options']			= 'home-nature';
	    $defaults['homepage_sidebar_position']			= 'home-right-sidebar';

		// Fitness Category Section
		$defaults['disable_fitnesscat_section']	= false;
		$defaults['number_of_fitnesscat_column']			= 6;
		$defaults['number_of_fitnesscat_items']			= 10;
		$defaults['fitnesscat_content_type']			= 'post-category';
		$defaults['fitnesscat_title']	   	 		= esc_html__( 'Major Category', 'kuza-slider' );
		$defaults['fitnesscat_subtitle']	   	 		= esc_html__( 'I love natural beauty, and I think it’s your best look, but I think makeup as an artist is so transformative.', 'kuza-slider' );

		// Featured Slider Section
		$defaults['disable_featured-slider_section']	= false;
		$defaults['number_of_sr_items']			= 4;
		$defaults['number_of_sr_column']		= 1;
		$defaults['slider_layout_option']			= 'fullwidth-slider';
		$defaults['slider_content_position_option']			= 'left-position';
		$defaults['sr_content_type']			= 'sr_category';
		$defaults['slider_speed']				= 800;
		$defaults['disable_white_overlay']		= false;
		$defaults['slider_arrow_enable']		= true;
		$defaults['slider_fade_enable']		 	= true;
		$defaults['slider_autoplay_enable']		= true;
		$defaults['slider_infinite_enable']		= true;
		$defaults['slider_title_enable']		= true;
		$defaults['slider_category_enable']		= true;
		$defaults['slider_content_enable']		= true;
		$defaults['slider_posted_on_enable']		= false;
		$defaults['disable_blog_banner_section']		= true;
		$defaults['slider_social_title_text']	   		= esc_html__( 'Follow Me:', 'kuza-slider' );

		//Nature Gallery Section
		$defaults['disable_naturegallery_section']	= false;
		$defaults['number_of_naturegallery_items']			= 5;
		$defaults['naturegallery_excerpt_length']			= 20;
		$defaults['naturegallery_content_type']			= 'naturegallery_category';
		$defaults['naturegallery_content_align']			= 'content-left';
		$defaults['naturegallery_category_enable']		= true;
		$defaults['naturegallery_posted_on_enable']		= true;
		$defaults['naturegallery_author_enable']		= true;
		$defaults['naturegallery_content_enable']		= false;


		//Right Slide Section
		$defaults['disable_rightslide_section']	= false;
		$defaults['number_of_rightslide_items']			= 5;
		$defaults['rightslide_excerpt_length']			= 20;
		$defaults['rightslide_content_type']			= 'rightslide_category';
		$defaults['rightslide_content_align']			= 'content-right';
		$defaults['rightslide_category_enable']		= true;
		$defaults['rightslide_posted_on_enable']		= true;
		$defaults['rightslide_author_enable']		= true;
		$defaults['rightslide_content_enable']		= false;

		//Nautre Featured Section
		$defaults['disable_naturefeatured_section']	= false;
		$defaults['number_of_naturefeatured_items']			= 5;
		$defaults['naturefeatured_excerpt_length']			= 20;
		$defaults['naturefeatured_content_type']			= 'naturefeatured_category';
		$defaults['naturefeatured_content_align']			= 'content-left';
		$defaults['naturefeatured_category_enable']		= true;
		$defaults['naturefeatured_posted_on_enable']		= true;
		$defaults['naturefeatured_author_enable']		= true;
		$defaults['naturefeatured_content_enable']		= false;


		//Gallery Section
		$defaults['disable_gallery_section']	= false;
		$defaults['number_of_gallery_items']			= 7;
		$defaults['gallery_excerpt_length']			= 20;
		$defaults['gallery_content_type']			= 'gallery_category';
		$defaults['gallery_image_option']			= 'gallery-featured-image';
		$defaults['gallery_category_enable']		= true;
		$defaults['gallery_posted_on_enable']		= true;
		$defaults['gallery_author_enable']		= true;
		$defaults['gallery_content_enable']		= false;


		//Message Section	
		$defaults['disable_message_section']	   	= false;
		$defaults['message_title']	   	= esc_html__( 'Hello, I am Nijasi Thitak', 'kuza-slider' );
		$defaults['message_description']	   	= esc_html__( 'I’ve been working with a company this month doing blogger outreach for a project. Part of my job is to vet blogs and determine their audience, their traffic, and whether they’re a good fit for this particular project. Having spent several hours reviewing blogs in several markets, I’ve come to a conclusion: We all need to work on our About pages.', 'kuza-slider' );
		$defaults['message_button_label']	   	 	= esc_html__( 'Know More', 'kuza-slider' );
		$defaults['message_button_url']	   	 		= '#';
		$defaults['message_content_type']			= 'message_page';
		$defaults['message_content_enable']			= true;
		$defaults['message_excerpt_enable']			= true;
		$defaults['message_excerpt_length']			= 50;
		$defaults['disable_about_counter_section']	= true;
		$defaults['number_of_about_counter_items']	= 3;
		$defaults['about_counter_value_1']	   	= esc_html__( '1400+', 'kuza-slider' );
		$defaults['about_counter_value_2']	   	= esc_html__( '500+', 'kuza-slider' );
		$defaults['about_counter_value_3']	   	= esc_html__( '600+', 'kuza-slider' );
		$defaults['about_counter_value_4']	   	= esc_html__( '70', 'kuza-slider' );
		$defaults['about_counter_text_1']	   	= esc_html__( 'Client', 'kuza-slider' );
		$defaults['about_counter_text_2']	   	= esc_html__( 'Project', 'kuza-slider' );
		$defaults['about_counter_text_3']	   	= esc_html__( 'Employee', 'kuza-slider' );
		$defaults['about_counter_text_4']	   	= esc_html__( 'Branches', 'kuza-slider' );



		// Latest Posts Section
		$defaults['latest_posts_title']	   	 	= esc_html__( 'My Latest Stories', 'kuza-slider' );
		$defaults['number_of_latest_posts_column']	= 2;
		$defaults['pagination_type']		= 'numeric';
		$defaults['latest_category_enable']		= true;
		$defaults['latest_author_enable']		= true;
		$defaults['latest_comment_enable']		= true;
		$defaults['latest_read_more_text_enable']		= true;
		$defaults['latest_posted_on_enable']		= true;
		$defaults['latest_video_enable']		= true;
		$defaults['blog_layout_content_type']		= 'blog-one';
		$defaults['archive_content_align']		= 'content-center';
		$defaults['archive_post_header_title_enable']		= true;
		$defaults['archive_post_header_image_enable']		= true;
		$defaults['blog_post_header_image_enable']		= true;
		$defaults['blog_post_header_title_enable']		= true;


		// Project Section
		$defaults['disable_project_section']	= false;
		$defaults['number_of_project_items']			= 5;
		$defaults['project_layout_option']			= 'default-project';
		$defaults['project_content_type']			= 'project_category';
		$defaults['project_title']	   	 		= esc_html__( 'Cources', 'kuza-slider' );
		$defaults['project_viewall_text']	   	 		= esc_html__( 'View All Projects', 'kuza-slider' );
		$defaults['project_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'kuza-slider' );
		$defaults['project_category_enable']		= true;
		$defaults['project_posted_on_enable']		= true;
		$defaults['project_arrow_enable']		= true;
		$defaults['project_dots_enable']		= true;
		$defaults['project_content_enable']		= true;

		//Must Read Section
		$defaults['disable_mustread_section']	= false;
		$defaults['mustread_title']	   	 		= esc_html__( 'Blog Posts', 'kuza-slider' );
		$defaults['number_of_mustread_items']			= 3;
		$defaults['number_of_mustread_column']			= 3;
		$defaults['mustread_excerpt_length']			= 20;
		$defaults['mustread_content_type']			= 'mustread_category';
		$defaults['mustread_content_align']			= 'content-center';
		$defaults['mustread_category_enable']		= true;
		$defaults['mustread_posted_on_enable']		= true;
		$defaults['mustread_author_enable']		= true;
		$defaults['mustread_content_enable']		= true;
		$defaults['mustread_see_all_txt']			= esc_html__( 'See All', 'kuza-slider' );

		// Our Service Section
		$defaults['disable_services_section']	= false;
		$defaults['services_title']	   	 		= esc_html__( 'Reasons to Choose My Services', 'kuza-slider' );
		$defaults['services_subtitle']	   		= esc_html__( 'Services', 'kuza-slider' );
		$defaults['number_of_services_column']	= 2;
		$defaults['number_of_services_items']	= 4;
		$defaults['services_content_type']		= 'services_category';
		$defaults['services_content_enable']	= true;
		$defaults['disable_services_icon']		= true;
		$defaults['disable_services_background']		= true;
		$defaults['services_content_align']			= 'content-left';
		$defaults['services_excerpt_length']			= 10;
	
		// Testimonial Section
		$defaults['disable_testimonial_section']	= false;
		$defaults['number_of_testimonial_items']			= 4;
		$defaults['testimonial_excerpt_length']			= 20;
		$defaults['testimonial_layout_option']			= 'default-testimonial';
		$defaults['testimonial_content_type']			= 'testimonial_category';
		$defaults['testimonial_title']	   	 		= esc_html__( 'Our clients reviews.', 'kuza-slider' );
		$defaults['testimonial_viewall_text']	   	 		= esc_html__( 'View All Projects', 'kuza-slider' );
		$defaults['testimonial_subtitle']	   	 	= esc_html__( 'Testimonials', 'kuza-slider' );
		$defaults['testimonial_category_enable']		= true;
		$defaults['testimonial_posted_on_enable']		= true;
		$defaults['testimonial_arrow_enable']		= true;
		$defaults['testimonial_dots_enable']		= true;
		$defaults['testimonial_content_enable']		= true;

		//Time table Section
		$defaults['disable_timetable_section']	   	= false;
		$defaults['timetable_count']					= 3;
		$defaults['timetable_content_type']			= 'timetable_page';
		$defaults['timetable_box_title_1']			= esc_html__( 'Title Here', 'kuza-slider' );
		$defaults['timetable_box_title_2']			= esc_html__( 'Title Here', 'kuza-slider' );
		$defaults['timetable_box_title_3']			= esc_html__( 'Title Here', 'kuza-slider' );
		$defaults['timetable_box_title_4']			= esc_html__( 'Title Here', 'kuza-slider' );
		$defaults['timetable_content_1']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-slider' );
		$defaults['timetable_content_2']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-slider' );
		$defaults['timetable_content_3']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-slider' );
		$defaults['timetable_content_4']			= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text', 'kuza-slider' );		
		$defaults['timetable_btn_1']			= esc_html__( 'Read More', 'kuza-slider' );
		$defaults['timetable_btn_2']			= esc_html__( 'Read More', 'kuza-slider' );
		$defaults['timetable_btn_3']			= esc_html__( 'Read More', 'kuza-slider' );
		$defaults['timetable_btn_4']			= esc_html__( 'Read More', 'kuza-slider' );		
		$defaults['timetable_icon_1']			= esc_html__( 'fa-leaf', 'kuza-slider' );
		$defaults['timetable_icon_2']			= esc_html__( 'fa-diamond', 'kuza-slider' );
		$defaults['timetable_icon_3']			= esc_html__( 'fa-star', 'kuza-slider' );
		$defaults['timetable_icon_4']			= esc_html__( 'fa-heart', 'kuza-slider' );		
		$defaults['timetable_btn_url_1']			= '#';
		$defaults['timetable_btn_url_2']			= '#';
		$defaults['timetable_btn_url_3']			= '#';
		$defaults['timetable_btn_url_4']			= '#';	
		$defaults['timetable_background_1']			= '#03A0B3';
		$defaults['timetable_background_2']			= '#4F6DCD';
		$defaults['timetable_background_3']			= '#29f287';
		$defaults['timetable_background_4']			= '#8700ff';

		// Single Post Option
		$defaults['single_post_category_enable']		= true;
		$defaults['single_post_posted_on_enable']		= true;
		$defaults['single_post_video_enable']		= true;
		$defaults['single_post_comment_enable']		= true;
		$defaults['single_post_author_enable']		= true;
		$defaults['single_post_pagination_enable']		= true;
		$defaults['single_post_image_enable']		= true;
		$defaults['single_post_header_image_enable']		= true;
		$defaults['single_post_header_title_enable']		= true;
		$defaults['single_post_header_image_as_header_image_enable']		= true;

		// Single Post Option
		$defaults['single_page_video_enable']		= true;
		$defaults['single_page_image_enable']		= true;
		$defaults['single_page_header_image_enable']		= true;
		$defaults['single_page_header_title_enable']		= true;
		$defaults['single_page_header_image_as_header_image_enable']		= true;
		
		$defaults['theme_typography']			=  'default';
		$defaults['body_theme_typography']		=  'default';

		// Curve Option
		$defaults['corporate_curve_shape_enable']		= true;

		//General Section
		$defaults['latest_readmore_text']				= esc_html__('Read More','kuza-slider');
		$defaults['excerpt_length']				= 50;
		$defaults['layout_options_blog']			= 'right-sidebar';
		$defaults['layout_options_archive']			= 'right-sidebar';
		$defaults['layout_options_page']			= 'right-sidebar';	
		$defaults['layout_options_single']			= 'right-sidebar';	

		//Footer section 
		$defaults['scroll_top_visible']		= true;		
		$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'kuza-slider' );
		$defaults['powered_by_text']			= esc_html__( 'Kuza by Sensational Theme', 'kuza-slider' );

		// Pass through filter.
		$defaults = apply_filters( 'kuza_slider_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;


/**
*  Get theme options
*/
if ( ! function_exists( 'kuza_slider_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function kuza_slider_get_option( $key ) {

			$default_options = kuza_slider_get_default_theme_options();
		
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;