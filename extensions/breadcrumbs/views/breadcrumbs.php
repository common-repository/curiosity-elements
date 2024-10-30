<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Theme Settings
if ( function_exists( 'fw_get_db_customizer_option') ) {
    $crt_breadcrumbs_style = fw_get_db_customizer_option( 'crt_breadcrumbs_style');
	$crt_own_text_for_breadcrumbs = fw_get_db_customizer_option( 'crt_own_text_for_breadcrumbs');
	$crt_breadcrumbs_background = fw_get_db_customizer_option( 'crt_breadcrumbs_background');
} 
?>

<?php if ( ! empty( $items ) ) : ?>
<!-- CURIOSITY BREADCRUMB -->
<div id="crt-breadcrumbs"<?php if ($crt_breadcrumbs_background != '') { ?> style="background-image: url('<?php echo esc_url($crt_breadcrumbs_background['url']); ?>');"<?php } ?>>                
	<div class="crt-breadcrumbs-holder">
	<?php if ($crt_breadcrumbs_style == ('breadcrumbs_on')){ ?>
		<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
			<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
		<span class="last-item"><?php echo $items[ $i ]['name'] ?></span>
			<?php elseif ( $i == 0 ) : ?>
		<span class="first-item">
				<?php if( isset( $items[ $i ]['url'] ) ) : ?>
			<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
				<?php else : echo $items[ $i ]['name']; endif ?>
		<span><?php echo $separator ?></span>
			<?php else : ?>
		<span class="<?php echo( $i - 1 ) ?>-item">
					<?php if( isset( $items[ $i ]['url'] ) ) : ?>
			<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
					<?php else : echo $items[ $i ]['name']; endif ?>
		<span><?php echo $separator ?></span>
			<?php endif ?>
		<?php endfor ?>
	</div>
	<div class="top-news-slider">
		<div id="marquee" class="recent-marquee">
			<?php $recentPosts = new WP_Query();
                  $recentPosts->query('showposts=100');                
                   while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                   <a href="<?php the_permalink() ?>" rel="bookmark" class="recent-marquee-item"><?php the_title(); ?></a>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
	<?php } elseif ($crt_breadcrumbs_style == ('breadcrumbs_only')) { ?>
		<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
			<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
		<span class="last-item"><?php echo $items[ $i ]['name'] ?></span>
			<?php elseif ( $i == 0 ) : ?>
		<span class="first-item">
				<?php if( isset( $items[ $i ]['url'] ) ) : ?>
			<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
				<?php else : echo $items[ $i ]['name']; endif ?>
		<span><?php echo $separator ?></span>
			<?php else : ?>
		<span class="<?php echo( $i - 1 ) ?>-item">
					<?php if( isset( $items[ $i ]['url'] ) ) : ?>
			<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
					<?php else : echo $items[ $i ]['name']; endif ?>
		<span><?php echo $separator ?></span>
			<?php endif ?>
		<?php endfor ?>
	<?php } elseif ($crt_breadcrumbs_style == ('breadcrumbs_text')) { ?>
		<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
			<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
		<span class="last-item"><?php echo $items[ $i ]['name'] ?></span>
			<?php elseif ( $i == 0 ) : ?>
		<span class="first-item">
				<?php if( isset( $items[ $i ]['url'] ) ) : ?>
			<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
				<?php else : echo $items[ $i ]['name']; endif ?>
		<span><?php echo $separator ?></span>
			<?php else : ?>
		<span class="<?php echo( $i - 1 ) ?>-item">
					<?php if( isset( $items[ $i ]['url'] ) ) : ?>
			<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
					<?php else : echo $items[ $i ]['name']; endif ?>
		<span><?php echo $separator ?></span>
			<?php endif ?>
		<?php endfor ?>
	</div>
    <div class="top-news-slider">
        <div id="marquee" class="recent-marquee">
            <span class="recent-marquee-item"><?php echo wp_kses_post($crt_own_text_for_breadcrumbs) ; ?></span> <span class="recent-marquee-item"><?php echo wp_kses_post($crt_own_text_for_breadcrumbs) ; ?></span>
        </div>
	<?php } ?>            
	</div>
</div>
<div class="clearfix"></div>
<!-- END CURIOSITY BREADCRUMB --> 
<?php endif ?>