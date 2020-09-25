<article id="post-<?php the_ID(); ?>" <?php post_class(array('masonry__brick', 'entry', 'format-link')); ?> data-aos="fade-up">
    
    <div class="entry__thumb">
        <div class="link-wrap">
            <p><?php the_title(); ?></p>
            <cite>
                <a target="<?php echo esc_attr(get_field('link_target')); ?>" href="<?php echo esc_url(get_field('link_url'))?>"><?php echo esc_html(get_field('link_text')); ?></a>
            </cite>
        </div>
    </div>
    
</article> <!-- end article -->