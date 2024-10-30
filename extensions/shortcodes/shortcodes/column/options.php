<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_style('fw-ext-builder-frontend-grid');

$options = array(
	'left' => array(
		'label' => __( 'Padding left', 'curiosity-elements' ),
		'type'  => 'slider',
		'value' => 15,
		'desc'  => __( 'Padding left (px).', 'curiosity-elements' ),
	),
	'right' => array(
		'label' => __( 'Padding right', 'curiosity-elements' ),
		'type'  => 'slider',
		'value' => 15,
		'desc'  => __( 'Padding right (px).', 'curiosity-elements' ),
	),
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Text Align', 'curiosity-elements' ),
		'desc'  => __( 'Set the align.', 'curiosity-elements' ),
		'value' => '',
		'choices' => array(
			'' => '',
			'left' => __('left', 'curiosity-elements'),
			'right' => __('right', 'curiosity-elements'),
			'center' => __('center', 'curiosity-elements'),
		),
	),
	'background'              => array(
		'label' => __( 'Background Color', 'curiosity-elements' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'Add a background color, if You need.', 'curiosity-elements' ),
	),
	'background_image' => array(
		'label' => __('Background Image', 'curiosity-elements'),
		'desc' => __('Upload an image for the background.', 'curiosity-elements'),
		'type' => 'upload',
	),
	'image_size' => array(
		'label' => __('Background Image Size', 'curiosity-elements'),
		'type' => 'short-select',
		'value' => 'cover',
		'choices' => array(
			'inherit' => 'inherit',
			'initial' => 'initial',
			'cover' => 'cover',
			'contain' => 'contain',
		),
	),
	'image_repeat' => array(
		'label' => __('Background Image Repeat', 'curiosity-elements'),
		'type' => 'short-select',
		'value' => 'no-repeat',
		'choices' => array(
			'no-repeat' => 'no-repeat',
			'repeat' => 'repeat',
			'repeat-x' => 'repeat-x',
			'repeat-y' => 'repeat-y',
		),
	),
	'border'       => array(
		'type'  => 'text',
		'label' => __( 'Border', 'curiosity-elements' ),
		'value' => '',
		'desc'  => __( 'You can add border css here.', 'curiosity-elements' )
	),
	'max_width'       => array(
		'type'  => 'text',
		'label' => __( 'Content Max Width', 'curiosity-elements' ),
		'value' => '',
		'desc'  => __( 'Add max-width css for the content, if You don`t want to fill the whole column.', 'curiosity-elements' )
	),
	'content_position' => array(
		'label' => __('Content Position', 'curiosity-elements'),
		'type' => 'short-select',
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'curiosity-elements'),
			'left' => __('left', 'curiosity-elements'),
			'right' => __('right', 'curiosity-elements'),
		),
		'desc'  => __( 'The position of the content. (Only if max-width value added.)', 'curiosity-elements' )
	),
	'customclass'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Class', 'curiosity-elements' ),
		'desc'  => __( 'Add custom class, if You need.', 'curiosity-elements' )
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
	'width_on_smaller'                    => array(
		'label'        => __( '1/1 Width on Smaller Screen', 'curiosity-elements' ),
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
		'desc'         => __( '100% width if media screen is between 1199px and 992px.', 'curiosity-elements' ),
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
	'width_on_tablet'                    => array(
		'label'        => __( '1/1 Width on Tablet', 'curiosity-elements' ),
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
		'desc'         => __( '100% width if media screen is between 991px and 768px.', 'curiosity-elements' ),
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