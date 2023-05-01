<?php
    $gallery_title       = kuza_slider_get_option( 'gallery_title' );
    $gallery_content_type     = kuza_slider_get_option( 'gallery_content_type' );
    $enable_category     = kuza_slider_get_option( 'gallery_category_enable' );
    $enable_content     = kuza_slider_get_option( 'gallery_content_enable' );
    $enable_author     = kuza_slider_get_option( 'gallery_author_enable' );
    $enable_posted_on     = kuza_slider_get_option( 'gallery_posted_on_enable' );
    $number_of_gallery_items  = kuza_slider_get_option( 'number_of_gallery_items' );
    $gallery_category = kuza_slider_get_option( 'gallery_category' );
    $header_font_size = kuza_slider_get_option( 'gallery_font_size');
    $number_of_gallery_column = kuza_slider_get_option('number_of_gallery_column');
    $content_align = kuza_slider_get_option('gallery_content_align');
    $excerpt_length =kuza_slider_get_option( 'gallery_excerpt_length');
    $gallery_image_option =kuza_slider_get_option( 'gallery_image_option');

    $see_more_txt     = kuza_slider_get_option( 'gallery_see_all_txt' );
    $see_more_url     = kuza_slider_get_option( 'gallery_see_all_url' );

    for( $i=1; $i<=$number_of_gallery_items; $i++ ) :
        $gallery_page_posts[] = absint(kuza_slider_get_option( 'gallery_page_'.$i ) );
        $gallery_post_posts[] = absint(kuza_slider_get_option( 'gallery_post_'.$i ) );
    endfor;

?> 
    <div class="gallery-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": false, "arrows": false, "autoplay": false, "draggable": true, "fade": false, "adaptiveHeight": true, "fade":true }'>

    
       <?php 
            $args = array (

                'posts_per_page' =>absint( $number_of_gallery_items ),              
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => 1,
                'ignore_sticky_posts' => true, 
                );
                if ( absint( $gallery_category ) > 0 ) {
                    $args['cat'] = absint( $gallery_category );
                }
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?> 
                <article <?php if ($gallery_image_option=='gallery-bg-image'){ ?> class="gallery-bg-image" style="background-image: url('<?php the_post_thumbnail_url('full');?>');" <?php } ?>>
                    <?php if ($gallery_image_option=='gallery-featured-image'){ ?>
                        <img src="<?php the_post_thumbnail_url('full');?>">
                    <?php } ?>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    </header>
                </article>
            <?php endwhile;?>
        </div>

    <div class="gallery-slider-nav"> 
        <?php $i=0;  
        while ($loop->have_posts()) : $loop->the_post(); $i++;?> 
            <article style="background-image: url('<?php the_post_thumbnail_url('full');?>');" >
            </article>
        <?php endwhile;?>       
    </div>
    
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
