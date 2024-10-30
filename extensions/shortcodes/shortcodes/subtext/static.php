<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/subtext';

wp_enqueue_style(
    'curiosity-subtext-shortcode',
    $uri . '/static/css/styles.css'
);
