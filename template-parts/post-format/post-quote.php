<article id="post-<?php the_ID(); ?>" <?php post_class(array('masonry__brick', 'entry', 'format-quote')); ?> data-aos="fade-up">
    
    <div class="entry__thumb">
        <blockquote>
                <?php the_content(); ?>

                <cite><?php the_title(); ?></cite>
        </blockquote>
    </div>   

</article> <!-- end article -->