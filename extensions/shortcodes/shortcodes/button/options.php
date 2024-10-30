<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'  => array(
		'label' => __( 'Button Label', 'curiosity-elements' ),
		'desc'  => __( 'This is the text that appears on your button.', 'curiosity-elements' ),
		'type'  => 'text',
	),
	'link'   => array(
		'label' => __( 'Button Link', 'curiosity-elements' ),
		'desc'  => __( 'Where should your button link to.', 'curiosity-elements' ),
		'type'  => 'text',
		'value' => '#'
	),
	'color'  => array(
		'label'   => __( 'Color Type', 'curiosity-elements' ),
		'desc'    => __( 'Select the color type.', 'curiosity-elements' ),
		'type'    => 'select',
		'choices' => array(
			'basic' => __('basic', 'curiosity-elements'),
			'inverse' => __('basic 2', 'curiosity-elements'),
			'bw' => __('black & white', 'curiosity-elements'),
			'custom' => __('custom', 'curiosity-elements'),
		)
	),
	'custom_color'              => array(
		'label' => __( 'Custom Background Color', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for custom button.', 'curiosity-elements' ),
	),
	'custom_font_color'              => array(
		'label' => __( 'Unique Font Color', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code for the button.', 'curiosity-elements' ),
	),
	'size'  => array(
		'label'   => __( 'Size', 'curiosity-elements' ),
		'desc'    => __( 'Select the size.', 'curiosity-elements' ),
		'type'    => 'select',
		'choices' => array(
			'' => '',
			'small' => __('small', 'curiosity-elements'),
			'normal' => __('normal', 'curiosity-elements'),
			'big' => __('big', 'curiosity-elements'),
			'bigger' => __('bigger', 'curiosity-elements'),
		)
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'curiosity-elements' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window.', 'curiosity-elements' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'curiosity-elements'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'curiosity-elements'),
		),
	),
	'icon_position'  => array(
		'label'   => __( 'Enable Icon', 'curiosity-elements' ),
		'desc'    => __( 'Left or right.', 'curiosity-elements' ),
		'type'    => 'select',
		'value'	  => 'none',
		'choices' => array(
			'none' => __('none', 'curiosity-elements'),
			'right' => __('right', 'curiosity-elements'),
			'left' => __('left', 'curiosity-elements'),
		)
	),
	'icon' => array(
		'label' => __('Icon', 'curiosity-elements'),
		'type' => 'icon',
		'value' => 'fa fa-1-no-icon',
		'desc' => __('Select the icon.', 'curiosity-elements'),
	),
	'border_radius'   => array(
		'label' => __( 'Border Radius', 'curiosity-elements' ),
		'desc'  => __( 'Add css code or leave it blank.', 'curiosity-elements' ),
		'type'  => 'text',
		'value' => ''
	),
);