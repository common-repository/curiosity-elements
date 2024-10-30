<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/spacer';

wp_enqueue_style(
    'curiosity-spacer-shortcode',
    $uri . '/static/css/styles.css'
);
