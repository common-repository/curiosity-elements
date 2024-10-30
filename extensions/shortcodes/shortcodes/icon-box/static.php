<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon-box';

wp_enqueue_style(
    'curiosity-icon-box-shortcode',
    $uri . '/static/css/styles.css'
);