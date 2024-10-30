<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/post-carousel-2';

wp_enqueue_style(
    'curiosity-post-carousel-2-shortcode',
    $uri . '/static/css/styles.css'
);