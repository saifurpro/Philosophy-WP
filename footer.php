
    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <?php get_template_part('template-parts/popular-post'); ?>
            <div class="col-four md-six tab-full about">
                <?php 
                    if(is_active_sidebar('footer_top')){
                        dynamic_sidebar('footer_top');
                    } 
                ?>
            </div>
            
                
        </div> <!-- end row -->

                <?php if(get_terms('post_tag')): ?>
        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3><?php _e('Tags', 'philosophy'); ?></h3>

                <div class="tagcloud">
                    <?php

                    $tags = get_terms('post_tag');
                    foreach ($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo wp_kses_post($tag->name); ?></a>

                    <?php endforeach; 

                    ?>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->
                    <?php endif; ?>
    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <?php 
                        if(is_active_sidebar('footer_1')){
                            dynamic_sidebar('footer_1');
                        } 
                    ?>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <?php 
                        if(is_active_sidebar('footer_2')){
                            dynamic_sidebar('footer_2');
                        } 
                    ?>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <?php 
                        if(is_active_sidebar('footer_3')){
                            dynamic_sidebar('footer_3');
                        } 
                    ?>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <?php 
                        if(is_active_sidebar('footer_newsletter')){
                            dynamic_sidebar('footer_newsletter');
                        } 
                    ?>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <?php 
                    if(is_active_sidebar('copyright')): ?>
                        <div class="s-footer__copyright">
                            <?php  dynamic_sidebar('copyright'); ?>
                        </div>
                    <?php endif;  ?>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>