<?php 

foreach (glob("*.css") as $css) {
    echo "wp_enqueue_style( 'philosophy-{css}', get_template_directory_uri() . '/assets/css/{css}', array(), '1.0', 'all');\n";
}