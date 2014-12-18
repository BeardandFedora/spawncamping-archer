<?php

//*************************** Related Posts ***************************//

function ghostpool_related_posts($atts, $content = null) {
	extract(shortcode_atts(array(
        'limit' => '6',
        'id' => ''
    ), $atts));
	
	global $wp_query;
	$post->ID = $GLOBALS['post']->ID;

	if($id == '') {
	$id = $post->ID;
	} else {
	$id;
	}

	$tags = wp_get_post_tags($id);
	$tempQuery = $wp_query;
	
	if($tags) {
	$tag_ids = array();
	
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	
	$newQuery=array(
	'tag__in' => $tag_ids,
	'post__not_in' => array($id),
	'posts_per_page' => $limit,
	'orderby' => rand,
	'caller_get_posts' => 1);
	
	query_posts($newQuery);
	
	require(ghostpool_inc . 'options.php');
	
	ob_start(); ?>
	
		<div class="clear"></div>
		
		<div id="related-posts">
			
			<h3>Related Posts</h3>
			
			<?php while (have_posts()) : the_post(); $post->ID = $GLOBALS['post']->ID; ?>
			
				<div class="related-post">				
					
					<?php
					
					$args = array('post_type' => 'attachment', 'post_mime_type' => 'image', 'post_parent' => $post->ID, 'numberposts' => 1, 'orderby' => menu_order, 'order' => ASC);
				
					if((get_post_meta($post->ID, 'ghostpool_thumbnail', true) OR $attachments = get_children($args))) { ?>
					
						<div class="related-image"><a href="<?php the_permalink(); ?>">
							
							<?php if(get_post_meta($post->ID, 'ghostpool_thumbnail', true)) { ?>
							
								<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo get_post_meta($post->ID, 'ghostpool_thumbnail', true); ?><?php if($theme_timthumb == "0") { ?>&amp;h=55&amp;w=55&amp;zc=1<?php } ?>" alt="" />
					
							<?php } else { ?>
							
								<?php if($attachments) { foreach ($attachments as $attachment) { ?>
									
									<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo wp_get_attachment_url($attachment->ID); ?><?php if($theme_timthumb == "0") { ?>&amp;h=55&amp;w=55&amp;zc=1<?php } ?>" alt="" />
									
								<?php }} ?>	
							
							<?php } ?>
							
						</a></div>
					
					<?php } else { ?>
					
						<div class="related-image"></div>
						
					<?php } ?>
					
					<div class="related-text">
					
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					
					<div class="related-date"><?php echo gp_posted_on; ?> <?php the_time('d, F Y'); ?></div>
					
					</div>
					
					<div class="clear"></div>	
					<div class="divider"></div>
				
				</div>
				
			<?php endwhile; ?>
		
		</div>
		
		<div class="clear"></div>

<?php 

	$output_string = ob_get_contents();
	ob_end_clean(); 
	
	} wp_reset_query();
		
	return $output_string;

}

add_shortcode("related_posts", "ghostpool_related_posts");

?>