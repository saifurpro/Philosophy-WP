<?php


function philosophy_gallery_metabox()
{

	$post_id = null;
	if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
		$post_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
	}

	if (!$post_id || get_post_format($post_id) != "gallery") {
		return;
	}

	$prefix = '_philosophy_';

	$cmb = new_cmb2_box(array(
		'id'           => $prefix . 'gallery',
		'title'        => __('Gallery', 'philosophy'),
		'object_types' => array('post'),
		'context'      => 'normal',
		'priority'     => 'default',
		'show_names'   => true,
	));

	$cmb->add_field(array(
		'name' => __('Gallery Image', 'philosophy'),
		'id' => $prefix . 'gallery_image',
		'type' => 'file_list',
		'query_args' => array('type' => 'image'),
		'text' => array(
			'add_upload_files_text' => 'Upload Gallery Image',
		),
	));
}
add_action('cmb2_init', 'philosophy_gallery_metabox');


function philosophy_about_page_block_metabox(){

	$prefix = '_philosophy_';
 
	$cmb = new_cmb2_box(array(
		'id' => $prefix . 'about_block',
		'title' => __('About Block', 'philosophy') ,
		'object_types' => array(
			'page'
		),
		'show_on' => array( 
			'key' => 'page-template', 
			'value' => 'page-templates/template-about.php'
		),
		'context' => 'normal',
		'priority' => 'default',
	));
	$group = $cmb->add_field(array(
		'name' => __('Block item', 'philosophy') ,
		'id' => $prefix . 'block_item',
		'type' => 'group',
	));
	$cmb->add_group_field($group, array(
		'name' => __('Title', 'philosophy') ,
		'id' => $prefix . 'block_title',
		'type' => 'text',
		'desc'=>	__("Title", "philosophy"),
	));
	$cmb->add_group_field($group, array(
		'name' => __('Description', 'philosophy') ,
		'id' => $prefix . 'block_description',
		'type' => 'textarea',
		'desc'=>	__("Description", "philosophy"),
	));

}
add_action('cmb2_init', 'philosophy_about_page_block_metabox');

function philosophy_contact_page_block_metabox(){

	$prefix = '_philosophy_';
 
	$cmb = new_cmb2_box(array(
		'id' => $prefix . 'contact_block',
		'title' => __('Contact Block', 'philosophy') ,
		'object_types' => array(
			'page'
		),
		'show_on' => array( 
			'key' => 'page-template', 
			'value' => 'page-templates/template-contact.php'
		),
		'context' => 'normal',
		'priority' => 'default',
	));
	$group = $cmb->add_field(array(
		'name' => __('Block item', 'philosophy') ,
		'id' => $prefix . 'block_item',
		'type' => 'group',
	));
	$cmb->add_group_field($group, array(
		'name' => __('Title', 'philosophy') ,
		'id' => $prefix . 'block_title',
		'type' => 'text',
		'desc'=>	__("Title", "philosophy"),
	));
	$cmb->add_group_field($group, array(
		'name' => __('Description', 'philosophy') ,
		'id' => $prefix . 'block_description',
		'type' => 'textarea',
		'desc'=>	__("Description", "philosophy"),
	));

}
add_action('cmb2_init', 'philosophy_contact_page_block_metabox');