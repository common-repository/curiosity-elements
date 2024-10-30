<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/image-box';

wp_enqueue_style(
    'curiosity-image-box-shortcode',
    $uri . '/static/css/styles.css'
);
