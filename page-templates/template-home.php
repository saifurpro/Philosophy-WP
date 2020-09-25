<?php 

/**
 * Template Name: Home Page
 */


get_header();

?>
    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

        <?php echo get_template_part('template-parts/header'); ?>


        <?php echo get_template_part('template-parts/featured-post'); ?>

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                
                <?php 
                $paged = get_query_var( 'paged') ? get_query_var( 'paged') : 1;
                $args = array(
                    'post_type'             => 'post',
                    'post_status'           =>  'publish',
                    'posts_per_page'        =>  10,
                    'ignore_sticky_posts'   =>  true,
                    'paged'                 =>  $paged,

                );
                $loop = new WP_Query( $args );
                if($loop->have_posts()){
                    while($loop->have_posts()){
                        $loop->the_post();
                        echo get_template_part('template-parts/post-format/post', get_post_format( )); 
                    }
                }else {
                    _e('No post found!', 'philosophy');
                }
                wp_reset_postdata();
                
                ?>

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <?php
                    $page = ( get_query_var('page') ) ? get_query_var('page') : 1;
                    
                    $links = paginate_links( array(
                        'current'  => $page,
                        'total'    => $loop->max_num_pages,
                        'type'     => 'list',
                        'mid_size' => 3,
                    ) );
                    $links = str_replace("page-numbers", "pgn__num", $links);
                    $links = str_replace("<ul class='pgn__num'>", "<ul>", $links);
                    $links = str_replace("next pgn__num", "pgn__next", $links);
                    $links = str_replace("prev pgn__num", "pgn__prev", $links);
                    echo wp_kses_post($links);
                    ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->

<?php get_footer(); ?>