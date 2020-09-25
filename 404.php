<?php 

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
                    <?php _e("404! Not Found.", "philosophy"); ?>
                </h1>
                <h2><a href="<?php echo site_url(); ?>"><?php _e('Go Home', 'philosophy'); ?> <i class="fa fa-long-arrow-right"></i></a></h2>
            </div> <!-- end s-content__header -->

        </div> <!-- end row -->

    </section> <!-- s-content -->

<?php get_footer(); ?>