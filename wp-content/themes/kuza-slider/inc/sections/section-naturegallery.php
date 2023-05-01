<?php
    $naturegallery_title       = kuza_slider_get_option( 'naturegallery_title' );
    $naturegallery_content_type     = kuza_slider_get_option( 'naturegallery_content_type' );
    $enable_category     = kuza_slider_get_option( 'naturegallery_category_enable' );
    $enable_content     = kuza_slider_get_option( 'naturegallery_content_enable' );
    $enable_author     = kuza_slider_get_option( 'naturegallery_author_enable' );
    $enable_posted_on     = kuza_slider_get_option( 'naturegallery_posted_on_enable' );
    $number_of_naturegallery_items  = kuza_slider_get_option( 'number_of_naturegallery_items' );
    $naturegallery_category = kuza_slider_get_option( 'naturegallery_category' );
    $header_font_size = kuza_slider_get_option( 'naturegallery_font_size');
    $number_of_naturegallery_column = kuza_slider_get_option('number_of_naturegallery_column');
    $content_align = kuza_slider_get_option('naturegallery_content_align');
    $excerpt_length =kuza_slider_get_option( 'naturegallery_excerpt_length');

    $see_more_txt     = kuza_slider_get_option( 'naturegallery_see_all_txt' );
    $see_more_url     = kuza_slider_get_option( 'naturegallery_see_all_url' );

    for( $i=1; $i<=$number_of_naturegallery_items; $i++ ) :
        $naturegallery_page_posts[] = absint(kuza_slider_get_option( 'naturegallery_page_'.$i ) );
        $naturegallery_post_posts[] = absint(kuza_slider_get_option( 'naturegallery_post_'.$i ) );
    endfor;

?> 
<div class="naturegallery-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": true, "arrows":true, "autoplay": true, "fade": true }'>
    <?php 
        $args = array (
            'post_type'     => 'post',
            'post_per_page' => count( $naturegallery_post_posts ),
            'post__in'      => $naturegallery_post_posts,
            'orderby'       =>'post__in', 
            'ignore_sticky_posts' => true, 
        ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>        
                <article>
                    <div class="naturegallery-wrapper">
                        <div class="post-featured-image">
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'blog-thumbnails');?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                                <?php $homepage_video_url = get_post_meta( get_the_ID(), 'kuza-slider-video-url', true ); ?>
                                <?php if (!empty($homepage_video_url)): ?>
                                   <a href="<?php the_permalink();?>"> <div class="homepage-video-icon"><i class="fa fa-play"></i></div></a>
                                <?php endif ?>
                            </div><!-- .featured-image -->
                        </div>
                        <div class="entry-container <?php echo esc_attr($content_align); ?>">
                            <?php if ( ($enable_category==true) ) : ?>
                                <div class="entry-meta">
                                    <?php kuza_slider_entry_meta(); ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                            <header class="entry-header">
                                <h2 class="entry-title" style="font-size: <?php echo esc_attr($header_font_size); ?>px; " ><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>
                            <?php if (($enable_posted_on==true) || ($enable_author==true)) : ?>
                                <div class="entry-meta">
                                    <?php 
                                        if (($enable_posted_on==true)) {
                                            kuza_slider_posted_on();
                                        } 
                                        if (($enable_author==true)) {
                                            kuza_slider_author();
                                        }
                                     ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                            <?php if (($enable_content==true)) : ?>
                                <div class="entry-content">
                                    <?php 
                                        $excerpt = kuza_slider_the_excerpt( $excerpt_length );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div><!-- .entry-content -->
                            <?php endif; ?>
                            
                        </div><!-- .entry-container -->
                    </div>
                </article>

            <?php endwhile;?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
</div>