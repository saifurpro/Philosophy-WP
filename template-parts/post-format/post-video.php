<article id="post-<?php the_ID(); ?>" <?php post_class(array('masonry__brick', 'entry', 'format-video')); ?> data-aos="fade-up">
        
    <div class="entry__thumb video-image">
        <a href="<?php echo esc_url( get_field('video') );?>" data-lity>
            <?php the_post_thumbnail('philosophy-square') ?>
        </a>
    </div>

    <?php echo get_template_part('template-parts/post-summary'); ?>

</article> <!-- end article -->