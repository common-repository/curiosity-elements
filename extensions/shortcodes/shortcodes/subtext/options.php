<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Align', 'curiosity-elements' ),
		'desc'  => __( 'Set the align.', 'curiosity-elements' ),
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'curiosity-elements'),
			'left' => __('left', 'curiosity-elements'),
			'right' => __('right', 'curiosity-elements'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'curiosity-elements' ),
	),
	'content'                  => array(
		'label' => __( 'Text', 'curiosity-elements' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'curiosity-elements' ),
	),
);