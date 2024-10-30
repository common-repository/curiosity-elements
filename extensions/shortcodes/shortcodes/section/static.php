<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/section';

wp_enqueue_style(
    'curiosity-section-shortcode',
    $uri . '/static/css/styles.css'
);