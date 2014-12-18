<?php

//*************************** Blog ***************************//

function ghostpool_blog($atts, $content = null) {
	extract(shortcode_atts(array(
		'images' => 'true',
		'cats' => '',
		'image_width' => '640',
		'image_height' => '250',
		'per_page' => '9',
		'orderby' => 'date',
		'order' => 'desc',
		'offset' => '0',
		'excerpt_length' => '50',
		'full_content' => 'false',
		'title' => 'true',
		'read_more' => 'true',
		'shadow' => 'none',
		'reflection' => 'none',
		'divider' => 'curved',
		'meta' => 'true',
		'pagination' => 'true',
		'preload' => 'false',
		'wrap' => 'false'
	),$atts));

	require(ghostpool_inc . 'options.php');
	
	// Order By
	if(esc_attr($orderby) == 'random') { 
	$orderby = "rand";
	} elseif(esc_attr($orderby) == 'title') { 
	$orderby = "title";
	} else {
	$orderby = "date";
	}
	
	// Order
	if(esc_attr($order) == 'asc') { 
	$order = "asc";
	} else {
	$order = "desc";
	}

	// Pagination	
	if (get_query_var('paged')) {
	$paged = get_query_var('paged');
	} elseif (get_query_var('page')) {
	$paged = get_query_var('page');
	} else {
	$paged = 1;
	}
	
	// Post Query	
	$args=array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'cat' => esc_attr($cats),
	'paged' => $paged,
	'caller_get_posts'=> 1,
	'orderby' => $orderby,
	'order' => $order,
	'posts_per_page' => esc_attr($per_page),
	'offset' => $offset
	);

	$featured_query = new wp_query($args); 
	
	ob_start(); ?>
	
	<!--Begin Blog Container-->
	<div class="blog">

	<?php while ($featured_query->have_posts()) : $featured_query->the_post(); global $wp_query, $paged, $post; $counter = $counter + 1; 
	
	// Video Type
	$flv = strpos(get_post_meta($post->ID, 'ghostpool_custom_url', true),".flv");
	$mp4 = strpos(get_post_meta($post->ID, 'ghostpool_custom_url', true),".mp4");
	$mp3 = strpos(get_post_meta($post->ID, 'ghostpool_custom_url', true),".mp3");
		
		?>
	
		<!--Begin Post-->
		<div class="post<?php if($preload == "true") { ?> preload<?php } ?><?php if(($theme_timthumb == "1" OR esc_attr($shadow) != "none") && esc_attr($reflection) == "none") { ?> no-padding<?php } ?>">
		
			<!--Begin Image-->
			<?php 
			
			$args = array('post_type' => 'attachment', 'post_mime_type' => 'image', 'post_parent' => $post->ID, 'numberposts' => 1, 'orderby' => menu_order, 'order' => ASC); $attachments = get_children($args); 
						
			if((get_post_meta($post->ID, 'ghostpool_thumbnail', true) OR $attachments = get_children($args)) && $images == "true") { ?>
			
				<div class="post-thumbnail <?php echo $shadow; ?> <?php if($wrap == "true") { ?>wrap<?php } ?>" style="background-position: center <?php echo ($image_height - 16); ?>px; width: <?php echo $image_width; ?>px;">

					<?php if(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Image" OR get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Video") { ?>
						<a href="<?php if($flv == true OR $mp4 == true OR $mp3 == true) { ?>file=<?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?>&amp;image=<?php echo get_post_meta($post->ID, 'ghostpool_thumbnail', true); ?><?php } else { ?><?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?><?php } ?>" rel="prettyPhoto">
					<?php } else { ?>
						<a href="<?php if(get_post_meta($post->ID, 'ghostpool_custom_url', true)) { ?><?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?><?php } else { ?><?php the_permalink(); ?><?php } ?>">
					<?php } ?>
	
					<?php if(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Image") { ?><span class="hover-image" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;"></span><?php } elseif(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Video") { ?><span class="hover-video" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;"></span><?php } ?>
					
					<?php if(get_post_meta($post->ID, 'ghostpool_thumbnail', true)) { ?>
					
						<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo gp_imagepath(get_post_meta($post->ID, 'ghostpool_thumbnail', true)); ?><?php if($theme_timthumb == "0") { ?>&amp;h=<?php echo $image_height; ?>&amp;w=<?php echo $image_width; ?>&amp;zc=1<?php } ?>" alt="" class="image <?php echo $reflection; ?>" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" />
									
					<?php } elseif($attachments) { foreach ($attachments as $attachment) { ?>
							
						<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo wp_get_attachment_url($attachment->ID); ?><?php if($theme_timthumb == "0") { ?>&amp;h=<?php echo $image_height; ?>&amp;w=<?php echo $image_width; ?>&amp;zc=1<?php } ?>" alt="" class="image <?php echo $reflection; ?>" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" />

					<?php }} ?>
					
					</a>
			
				</div>
				
				<?php if($wrap == "false") { ?><div class="clear"></div><?php } ?>
			
			<?php } ?>
			<!--End Image-->
			
			<div class="post-text">
			
				<?php if(esc_attr($title) == 'true') { ?><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php } ?>
				
				<?php if(esc_attr($meta) == "true") { ?>
				
					<div class="post-cats"><?php the_category(' / '); ?></div>

					<div class="post-meta"><?php echo gp_posted_by; ?> <?php the_author(); ?> <?php echo gp_on; ?> <?php the_time('d, F Y'); ?> <?php if('open' == $post->comment_status) { ?><?php echo gp_with_comments; ?> <?php comments_popup_link(gp_no_comments, gp_one_comment, gp_more_comments, 'comments-link', ''); ?><?php } ?></div>
										
				<?php } ?>
				
				<?php if($full_content == 'false') { ?>
				
					<?php if(esc_attr($excerpt_length) == '0') {} elseif(esc_attr($excerpt_length) != '0') { ?><p><?php echo excerpt($excerpt_length); ?> <?php if($read_more == "true") { ?><a href="<?php the_permalink(); ?>"><?php echo gp_read_more; ?> &rsaquo;&rsaquo;</a><?php } ?></p><?php } ?>
				
				<?php } else { global $more; $more = 0; ?>
				
					<?php the_content(); ?>
				
				<?php } ?>
									
			</div>
		
		</div>
		
		<?php if($divider == "curved") {?><div class="divider curved"></div><?php } elseif($divider == "line") { ?><div class="divider"></div><?php } elseif($divider == "top") { ?><div class="divider top"></div><?php } elseif($divider == "clear") { ?><div class="divider clear"></div><?php } ?>
		<!--End Post-->
	
	<?php endwhile; ?>
	
	</div>
	<!--End Blog Container-->

<?php

wp_reset_query();

$baseURL = get_permalink();

if($pagination == "true") { pagination($featured_query,$baseURL); }

$output_string = ob_get_contents();
ob_end_clean(); 

return $output_string;

}

add_shortcode("blog", "ghostpool_blog");

?>