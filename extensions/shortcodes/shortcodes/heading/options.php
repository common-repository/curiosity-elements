<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content'       => array(
		'type'  => 'text',
		'label' => __( 'Title', 'curiosity-elements' ),
		'desc'  => __( 'Add the content.', 'curiosity-elements' )
	),
	'h'   => array(
		'type'  => 'select',
		'label' => __( 'Size', 'curiosity-elements' ),
		'desc'  => __( 'Select the font size.', 'curiosity-elements' ),
		'value' => '2',
		'choices' => array(
			'1' => __('h1', 'curiosity-elements'),
			'2' => __('h2', 'curiosity-elements'),
			'3' => __('h3', 'curiosity-elements'),
			'4' => __('h4', 'curiosity-elements'),
			'5' => __('h5', 'curiosity-elements'),
			'6' => __('h6', 'curiosity-elements'),
		),
	),
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
	'font_style'   => array(
		'type'  => 'select',
		'label' => __( 'Font Style', 'curiosity-elements' ),
		'desc'  => __( 'Select one from the preselected font styles.', 'curiosity-elements' ),
		'value' => '1',
		'choices' => array(
			'1' => __('primary', 'curiosity-elements'),
			'2' => __('secondary', 'curiosity-elements'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'curiosity-elements' ),
	),
	'allow_icon' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Icon', 'curiosity-elements'),
				'type' => 'switch',
				'right-choice' => array(
					'value' => 'off',
					'label' => __('Off', 'curiosity-elements')
				),
				'left-choice' => array(
					'value' => 'on',
					'label' => __('On', 'curiosity-elements')
				),
				'value' => 'off',
				'desc' => __('Turn on if You want to display icon next to the title.', 'curiosity-elements'),
			)
		),
		'choices' => array(
			'on' => array(
				'icon'  		=> array(
					'label' => __( 'Icon', 'curiosity-elements' ),
					'desc'  => __( 'Select an icon.', 'curiosity-elements' ),
					'type' => 'icon',
				),
			),

		),
		'show_borders' => false,
	),
	'border' => array(
		'label' => __('Underline', 'curiosity-elements'),
		'type' => 'slider',
		'desc'  => __( 'Select the size of the bottom border.', 'curiosity-elements' ),
		'value' => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),
	'fw_border'              => array(
		'label' => __( 'Fullwidth Underline', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a color code, If You want fullwidth underline.', 'curiosity-elements' ),
	),
);