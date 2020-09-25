<header class="header">
    <div class="header__content row">

        <div class="header__logo">
            <?php 
                if (has_custom_logo()) { ?>
                <a class="logo" href="<?php echo site_url(); ?>"> <?php the_custom_logo(); ?> </a>

            <?php } 

            else { ?>

                <h1>
                    <a href="<?php echo site_url(); ?>"> <?php bloginfo("name"); ?> </a>
                </h1>
            <?php } ?>
            
        </div> <!-- end header__logo -->

        <?php 
        if(is_active_sidebar('header_social')){
            dynamic_sidebar('header_social');
        }
        ?>

        <a class="header__search-trigger" href="#0"></a>

        <div class="header__search">

            <?php echo get_search_form(); ?>

            <a href="#0" title="Close Search" class="header__overlay-close"><?php _e('Close', 'philosophy') ?></a>

        </div>  <!-- end header__search -->


        <?php echo get_template_part('template-parts/navigation') ?>

    </div> <!-- header-content -->
</header> <!-- header -->