<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/blogger-post';

wp_enqueue_style(
    'curiosity-blogger-post-shortcode',
    $uri . '/static/css/styles.css'
);