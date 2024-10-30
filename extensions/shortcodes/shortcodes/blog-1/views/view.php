<?php if (!defined('FW')) die( 'Forbidden' );

$atts['category'] = trim($atts['category']);
if ($atts['number'] == '') $atts['number'] = 1000;
if ($atts['only_posts']['on_off'] == 'off') $atts['only_posts']['on']['posts'] = '';

$blog_template = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
	'orderby' => '' . esc_attr($atts['order_by']) . '',
    'order'    => '' . esc_attr($atts['order']) . '',
	'posts_per_page'	=>	'' . esc_attr($atts['number']) . '',
	'post__in' => $atts['only_posts']['on']['posts']
);

query_posts($blog_template);


?>
<div id="crt-blog-normal-content">
	<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
    <?php 
	$post_id = get_the_ID();
	$post_format = get_post_format();
	$excerpt = get_the_excerpt();
	if ( function_exists( 'fw_get_db_post_option') ) {  
		$crt_gallery_format = fw_get_db_post_option( $post_id, 'crt_gallery_format' ) ;
		$crt_video_format = fw_get_db_post_option( $post_id, 'crt_video_format' ) ;
		$crt_audio_format = fw_get_db_post_option( $post_id, 'crt_audio_format' ) ;	
		$crt_quote_format = fw_get_db_post_option( $post_id, 'crt_quote_format' ) ;
		$crt_quote_format_author = fw_get_db_post_option( $post_id, 'crt_quote_format_author' ) ;
		$crt_link_format = fw_get_db_post_option( $post_id, 'crt_link_format' ) ;	
		$unique_excerpt = fw_get_db_post_option( $post_id, 'crt_post_excerpt' ) ;
		if ($unique_excerpt != '') $excerpt = $unique_excerpt;
	}
	?> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="crt-article-container">
			<?php if ($post_format == 'quote') { ?>
            <div class="entry-content">
                <div class="crt-blockquote-2-holder">
                    <div class="crt-blockquote-2">
                        <?php if( !empty ($crt_quote_format)){ ?>
                        <div class="crt-blockquote-2-content"><?php echo $crt_quote_format; ?></div>
                        <?php } ?>
                        <?php if( !empty ($crt_quote_format_author)){ ?>
                        <h3 class="crt-blockquote-2-author"><?php echo $crt_quote_format_author; ?></h3>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
                </div>	
            </div>
            <div class="clearfix"></div>
            <?php } else { ?>
            <div class="blog-entry">
                <div class="entry-image">
                	<?php if (($post_format == 'audio') && (!empty ($crt_audio_format))) { ?>
                    	<div class="iframe-holder"><?php echo $crt_audio_format; ?></div>
                    <?php } elseif (($post_format == 'video') && (!empty ($crt_video_format))) { ?>
                    	<div class="iframe-holder"><?php echo $crt_video_format; ?></div>
                    <?php } elseif (($post_format == 'gallery') && (!empty ($crt_gallery_format))) { ?>
                    	<div class="postimg">
                            <div id="postgallery-<?php echo get_the_ID() ; ?>" class="flexslider">
                                <ul class="slides">
                                    <?php foreach ( $crt_gallery_format as $attachment):  ?>
                                    <li class="slide">
                                        <div class="crt-spih">
                                            <div class="single-post-image" style="background-image: url(<?php echo esc_url ( $attachment['url'] );?>)"></div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?> 
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
					<div class="crt-spih">
                    	<?php the_post_thumbnail( 'curiosity-entry-image' ) ; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="crt-entry-texts">
                    <div class="crt-psth">
                        <?php if(isset($atts['infos']['categories'])){ ?>
                        <p class="crt-ps-categories"><?php the_category(', '); ?></p>
                        <?php } ?>
                        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'curiosity-elements' ), the_title_attribute( 'echo=0' ) ); ?>"><h3 class="crt-post-single-title"><?php echo the_title(); ?></h3></a>
                    </div>
                    <div class="crt-entry-infos">
                        <div class="crt-entry-utility">
                            <div class="crt-post-infos">
                                <?php if(isset($atts['infos']['author'])){ ?>
                                <div class="user"><?php echo __( 'Written by ', 'curiosity-elements' );?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author();?></a></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['date'])){ ?>
                                <div class="date"><?php echo __( 'on ', 'curiosity-elements' );?> <?php the_time(get_option('date_format')); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['comments'])){ ?>
                                <div class="comment">
                                    <?php 
                                      comments_popup_link( 
                                      __( 'Leave a comment', 'curiosity-elements' ), 
                                      __( '1 Comment', 'curiosity-elements' ), 
                                      __( '% Comment', 'curiosity-elements' ),
                                      __( 'Comment Closed', 'curiosity-elements' )
                                      );
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
						</div>  
					</div>	
                    <div class="entry-content">
                            <p class="crt-entry-excerpt"><?php echo wp_kses_post($excerpt); ?></p>
                        <a class="crt-psth-a" href="<?php if (($post_format == 'link') && (!empty ($crt_link_format))) { echo esc_url($crt_link_format); } else { the_permalink(); }?>"><?php curiosity_lite_read_more_text(); ?></a>
                    </div>
                    <?php if(isset($atts['infos']['tags'])){ ?>
                    <div class="crt-entry-tag">
						<?php
                        $posttags = get_the_tags();
                        if($posttags){
                        ?>
                        <span class="crt-tag-text"><?php _e('Tags:','curiosity-elements'); ?></span>
                        <?php 
                        the_tags('<div class="crt-tag-items"><span>','</span><span>','</span></div>'); 
                        } 
                        ?>
                    </div>
                    <?php } ?> 
            	</div>
            </div>
            <div class="clearfix"></div>
            <?php } ?>
        </div>
	</article>
	<?php endwhile; // End the loop. Whew. ?>
    
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>