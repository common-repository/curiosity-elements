<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'                  => array(
		'label' => __( 'Title', 'curiosity-elements' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add the title.', 'curiosity-elements' ),
	),
	'icon' => array(
		'label' => __('Icon', 'curiosity-elements'),
		'type' => 'icon',
		'desc' => __('Select the icon.', 'curiosity-elements'),
	),
	'link'                  => array(
		'label' => __( 'Link', 'curiosity-elements' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a link or leave it blank.', 'curiosity-elements' ),
	),
	'content'                  => array(
		'label' => __( 'Content', 'curiosity-elements' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'curiosity-elements' ),
	),
);