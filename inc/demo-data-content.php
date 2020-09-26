<?php 

function philosophy_import_files() {
	return array(
		array(
			'import_file_name'             => 'Philosophy Demo Content',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/demo-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/widgets.wie',
			'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/preview_image.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'philosophy_import_files' );

function philosophy_after_import_setup() {
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'primary' => $main_menu->term_id,
		)
	);

	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'philosophy_after_import_setup' );
