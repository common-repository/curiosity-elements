<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post titles
$post_title = array();
$args=array('order'=>'ASC','posts_per_page'	=>	1000,);
$posts = get_posts( $args );
if ( $posts ) {
foreach ( $posts as $post ) {
   $post_title[$post->post_title] = $post->post_title;
}
}

$options = array(
	'title'		=> array(
		'label'   => __( 'Title', 'curiosity-elements' ),
		'type'    => 'select',
		'desc'    => __( 'Select from the posts.', 'curiosity-elements' ),
		'choices' => $post_title
	),
	'display_image'	=> array(
		'label'        => __( 'Display Image', 'curiosity-elements' ),
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
		'desc'         => __( 'Yes or no.', 'curiosity-elements' ),				
	),		
	'unique_image'	=> array(
		'label'       => __( 'Unique Image', 'curiosity-elements' ),
		'desc'        => __( 'Upload an image or leave it blank for the default featured image.',
			'curiosity-elements' ),
		'type'        => 'upload',
		'images_only' => true,
	),	
	'display_title'	=> array(
		'label'        => __( 'Display Title', 'curiosity-elements' ),
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
		'desc'         => __( 'Yes or no.', 'curiosity-elements' ),				
	),
	'title_size'	=> array(
		'label'   => __( 'Title Size', 'curiosity-elements' ),
		'type'    => 'short-select',
		'value'   => 'h2',
		'desc'    => __( 'Select the size of the title.',
			'curiosity-elements' ),
		'choices' => array(
			'1' => 'h1',
			'2' => 'h2',
			'3' => 'h3',
			'4' => 'h4',
			'5' => 'h5',
			'6' => 'h6',
		),
	),		
	'uppercase_title'	=> array(
		'label'        => __( 'Title Uppercase', 'curiosity-elements' ),
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
		'desc'         => __( 'Yes or no.', 'curiosity-elements' ),				
	),
	'display_excerpt'	=> array(
		'label'        => __( 'Display Excerpt', 'curiosity-elements' ),
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
		'desc'         => __( 'Yes or no.', 'curiosity-elements' ),				
	),	
	'excerpt_length'	=> array(
		'label'       => __( 'Excerpt Lenght', 'curiosity-elements' ),
		'desc'        => __( 'Add the number of the characters.', 'curiosity-elements' ),
		'type'       => 'slider',
		'value'      => 100,
		'properties' => array(
			'min' => 10,
			'max' => 500,
			'sep' => 1,
		),
	),	
	'excerpt_size'	=> array(
		'label' => __( 'Excerpt Font Size', 'curiosity-elements' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => __( 'Add a font-size css or leave it blank for the default.', 'curiosity-elements' ),
	),	
	'excerpt_underline'	=> array(
		'label'       => __( 'Excerpt Underline', 'curiosity-elements' ),
		'desc'        => __( 'The size of the underline.', 'curiosity-elements' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min' => 0,
			'max' => 10,
			'sep' => 1,
		),
	),	
	'side_border'	=> array(
		'label'       => __( 'Side Border', 'curiosity-elements' ),
		'desc'        => __( 'Side border size for the post.', 'curiosity-elements' ),
		'type'       => 'slider',
		'value'      => 0,
		'properties' => array(
			'min' => 0,
			'max' => 20,
			'sep' => 1,
		),
	),
	'unique_color' => array(
		'label' => __('Unique Color', 'curiosity-elements'),
		'type' => 'rgba-color-picker',
		'value' => '',
		'desc' => __('You can add unique color for the title and the borders.', 'curiosity-elements'),
	),
);