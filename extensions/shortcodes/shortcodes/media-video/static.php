<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/media-video';

wp_enqueue_style(
    'curiosity-media-video-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'curiosity-media-video-shortcode-script',
    $uri . '/static/js/video.js'
);