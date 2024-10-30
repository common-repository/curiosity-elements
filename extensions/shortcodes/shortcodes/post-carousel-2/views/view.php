<?php if (!defined('FW')) die( 'Forbidden' );

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '1'  && $atts['column'] != '2' && $atts['column'] != '4' ) $atts['column'] = '3';
$lesscolumn = $atts['column'];
if ( $atts['column']==4 ) $lesscolumn = 3;

$atts['category'] = trim($atts['category']);

$random_carousel_2_number = rand(1000,9999);
?>
<div id="crt-owl-news-2-h">
	<div id="crt-owl-news-2" class="owl-carousel carousel owl row crt-owl-news-2-<?php echo esc_attr($random_carousel_2_number); ?> crt-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> crt-owl-navigation-<?php echo esc_attr($atts['navigation']); ?>">
	<?php 
	$slider = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
    'order'    => 'DESC',
	'posts_per_page'	=>	1000,);
    $slider = new WP_Query( $slider ); 
	
	$postcount=1;
	
    while ($slider->have_posts()) : $slider->the_post(); 
    
	if( ($postcount % 2) == 0 ) $post_class = 'crt-post-sc-2-c2';
    else $post_class = 'crt-post-sc-2-c1';
		
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
        <div class="crt-post-sc-2 <?php echo esc_attr($post_class); ?>">
        	<div class="crt-post-2-content">
                <div class="entry-elements">
                    <span class="crt-category-list"><?php echo wp_kses_post($category_list); ?></span>
                </div>
                <h4 class="entry-title"><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h4>
                <p class="entry-meta"><span class="post-author"><?php echo esc_html($author); ?></span></p>
                <div class="clearfix"></div>
                <?php if (has_post_thumbnail( $slider->ID ) ){  
                $image = wp_get_attachment_url( get_post_thumbnail_id($slider->ID), 'medium' ) ; ?> 
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
	<?php $postcount++; ?> 
	<?php endwhile; ?> 
    </div>
    <div class="clearfix"></div> 
</div>
<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".crt-owl-news-2-<?php echo esc_attr($random_carousel_2_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1170,<?php echo esc_attr($lesscolumn); ?>],
		  itemsDesktopSmall : [900,1], 
		  itemsTablet: [600,1], 
		  itemsMobile : [400,1],
		  <?php if ( $atts['delay'] != 'false' && $atts['delay'] != '') { ?> 			  
		  autoPlay : <?php echo esc_attr($atts['delay']); ?>000,
		  <?php } else { ?>
		  autoPlay : false,
		  <?php } ?>		
		  });
		});
	 });
</script>
<?php wp_reset_query(); ?>	