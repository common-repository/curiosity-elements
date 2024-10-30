<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'padding' => array(
		'label' => __( 'Padding', 'curiosity-elements' ),
		'type'  => 'slider',
		'value' => 0,
		'desc'  => __( 'Add the size of the padding at the bottom and the top. (px)', 'curiosity-elements' ),
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Background Image', 'curiosity-elements' ),
		'desc'  => __( 'Add the link of Your image.', 'curiosity-elements' )
	),
	'image_position'   => array(
		'type'  => 'select',
		'label' => __( 'Image Position', 'curiosity-elements' ),
		'desc'  => __( 'The position of the image.', 'curiosity-elements' ),
		'value' => 'background',
		'choices' => array(
			'background' => __('Background', 'curiosity-elements'),
			'pattern' => __('Pattern', 'curiosity-elements'),
			'left' => __('Left', 'curiosity-elements'),
			'right' => __('Right', 'curiosity-elements')
		),
	),
	'parallax'                    => array(
		'label'        => __( 'Parallax', 'curiosity-elements' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'curiosity-elements' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'curiosity-elements' )
		),
		'value'        => 'no',
		'desc'         => __( 'Set if You want parallax image.', 'curiosity-elements' ),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'curiosity-elements' ),
		'desc'  => __( 'Set the align.', 'curiosity-elements' ),
		'value' => 'left',
		'choices' => array(
			'left' => __('left', 'curiosity-elements'),
			'right' => __('right', 'curiosity-elements'),
			'center' => __('center', 'curiosity-elements'),
		),
	),
	'layer' => array(
		'label' => __( 'Layer Opacity', 'curiosity-elements' ),
		'type'  => 'slider',
		'value' => 0,
		'desc'  => __( 'Add a number for the layer opacity (0-99).', 'curiosity-elements' ),
	),
	'layer_color' => array(
		'label' => __('Layer Color', 'curiosity-elements'),
		'desc'  => __('Select the color', 'curiosity-elements'),
		'type'  => 'color-picker',
	),
	'background_color' => array(
		'label' => __('Background Color', 'curiosity-elements'),
		'desc'  => __('Select the background color', 'curiosity-elements'),
		'type'  => 'color-picker',
	),
	'color' => array(
		'label' => __('Font Color', 'curiosity-elements'),
		'desc'  => __('Select the color', 'curiosity-elements'),
		'type'  => 'color-picker',
	),
	'border_top'       => array(
		'type'  => 'text',
		'label' => __( 'Border Top', 'curiosity-elements' ),
		'desc'  => __( 'Add custom css for border.', 'curiosity-elements' )
	),
	'border_bottom'       => array(
		'type'  => 'text',
		'label' => __( 'Border Bottom', 'curiosity-elements' ),
		'desc'  => __( 'Add custom css for border.', 'curiosity-elements' )
	),
	'customclass'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Class', 'curiosity-elements' ),
		'desc'  => __( 'Add custom class, if You need.', 'curiosity-elements' )
	),
	'container'                    => array(
		'label'        => __( 'Container', 'curiosity-elements' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'curiosity-elements' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'curiosity-elements' )
		),
		'value'        => 'yes',
		'desc'         => __( 'If You don`t need container for the content, switch it off.', 'curiosity-elements' ),
	),
	'responsive_behaviour_text'                      => array(
		'label' => __( 'Responsive Behaviour', 'curiosity-elements' ),
		'type'  => 'html',
		'value' => '',
		'html'  => '',
	),
	'hide_on_desktop'                    => array(
		'label'        => __( 'Hide on Desktop', 'curiosity-elements' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'curiosity-elements' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'curiosity-elements' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is above 1199px.', 'curiosity-elements' ),
	),
	'hide_on_smaller'                    => array(
		'label'        => __( 'Hide on Smaller Screen', 'curiosity-elements' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'curiosity-elements' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'curiosity-elements' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 1199px and 992px.', 'curiosity-elements' ),
	),
	'hide_on_tablet'                    => array(
		'label'        => __( 'Hide on Tablet', 'curiosity-elements' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'curiosity-elements' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'curiosity-elements' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is between 991px and 768px.', 'curiosity-elements' ),
	),
	'hide_on_mobile'                    => array(
		'label'        => __( 'Hide on Mobile', 'curiosity-elements' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'curiosity-elements' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'No', 'curiosity-elements' )
		),
		'value'        => 'no',
		'desc'         => __( 'Hide if media screen is under 767px.', 'curiosity-elements' ),
	),
);
