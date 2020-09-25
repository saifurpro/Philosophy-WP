<?php 

/**
 * Template Name: About Page
 */


get_header();

?>
    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader">

        <?php echo get_template_part('template-parts/header'); ?>

    </section> <!-- end s-pageheader -->



    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <?php 
                the_content();
                ?>

<?php if(class_exists("CMB2")): ?>
                <div class="row block-1-2 block-tab-full">
                    <?php 
                    $block_options = get_post_meta( get_the_ID(), "_philosophy_block_item", true );
                    
                    ?>
<?php foreach ($block_options as $block_option) : ?>
                    <div class="col-block">
                        <h3 class="quarter-top-margin">
                            <?php echo esc_html( $block_option['_philosophy_block_title'] ); ?>
                        </h3>

                        <?php echo esc_html( $block_option['_philosophy_block_description'] ); ?>
                    </div>
<?php endforeach; ?>
                </div>
<?php endif; ?>

            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->

<?php get_footer(); ?>