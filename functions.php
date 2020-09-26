<?php 

if (site_url() == 'http://localhost/philosophy') {
    define('PHILOSOPHY_VERSION', time());
} else {
    define('PHILOSOPHY_VERSION', wp_get_theme()->get('Version'));
}

if(! function_exists('philosophy_setup_theme')){
    function philosophy_setup_theme() {
        load_theme_textdomain( 'philosophy', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links');
        add_theme_support( 'title-tag');
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'html5', array( 
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style'
        ));
        add_theme_support('post-formats', array(
            'image', 'audio', 'video', 'quote', 'gallery', 'link',
        )); 
        add_theme_support("custom-logo", array(
            'height'        =>  250,
            'width'         =>  250,
            'flex-width'    =>  true,
            'flex-height'   =>  true,
        ));
        add_image_size('philosophy-square', 400, 400, true);

        add_theme_support('customize-selective-refresh-widgets');
        
    }
    add_action('after_setup_theme', 'philosophy_setup_theme');
}

function philosophy_content_width()
{
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 960;
    }
}
add_action('after_setup_theme', 'philosophy_content_width');

if(! function_exists('philosophy_scripts')){
    function philosophy_scripts() {
        wp_enqueue_style( 'philosophy-font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'philosophy-fonts-css', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'philosophy-base-css', get_template_directory_uri() . '/assets/css/base.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'philosophy-vendor-css', get_template_directory_uri() . '/assets/css/vendor.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'philosophy-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'philosophy-style', get_stylesheet_uri(), array(), PHILOSOPHY_VERSION, 'all' );

        wp_enqueue_script( 'philosophy-plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', true );
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
        wp_enqueue_script( 'philosophy-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
    }
    add_action('wp_enqueue_scripts', 'philosophy_scripts');
}

function philosophy_classic_editor_styles()
{

    $classic_editor_styles = array(
        '/assets/css/editor-style.css',
    );

    add_editor_style($classic_editor_styles);
}

add_action('init', 'philosophy_classic_editor_styles');

function philosophy_menus()
{
    $locations = array(
        'primary'   =>  __('Main Menu', 'philosophy'),
    );

    register_nav_menus($locations);
}
add_action('init', 'philosophy_menus');

/* Active Class in Menu */
function philosophy_active_menu($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'current ';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'philosophy_active_menu', 10, 2);

/* Blog Post Pagination */
function philosophy_pagination()
{
    global $wp_query;

    $links = paginate_links(array(
        'current'   =>  max(1, get_query_var('paged')),
        'total'     =>  $wp_query->max_num_pages,
        'type'      =>  'list',
        'mid_size'  =>  3,
    ));

    $links = str_replace("page-numbers", "pgn__num", $links);
    $links = str_replace("<ul class='pgn__num'>", "<ul>", $links);
    $links = str_replace("next pgn__num", "pgn__next", $links);
    $links = str_replace("prev pgn__num", "pgn__prev", $links);
    echo wp_kses_post($links);
}

/* Search Form */
function philosophy_search_form()
{
    $action = home_url("/");
    $search_for = __("Search for:", "philosophy");
    $placeholder = __("Type Keywords", "philosophy");
    $btn_val = __("Search", "philosophy");


    $newForm = <<<FORM
    <form role="search" method="get" class="header__search-form" action="{$action}">
<label>
    <span class="hide-content">{$search_for}</span>
<input type="search" class="search-field" placeholder="{$placeholder}" value="" name="s" title="{$search_for}"
    autocomplete="off">
</label>
<input type="submit" class="search-submit" value="{$btn_val}">
</form>
FORM;

    return $newForm;
}
add_filter("get_search_form", "philosophy_search_form");

function philosophy_comment_filed( $fields ) {
    $comment = $fields['comment'];
    $author = $fields['author'];
    $email = $fields['email'];
    $url = $fields['url'];
    $cookies = $fields['cookies'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    
    $fields['author'] = $author;
    $fields['email'] = $email;
    $fields['url'] = $url;
    $fields['comment'] = $comment;
    $fields['cookies'] = $cookies;
    
    return $fields;
}
add_filter( 'comment_form_fields', 'philosophy_comment_filed' );


/* Remove Category auto paragraph */
remove_action("term_description", "wpautop");

require_once get_template_directory() . '/widgets/widgets.php';
require_once get_template_directory() . '/inc/tgm.php';
require_once get_template_directory() . '/inc/cmb2.php';
require_once get_template_directory() . '/inc/acf.php';
require_once get_template_directory() . '/inc/demo-data-content.php';