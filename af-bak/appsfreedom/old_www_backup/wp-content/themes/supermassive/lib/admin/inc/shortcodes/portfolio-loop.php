<?php if($type == 'grid') { ?><div style="height: <?php echo $col_height; ?>px;"><?php } ?>

	<!--Begin Image-->
	
	<?php
	
	$args = array('post_type' => 'attachment', 'post_mime_type' => 'image', 'post_parent' => $post->ID, 'numberposts' => 1, 'orderby' => menu_order, 'order' => ASC); $attachments = get_children($args); 
	
	if(get_post_meta($post->ID, 'ghostpool_thumbnail', true) OR $attachments = get_children($args)) { ?>
		
		<div class="portfolio-thumbnail <?php echo $shadow; ?>" style="background-position: center <?php echo ($image_height - 16); ?>px;">
		
			<?php if(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Image" OR get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Video") { ?>
				<a href="<?php if($flv == true OR $mp4 == true OR $mp3 == true) { ?>file=<?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?>&amp;image=<?php echo get_post_meta($post->ID, 'ghostpool_thumbnail', true); ?><?php } else { ?><?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?><?php } ?>" rel="prettyPhoto[gallery<?php the_ID(); ?>]">
			<?php } else { ?>
				<a href="<?php if(get_post_meta($post->ID, 'ghostpool_custom_url', true)) { ?><?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?><?php } else { ?><?php the_permalink(); ?><?php } ?>">
			<?php } ?>
					
			<?php if(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Image") { ?><span class="hover-image" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;"></span><?php } elseif(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Video") { ?><span class="hover-video" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;"></span><?php } ?>
			
			<?php if(get_post_meta($post->ID, 'ghostpool_thumbnail', true)) { ?>
			
				<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo get_post_meta($post->ID, 'ghostpool_thumbnail', true); ?><?php if($theme_timthumb == "0") { ?>&amp;h=<?php echo $image_height; ?>&amp;w=<?php echo $image_width; ?>&amp;zc=1<?php } ?>" class="image <?php echo $reflection; ?>" alt="" />
							
			<?php } elseif($attachments) { foreach ($attachments as $attachment) { ?>
					
				<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo wp_get_attachment_url($attachment->ID); ?><?php if($theme_timthumb == "0") { ?>&amp;h=<?php echo $image_height; ?>&amp;w=<?php echo $image_width; ?>&amp;zc=1<?php } ?>" class="image <?php echo $reflection; ?>" alt="" />

			<?php }} ?>
			
			</a>
	
		</div>
		
		<?php if($type != 'large') { ?><div class="clear"></div><?php } ?>
	
	<?php } ?>
	
	<!--End Image-->

	<?php $args = array('post_type' => 'attachment', 'post_parent' => $post->ID, 'numberposts' => -1, 'orderby' => menu_order, 'order' => ASC); $attachments = get_children($args); if($attachments) { foreach ($attachments as $attachment) { ?><a href="<?php if(get_post_meta($attachment->ID, '_ghostpool_gallery_video_url', true)) { echo get_post_meta($attachment->ID, '_ghostpool_gallery_video_url', true); } else { echo wp_get_attachment_url($attachment->ID); } ?>" rel="prettyPhoto[gallery<?php the_ID(); ?>]" style="display: none"></a><?php }} ?>
	
	<?php if(esc_attr($title) == 'true') { ?><h2><?php if($title_link == "true") { ?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?><?php if($title_link == "true") { ?></a><?php } ?>></h2><?php } ?>
	
	<?php if(esc_attr($excerpt_length) == '0') {} elseif(esc_attr($excerpt_length) != '0') { ?>
		<div class="portfolio-text">
			<p><?php echo excerpt($excerpt_length); ?> <?php if($read_more == "true") { ?><a href="<?php the_permalink(); ?>"><?php echo gp_read_more; ?> &rsaquo;&rsaquo;</a><?php } ?>
		</div>
	<?php } ?>

<?php if($type == 'grid') { ?></div><?php } ?>