<?php

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'philosophy_register_required_plugins' );

function philosophy_register_required_plugins() {

	$plugins = array(
		array(
			'name'               => 'Philosophy Social Widget', // The plugin name.
			'slug'               => 'philosophy-social-widget', 
			'source'             => get_stylesheet_directory() . '/lib/plugins/philosophy-social-widget.zip',
			'required'           => false, 
		),
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => false,
		),
		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => false,
		),
		array(
			'name'      => 'CMB2 Conditionals',
			'slug'		=>	'cmb2-conditionals',
			'source'      => 'https://github.com/jcchavezs/cmb2-conditionals/archive/master.zip',
			'required'  => false,
		),
		array(
			'name'      => 'MailChimp for WP',
			'slug'      => 'mailchimp-for-wp',
			'required'  => false,
		),
		array(
			'name'      => 'OSMapper',
			'slug'      => 'osmapper',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'philosophy',  
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,  
		'dismissable'  => true,  
		'dismiss_msg'  => '',  
		'is_automatic' => false,
		'message'      => '', 
	);

	tgmpa( $plugins, $config );
}
