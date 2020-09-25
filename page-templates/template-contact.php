<?php 

/**
 * Template Name: Contact Page
 */


get_header();
the_post();
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
                <div id="map-wrap">
                    <?php echo wp_kses_post(do_shortcode(get_field('google_maps'))); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <?php the_content(); ?>

                <?php if(class_exists("CMB2")): ?>
                <div class="row">
                    <?php 
                    $block_options = get_post_meta( get_the_ID(), "_philosophy_block_item", true );
                    
                    ?>
<?php foreach ($block_options as $block_option) : ?>
                    <div class="col-six tab-full">
                        <h3><?php echo esc_html( $block_option['_philosophy_block_title'] ); ?></h3>

                        <?php echo esc_html( $block_option['_philosophy_block_description'] ); ?>

                    </div>
<?php endforeach; ?>
                </div> <!-- end row -->
                <?php endif; ?>

                <h3><?php _e('Say Hello.', 'philosophy') ?></h3>

                <?php echo do_shortcode(get_field('contact_form')); ?>


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->

<?php get_footer(); ?>