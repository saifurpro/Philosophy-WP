<article id="post-<?php the_ID(); ?>" <?php post_class(array('masonry__brick', 'entry', 'format-standard')); ?> data-aos="fade-up">
        
    <div class="entry__thumb">
        <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
            <?php the_post_thumbnail('philosophy-square') ?>
        </a>
    </div>

   <?php echo get_template_part('template-parts/post-summary'); ?>

</article> <!-- end article -->