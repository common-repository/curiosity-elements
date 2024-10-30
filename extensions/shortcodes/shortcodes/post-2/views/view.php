<?php if (!defined('FW')) die( 'Forbidden' ); 

$atts['title'] = trim($atts['title']);
		
$postmiracle = array(
	'posts_per_page' => 1,
	'name' => '' . sanitize_title($atts['title']) . ''
);

$postmiracle = new WP_Query( $postmiracle ); 
while ($postmiracle->have_posts()) : $postmiracle->the_post(); 

$permalink = get_permalink();
$title = get_the_title() ;
$author = get_the_author();
$excerpt = substr(get_the_excerpt(), 0,210);
$post_id = get_the_ID();
$unique_excerpt = fw_get_db_post_option( $post_id, 'crt_post_excerpt' ) ;
if ($unique_excerpt != '') $excerpt = substr($unique_excerpt, 0,210);
$taglist = get_the_tag_list( '<span>', '</span><span> ', '</span>') ;
$category_list = get_the_category_list( __( ', ', 'curiosity-elements' ) );
$tag = get_the_tags();
?>
<div class="crt-post-sc-2 crt-post-sc-2-c2">
    <div class="crt-post-2-content">
        <div class="entry-elements">
            <span class="crt-category-list"><?php echo wp_kses_post($category_list); ?></span>
        </div>
        <h4 class="entry-title"><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h4>
        <p class="entry-meta"><span class="post-author"><?php echo esc_html($author); ?></span></p>
        <div class="clearfix"></div>
        <?php if (has_post_thumbnail( $postmiracle->ID ) ){  
        $image = wp_get_attachment_url( get_post_thumbnail_id($postmiracle->ID), 'medium' ) ; ?> 
        <div class="small-thumb-holder">
            <div class="small-thumb-overlay">
                <a href="<?php echo esc_url($permalink); ?>">    
                    <div class="small-thumb" style="background-image: url(<?php echo esc_url($image); ?>)"></div>
                </a>
            </div>
        </div>
        <?php } ?>
        <div class="entry-content">
            <p class="crt-post-excerpt"><?php echo wp_kses_post($excerpt); ?>... </p>        
            <div class="clearfix"></div>
            <a class="crt-psth-a" href="<?php echo esc_url($permalink); ?>"><?php curiosity_lite_read_more_text(); ?></a>
            <div class="clearfix"></div>
            <?php if (! $tag) { } else { ?>
            <div class="crt-post-tags"><?php echo wp_kses_post($taglist); ?></div>
            <?php } ?> 
        </div>
    </div>
</div>
<?php 							  
endwhile;
wp_reset_query(); ?>