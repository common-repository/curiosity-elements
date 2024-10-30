<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 

if ( function_exists( 'fw_get_db_customizer_option') ) {
	$general_color_2 = fw_get_db_customizer_option( 'general_color_2');		
	if ( $general_color_2 =='' ) $general_color_2 = '#222222';		
} else {	
	$general_color_2 = '#222222';	
}	

$atts['color'] = trim($atts['color']);
if ( $atts['color'] == '' ) $atts['color'] = $general_color_2 ;

if ( $atts['icon'] =='' ) $atts['icon'] = 'fa fa-curiosity-fire' ;

if ( $atts['size'] != 'small' ) $atts['size'] = 'normal' ;
?>

<div class="clearfix"></div>
<div class="crt-separator-<?php echo esc_attr($atts['size']); ?>" style="color: <?php echo esc_attr($atts['color']); ?>; margin: <?php echo esc_attr($atts['margin']); ?>px 0;">
    <div class="crt-separator-icon-holder">
        <i class="crt-separator-icon <?php echo esc_attr($atts['icon']); ?>"></i>
    </div>
</div>
<div class="clearfix"></div>