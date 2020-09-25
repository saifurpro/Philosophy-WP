<article id="post-<?php the_ID(); ?>" <?php post_class(array('masonry__brick', 'entry', 'format-gallery')); ?> data-aos="fade-up">
    <?php if (get_post_format() == "gallery" && class_exists("CMB2")) : 
        
    $gallery_images = get_post_meta(get_the_ID(), "_philosophy_gallery_image", true);

    ?>
    <div class="entry__thumb slider">
        <div class="slider__slides">
            <?php if ($gallery_images) : 
                 foreach ($gallery_images as $gallery_image) : ?>
            <div class="slider__slide">
                <img src="<?php echo esc_url($gallery_image); ?>" alt="<?php _e('Gallery Image', 'philosophy'); ?>"> 

                
            </div>
                 <?php endforeach; endif; ?>
        </div>
    </div>
        <?php endif; ?>

    <?php echo get_template_part('template-parts/post-summary'); ?>

</article> <!-- end article -->