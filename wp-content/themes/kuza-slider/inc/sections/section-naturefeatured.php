<?php
    $naturefeatured_title       = kuza_slider_get_option( 'naturefeatured_title' );
    $naturefeatured_content_type     = kuza_slider_get_option( 'naturefeatured_content_type' );
    $enable_category     = kuza_slider_get_option( 'naturefeatured_category_enable' );
    $enable_content     = kuza_slider_get_option( 'naturefeatured_content_enable' );
    $enable_author     = kuza_slider_get_option( 'naturefeatured_author_enable' );
    $enable_posted_on     = kuza_slider_get_option( 'naturefeatured_posted_on_enable' );
    $number_of_naturefeatured_items  = kuza_slider_get_option( 'number_of_naturefeatured_items' );
    $naturefeatured_category = kuza_slider_get_option( 'naturefeatured_category' );
    $header_font_size = kuza_slider_get_option( 'naturefeatured_font_size');
    $number_of_naturefeatured_column = kuza_slider_get_option('number_of_naturefeatured_column');
    $content_align = kuza_slider_get_option('naturefeatured_content_align');
    $excerpt_length =kuza_slider_get_option( 'naturefeatured_excerpt_length');

    $see_more_txt     = kuza_slider_get_option( 'naturefeatured_see_all_txt' );
    $see_more_url     = kuza_slider_get_option( 'naturefeatured_see_all_url' );

    for( $i=1; $i<=$number_of_naturefeatured_items; $i++ ) :
        $naturefeatured_page_posts[] = absint(kuza_slider_get_option( 'naturefeatured_page_'.$i ) );
        $naturefeatured_post_posts[] = absint(kuza_slider_get_option( 'naturefeatured_post_'.$i ) );
    endfor;

?> 
<div class="naturefeatured-slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": true, "arrows":true, "autoplay": true, "fade": false }'>
    <?php 
            $args = array (

                'posts_per_page' =>absint( $number_of_naturefeatured_items ),              
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => 1,
                'ignore_sticky_posts' => true, 
                );
                if ( absint( $naturefeatured_category ) > 0 ) {
                    $args['cat'] = absint( $naturefeatured_category );
                }
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>        
                <article>
                    <div class="naturefeatured-wrapper">

                            <div class="post-featured-image">
                                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'blog-thumbnails');?>');">
                                    <div class="overlay"></div>
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