<?php
/**
 * Plugin Name: Curiosity Elements
 * Plugin URI:  http://webzakt.com/themes/curiosity-responsive-newspaper-theme/
 * Description: Curiosity Elements plugin for Curiosity Lite theme.
 * Version: 1.0.0
 * Author: Webzakt
 * Author URI: http://www.webzakt.com
 */

class Curiosity_Elements {

    function __construct()
    {
    	define( 'CURIOSITY_ELEMENTS', '1.0' );

    	// Plugin folder path
    	if ( ! defined( 'CURIOSITY_ELEMENTS_PLUGIN_DIR' ) ) {
    		define( 'CURIOSITY_ELEMENTS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    	}

    	// Plugin folder URL
    	if ( ! defined( 'CURIOSITY_ELEMENTS_PLUGIN_URL' ) ) {
    		define( 'CURIOSITY_ELEMENTS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    	}
		
		function curiosity_elements_filter_plugin_awesome_extensions($locations) {
			$locations[ dirname(__FILE__) . '/extensions' ]
			=
			plugin_dir_url( __FILE__ ) . 'extensions';
		
			return $locations;
		}
		add_filter('fw_extensions_locations', 'curiosity_elements_filter_plugin_awesome_extensions');
	}

}
new Curiosity_Elements();

/*********Demos**************/
/**
 * @param FW_Ext_Backups_Demo[] $demos
 * @return FW_Ext_Backups_Demo[]
 */
function _curiosity_lite_lite_fw_ext_backups_demos($demos) {
    $demos_array = array(
        'curiosity-lite-demo' => array(
            'title' => __('Curiosity Lite', 'curiosity-elements'),
            'screenshot' => 'http://webzakt.com/demos/curiosity-lite/2.0.0/curiosity-lite-screenshot.png',
            'preview_link' => 'http://curiosity-lite.webzakt.com/',
        ),
    );

    $download_url = 'http://webzakt.com/demos/curiosity-lite/2.0.0/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', '_curiosity_lite_lite_fw_ext_backups_demos');