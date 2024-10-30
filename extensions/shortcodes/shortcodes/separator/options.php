<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'size'  => array(
		'label'   => __( 'Size', 'curiosity-elements' ),
		'desc'    => __( 'Select the size of the separator.', 'curiosity-elements' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __('Normal', 'curiosity-elements'),
			'small' => __('Small', 'curiosity-elements')
		)
	),
	'color'              => array(
		'label' => __( 'Color', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code.', 'curiosity-elements' ),
	),
	'margin' => array(
		'label' => __( 'Margin', 'curiosity-elements' ),
		'type'  => 'slider',
		'value' => 10,
		'desc'  => __( 'Add the size of the margin (px).', 'curiosity-elements' ),
	),
	'icon'  		=> array(
		'label' => __( 'Icon', 'curiosity-elements' ),
		'desc'  => __( 'Select an icon.', 'curiosity-elements' ),
		'type' => 'icon',
	),
);