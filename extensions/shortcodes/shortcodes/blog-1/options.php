<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Post categories

$post_categories = array();
$category_terms = get_categories();
foreach ( $category_terms as $category_term ) {
$post_categories[$category_term->slug] = $category_term->slug;}
$category_tags_tmp = array_unshift($post_categories, "All");

$single_posts = array();
$post_slugs_args = array(
	'posts_per_page'   => 1000,
);
$post_slugs = get_posts( $post_slugs_args );
foreach ( $post_slugs as $post_slug ) {
$single_posts[$post_slug->ID] = $post_slug->post_title;}

$options = array(
	'infos' => array(
		'type'  => 'checkboxes',
		'value' => array(
			'date' => true,
			'author' => true,
			'categories' => true,
			'comments' => true,
			'tags' => true,
		),
		'label' => __('Info Types', 'curiosity-elements'),
		'desc'  => __('Select the info types for posts.', 'curiosity-elements'),
		'choices' => array(
			'date' => __('Date', 'curiosity-elements'),
			'author' => __('Author', 'curiosity-elements'),
			'categories' => __('Categories', 'curiosity-elements'),
			'comments' => __('Comments', 'curiosity-elements'),
			'tags' => __('Tags', 'curiosity-elements'),
		),
		'inline' => true,
	),
	'order_by' => array(
		'type' => 'select',
		'label' => __('Order By', 'curiosity-elements'),
		'value'	  => 'date',
		'choices' => array(
			'date' => __('Date', 'curiosity-elements'),
			'modified' => __('Modified', 'curiosity-elements'),
			'ID' => __('ID', 'curiosity-elements'),
			'author' => __('Author', 'curiosity-elements'),
			'title' => __('Title', 'curiosity-elements'),
			'rand' => __('Random', 'curiosity-elements'),
			'comment_count' => __('Comment count', 'curiosity-elements'),
		),
	),
	'order' => array(
		'type' => 'select',
		'label' => __('Sort Order', 'curiosity-elements'),
		'value'	  => 'DESC',
		'choices' => array(
			'DESC' => __('Descending', 'curiosity-elements'),
			'ASC' => __('Ascending', 'curiosity-elements'),
		),
	),
	'number' => array(
		'label' => __('Number of Posts', 'curiosity-elements'),
		'type' => 'text',
		'value' => '',
		'desc' => __('Add a number or leave it blank for all posts.', 'curiosity-elements'),
	),
	'category' => array(
		'type' => 'select',
		'label' => __('Category', 'curiosity-elements'),
		'value'	  => '1',
		'desc' => __('Select a category or leave it blank for all posts.', 'curiosity-elements'),
		'choices' => $post_categories
	),
	'only_posts' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'on_off' => array(
				'label' => __('Select Posts', 'curiosity-elements'),
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
				'desc' => __('Turn on, if You want to select the posts.', 'curiosity-elements'),
			)
		),
		'choices' => array(
			'on' => array(
				'posts' => array(
					'type'  => 'select-multiple',
					'label' => __('Single Posts', 'curiosity-elements'),
					'desc'  => __('Select the posts.', 'curiosity-elements'),
					'choices' => $single_posts,
					'inline' => true,
				),
			),
		),
		'show_borders' => false,
	),
);