<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'curiosity-elements' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'curiosity-elements' )
	),
	'link_type'   => array(
		'type'  => 'select',
		'label' => __( 'Link type', 'curiosity-elements' ),
		'desc'  => __( 'Select the link type.', 'curiosity-elements' ),
		'value' => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'curiosity-elements'),
			'lightbox' => __('Lightbox', 'curiosity-elements'),
		),
	),
	'link'       => array(
		'type'  => 'text',
		'label' => __( 'Link', 'curiosity-elements' ),
		'desc'  => __( 'Link for the image.', 'curiosity-elements' )
	),
	'name'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'curiosity-elements' ),
		'desc'  => __( 'Add the content.', 'curiosity-elements' )
	),
	'content'       => array(
		'type'  => 'textarea',
		'label' => __( 'Description', 'curiosity-elements' ),
		'desc'  => __( 'Add the content.', 'curiosity-elements' )
	),
);