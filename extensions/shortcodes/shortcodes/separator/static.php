<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/separator';

wp_enqueue_style(
    'curiosity-separator-shortcode',
    $uri . '/static/css/styles.css'
);
