<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<div class="crt-heading crt-heading-holder-h<?php echo esc_attr($atts['h']); ?><?php if ($atts['allow_icon']['on_off'] == 'on') { ?> crt-heading-with-icon<?php } ?>" style="text-align: <?php echo esc_attr($atts['align']); ?>;<?php if ($atts['color'] != '') { ?> color:<?php echo esc_attr($atts['color']); ?>;<?php } ?><?php if ($atts['fw_border'] != '') { ?> border-bottom: <?php echo esc_attr($atts['border']); ?>px solid <?php echo esc_attr($atts['fw_border']); ?>;<?php } ?>">
    <div class="crt-heading-holder"<?php if (($atts['fw_border'] != '') && ($atts['border'] != 0)){ ?> style="margin-bottom: -<?php echo esc_attr($atts['border']); ?>px;"<?php } ?>>
        <h<?php echo esc_attr($atts['h']); ?> class="h crt-heading-font-<?php echo esc_attr($atts['font_style']); ?>"<?php if ($atts['border'] != 0) { ?> style="border-bottom: <?php echo esc_attr($atts['border']); ?>px solid; padding-bottom: <?php echo esc_attr($atts['border']); ?>px;"<?php } ?>><?php if ($atts['allow_icon']['on_off'] == 'on') { ?><i class="crt-heading-icon crt-heading-icon-left <?php echo esc_attr($atts['allow_icon']['on']['icon']); ?>"></i><?php } ?><?php echo esc_html($atts['content']); ?><?php if ($atts['allow_icon']['on_off'] == 'on') { ?><i class="crt-heading-icon crt-heading-icon-right <?php echo esc_attr($atts['allow_icon']['on']['icon']); ?>"></i><?php } ?></h<?php echo esc_attr($atts['h']); ?>>
    </div>
</div>