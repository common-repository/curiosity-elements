<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'         => esc_html__( 'Layout Elements', 'curiosity-elements' ),
		'title'       => esc_html__( 'Section', 'curiosity-elements' ),
		'description' => esc_html__( 'Add a Section', 'curiosity-elements' ),
		'popup_size'  => 'large',
		'type'        => 'section' // WARNING: Do not edit this
	)
);