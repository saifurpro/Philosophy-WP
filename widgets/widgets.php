<?php 


// Register custom sidebars
function philosophy_widget_init() {

    // Header Left Social
	$args = array(
		'name'          => __( 'Header Left Social', 'philosophy' ),
        'description'   => __( 'Header Left Social Icon', 'philosophy' ),
        'id'            =>  'header_social',
		'before_widget' => '<div id="%1$s" class="header__social %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => ' ',
		'after_title'   => '',
	);
	register_sidebar($args);

    // Footer Top
	$args = array(
		'name'          => __( 'Footer Top', 'philosophy' ),
        'description'   => __( 'About Philosophy', 'philosophy' ),
        'id'            =>  'footer_top',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	);
	register_sidebar($args);

    // Footer One
	$args = array(
		'name'          => __( 'Footer One', 'philosophy' ),
        'description'   => __( 'Quick Links', 'philosophy' ),
        'id'            =>  'footer_1',
		'before_widget' => '<ul id="%1$s" class="s-footer__linklist %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar($args);

    // Footer Two
	$args = array(
		'name'          => __( 'Footer Two', 'philosophy' ),
        'description'   => __( 'Archives', 'philosophy' ),
        'id'            =>  'footer_2',
		'before_widget' => '<ul id="%1$s" class="s-footer__linklist %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar($args);

    // Footer Three
	$args = array(
		'name'          => __( 'Footer Three', 'philosophy' ),
        'description'   => __( 'Social Links', 'philosophy' ),
        'id'            =>  'footer_3',
		'before_widget' => '<ul id="%1$s" class="s-footer__linklist %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar($args);

    // Footer Newsletter
	$args = array(
		'name'          => __( 'Footer Newsletter', 'philosophy' ),
        'description'   => __( 'Newsletter Title & Description', 'philosophy' ),
        'id'            =>  'footer_newsletter',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar($args);

    // Footer Newsletter
	$args = array(
		'name'          => __( 'Copyright', 'philosophy' ),
        'description'   => __( 'Copyright Text', 'philosophy' ),
        'id'            =>  'copyright',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	);
	register_sidebar($args);

}
add_action( 'widgets_init', 'philosophy_widget_init' );