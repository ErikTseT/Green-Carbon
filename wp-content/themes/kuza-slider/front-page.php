<?php
/**
 * The template for displaying home page.
 * @package Kuza
 */

if ( 'posts' == get_option( 'show_on_front' )  || 'posts' != get_option( 'show_on_front' )){ 
    get_header(); ?>
    <?php 
    $enabled_sections = kuza_slider_get_sections();
    $homepage_design_layout     = kuza_slider_get_option( 'homepage_design_layout_options' );
    if( is_array( $enabled_sections ) &&  $homepage_design_layout== 'home-magazine') {
        foreach( $enabled_sections as $section ) {
            if( $section['id'] == 'headlines' ) { ?>
                <?php $disable_headlines_section = kuza_slider_get_option( 'disable_headlines_section' );
                if( true ==$disable_headlines_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; } ?>
            <?php if( $section['id'] == 'hero' ) { ?>
                <?php $disable_hero_section = kuza_slider_get_option( 'disable_hero_section' );
                if( true ==$disable_hero_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'portfolio' ) { ?>
                <?php $disable_portfolio_section = kuza_slider_get_option( 'disable_portfolio_section' );
                if( true ==$disable_portfolio_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>  
            <?php endif; ?> 

            <?php } elseif( $section['id'] == 'galleryview' ) { ?>
                <?php $disable_galleryview_section = kuza_slider_get_option( 'disable_galleryview_section' );
                $galleryview_layout = kuza_slider_get_option( 'galleryview_layout' );
                if( true ==$disable_galleryview_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section <?php echo esc_attr($galleryview_layout); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>                    
                <?php endif; ?>
            <?php } ?>
        <?php } ?> 

        <div class="primary-content-sidebar wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <?php foreach( $enabled_sections as $section ) { ?>
                        <?php if( $section['id'] == 'recent' ) { ?>
                            <?php $disable_recent_section = kuza_slider_get_option( 'disable_recent_section' );
                             if( true ==$disable_recent_section): ?>
                                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                                </section>
                        <?php endif; ?>
                        
                        <?php } elseif( $section['id'] == 'ads' ) { ?>
                            <?php $disable_ads_section = kuza_slider_get_option( 'disable_ads_section' );
                            if( true ==$disable_ads_section): ?>
                                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                                </section>
                        <?php endif; ?>
                        
                        <?php } elseif( $section['id'] == 'trending' ) { ?>
                            <?php $disable_trending_section = kuza_slider_get_option( 'disable_trending_section' );
                            if( true ==$disable_trending_section): ?>
                                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                                </section>
                        <?php endif; ?>
                        <?php } elseif( $section['id'] == 'categorynews' ) { ?>
                            <?php $disable_categorynews_section = kuza_slider_get_option( 'disable_categorynews_section' );
                             if( true ==$disable_categorynews_section): ?>
                                <?php   $number_of_categorynews_column = kuza_slider_get_option('number_of_categorynews_column'); ?>
                                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section col-<?php echo esc_attr($number_of_categorynews_column); ?>">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                                </section>
                        <?php endif; ?>
                        <?php } elseif ( $section['id'] == 'travel' ) { ?>
                        <?php $disable_travel_section = kuza_slider_get_option( 'disable_travel_section' );
                        if( true === $disable_travel_section): ?>
                            <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                            </section>
                        <?php endif; ?>
                    <?php } elseif( $section['id'] == 'adssec' ) { ?>
                            <?php $disable_adssec_section = kuza_slider_get_option( 'disable_adssec_section' );
                            if( true ==$disable_adssec_section): ?>
                                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                                </section>
                        <?php endif; ?>
                        <?php } elseif( $section['id'] == 'popular' ) { ?>
                            <?php $disable_popular_section = kuza_slider_get_option( 'disable_popular_section' );
                             if( true ==$disable_popular_section): ?>
                                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section blog-posts">
                                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                                </section>
                        <?php endif; ?>
                        <?php } ?>
                    <?php } ?>

                </main>
            </div><!-- #primary-->
            <?php $homepage_sidebar = kuza_slider_get_option( 'homepage_sidebar_position' ); ?>
            <?php if ( is_active_sidebar( 'homepage-sidebar' ) && $homepage_sidebar=='home-right-sidebar' ) { ?>
                <aside id="secondary" class="widget-area homepage-sidebar" role="complementary">
                    <?php dynamic_sidebar('homepage-sidebar'); ?>
                </aside>
            <?php } ?>
        </div><!-- .primary-content-sidebar -->  

        <?php foreach( $enabled_sections as $section ) {  ?>
            <?php if( $section['id'] == 'newsfeatured' ) { ?>
                <?php $disable_newsfeatured_section = kuza_slider_get_option( 'disable_newsfeatured_section' );
                if( true ==$disable_newsfeatured_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; } ?>
            <?php if( $section['id'] == 'mustread' ) { ?>
                <?php $disable_mustread_section = kuza_slider_get_option( 'disable_mustread_section' );
                if( true ==$disable_mustread_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] );  ?>" class="relative page-section">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                <?php endif; ?> 
            <?php } ?>
        <?php } ?>
    <?php } elseif( is_array( $enabled_sections ) &&  $homepage_design_layout== 'home-nature') { 
        foreach( $enabled_sections as $section ) { ?>
            <?php  if( ( $section['id'] == 'featured-slider' ) ){ ?>
                <?php $disable_featured_slider = kuza_slider_get_option( 'disable_featured-slider_section' );
                if( true == $disable_featured_slider): ?>
                    
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <?php $slider_layout = kuza_slider_get_option( 'slider_layout_option'); ?>
                        <?php if ($slider_layout=='default-slider'){ ?>
                            <div class="wrapper">
                                <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                            </div>
                        <?php } else {
                                 get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); 
                        } ?>
                    </section>
                <?php endif; ?>
            <?php } elseif( $section['id'] == 'naturefeatured' ) { ?>
                    <?php $disable_naturefeatured_section = kuza_slider_get_option( 'disable_naturefeatured_section' );
                    if( true ==$disable_naturefeatured_section): ?>
                        <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </section>
                <?php endif; ?> 
            <?php } elseif( $section['id'] == 'naturegallery' ) { ?>
                    <?php $disable_naturegallery_section = kuza_slider_get_option( 'disable_naturegallery_section' );
                    if( true ==$disable_naturegallery_section): ?>
                        <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </section>
                <?php endif; ?> 

            <?php } elseif( $section['id'] == 'gallery' ) { ?>
                <?php $disable_gallery_section = kuza_slider_get_option( 'disable_gallery_section' );
                if( true ==$disable_gallery_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section " >
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>                    
                <?php endif; ?>

            <?php } elseif( $section['id'] == 'rightslide' ) { ?>
                <?php $disable_rightslide_section = kuza_slider_get_option( 'disable_rightslide_section' );
                if( true ==$disable_rightslide_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section " >
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>                    
                <?php endif; ?> 
             <?php } elseif( $section['id'] == 'instagram' ) { ?>
                <?php $disable_instagram_section = kuza_slider_get_option( 'disable_instagram_section' );
                if( true ==$disable_instagram_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>
                <?php endif; ?> 
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <?php $disable_homepage_content_section = kuza_slider_get_option( 'disable_homepage_content_section' );
    if('posts' == get_option( 'show_on_front' )){ ?>
       <?php include( get_home_template() ); ?>
    <?php } elseif(($disable_homepage_content_section == true ) && ('posts' != get_option( 'show_on_front' ))) { ?>
        <div class="wrapper">
           <?php include( get_page_template() ); ?>
        </div>
     <?php  }
    get_footer();
} ?>