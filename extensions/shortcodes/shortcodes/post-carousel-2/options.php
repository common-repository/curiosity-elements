<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$options = array(
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'curiosity-elements'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'curiosity-elements'),
		'choices' => $post_categories
	),
	'column'  => array(
		'label'   => __( 'Columns', 'curiosity-elements' ),
		'desc'    => __( 'Number of columns on big screens.', 'curiosity-elements' ),
		'type'    => 'select',
		'value'	  => '3',
		'choices' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4'
		)
	),
	'delay'   => array(
		'label' => __( 'Delay', 'curiosity-elements' ),
		'desc'  => __( 'The delay for autoplay in sec. (default: false)', 'curiosity-elements' ),
		'type'  => 'text',
	),
	'pagination'  => array(
		'label'   => __( 'Pagination', 'curiosity-elements' ),
		'type'    => 'select',
		'value'	  => 'true',
		'choices' => array(
			'true' => __( 'True', 'curiosity-elements' ),
			'false' => __( 'False', 'curiosity-elements' ),
		)
	),
	'navigation'  => array(
		'label'   => __( 'Navigation', 'curiosity-elements' ),
		'type'    => 'select',
		'value'	  => 'normal',
		'choices' => array(
			'normal' => __( 'Normal', 'curiosity-elements' ),
			'normal-2' => __( 'Normal 2', 'curiosity-elements' ),
			'big' => __( 'Big', 'curiosity-elements' ),
			'false' => __( 'False', 'curiosity-elements' ),
		)
	),
);