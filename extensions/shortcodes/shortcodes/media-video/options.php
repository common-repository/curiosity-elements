<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Insert Video URL', 'curiosity-elements' ),
		'desc'  => __( 'Insert Video URL to embed this video. (Vimeo or Youtube)', 'curiosity-elements' )
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Image', 'curiosity-elements' ),
		'desc'  => __( 'Add a cover image or leave it blank.', 'curiosity-elements' )
	),
	'border'       => array(
		'type'  => 'text',
		'label' => __( 'Custom Border', 'curiosity-elements' ),
		'desc'  => __( 'Add style or leave it blank.', 'curiosity-elements' )
	),
);
