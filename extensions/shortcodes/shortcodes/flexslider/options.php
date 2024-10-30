<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'flexslider' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Sliders', 'curiosity-elements' ),
		'popup-title'   => __( 'Add/Edit Slide', 'curiosity-elements' ),
		'desc'          => __( 'Create your slides', 'curiosity-elements' ),
		'template'      => '{{=slide_image}}',
		'popup-options' => array(
			'slide_image'            => array(
				'type'  => 'upload',
				'label' => __( 'Image', 'curiosity-elements' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'curiosity-elements' )
			),
		),
	)
);