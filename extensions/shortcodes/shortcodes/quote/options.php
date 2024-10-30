<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'author'   => array(
		'label' => __( 'Author', 'curiosity-elements' ),
		'desc'  => __( 'Add the author.', 'curiosity-elements' ),
		'type'  => 'text',
	),
	'style'  => array(
		'label'   => __( 'Style', 'curiosity-elements' ),
		'desc'    => __( 'Select one from the styles.', 'curiosity-elements' ),
		'type'    => 'select',
		'value'	  => '1',
		'choices' => array(
			'1' => __('1', 'curiosity-elements'),
			'2' => __('2', 'curiosity-elements'),
		)
	),
	'content'  => array(
		'label' => __( 'Content', 'curiosity-elements' ),
		'desc'  => __( 'Add the content.', 'curiosity-elements' ),
		'type'  => 'textarea',
	),
);