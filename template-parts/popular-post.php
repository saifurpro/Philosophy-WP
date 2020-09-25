<div class="col-eight md-six tab-full popular">
    <h3><?php _e('Popular Posts', 'philosophy'); ?></h3>
    <div class="block-1-2 block-m-full popular__posts">
        <?php 
            $args = array(
                'posts_per_page'         => 6,
                'order'               => 'DESC',
                'orderby'             => 'comment_count',
                'ignore_sticky_posts' => true,
            );

        $query = new WP_Query( $args );
        if($query->have_posts()): while($query->have_posts()) : $query->the_post();

        ?>
        <article class="col-block popular__post">
            <?php if(has_post_thumbnail()): ?>
                <a class="popular__thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
            <?php endif; ?>
            
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <section class="popular__meta">
                <span class="popular__author"><span><?php _e('By', 'philosophy'); ?></span> <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"> <?php the_author(); ?></a></span>
                <span class="popular__date"><span><?php _e('on', 'philosophy'); ?></span> <time datetime="2017-12-12"><?php echo get_the_date(); ?></time></span>
            </section>
        </article>
        <?php endwhile; endif; ?>
    </div> <!-- end popular_posts -->
</div> <!-- end popular -->