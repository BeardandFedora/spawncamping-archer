<?php require('lib/inc/page-styling.php'); ?>	

<div id="<?php echo($frame_status); ?>" class="<?php echo($layout); ?><?php echo($frame_styling); ?>">

	<?php if($theme_frame_other == "1") { ?>		
		<?php if($theme_breadcrumbs_other == "0") { ?>
			<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
		<?php } else { ?>
			<div class="no-breadcrumbs"></div><div class="clear"></div>
		<?php } ?>		
	<?php } ?>

	<div id="main-content">
	
		<?php if($theme_frame_other == "0") { ?>
			<?php if($theme_breadcrumbs_other == "0") { ?>
				<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
			<?php } ?>
		<?php } ?>

		<h1 class="page-title">
		<?php if(is_search()) { ?>
			<?php echo $wp_query->found_posts; ?> <?php echo gp_search_results; ?> "<?php echo wp_specialchars($s); ?>"
		<?php } elseif(is_category()) { ?>
			<?php single_cat_title(); ?>
		<?php } elseif(is_tag()) { ?>
			<?php single_tag_title(); ?>
		<?php } elseif(is_author()) { ?>
			<?php wp_title(''); ?>'s Posts
		<?php } elseif(is_archive()) { ?>
			<?php echo gp_archives; ?> <?php wp_title(' / '); ?>			
		<?php } ?>
		</h1>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); 
		
		// Video Type
		$flv = strpos(get_post_meta($post->ID, 'ghostpool_custom_url', true),".flv");
		$mp4 = strpos(get_post_meta($post->ID, 'ghostpool_custom_url', true),".mp4");
		$mp3 = strpos(get_post_meta($post->ID, 'ghostpool_custom_url', true),".mp3");
		
		?>
		
			<div class="post<?php if($theme_preload == "1") { ?> preload<?php } ?>">
			
				<!--Begin Image-->
				<?php 
				
				$args = array('post_type' => 'attachment', 'post_mime_type' => 'image', 'post_parent' => $post->ID, 'numberposts' => 1, 'orderby' => menu_order, 'order' => ASC); $attachments = get_children($args); 
				
				if(get_post_meta($post->ID, 'ghostpool_thumbnail', true) OR $attachments = get_children($args)) { ?>
				
					<div class="post-thumbnail shadow-l" style="background-position: center <?php echo ($theme_image_height - 16); ?>px; width: <?php echo $theme_image_width; ?>px;">

						<?php if(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Image" OR get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Video") { ?>
							<a href="<?php if($flv == true OR $mp4 == true OR $mp3 == true) { ?>file=<?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?>&amp;image=<?php echo get_post_meta($post->ID, 'ghostpool_thumbnail', true); ?><?php } else { ?><?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?><?php } ?>" rel="prettyPhoto">
						<?php } else { ?>
							<a href="<?php if(get_post_meta($post->ID, 'ghostpool_custom_url', true)) { ?><?php echo get_post_meta($post->ID, 'ghostpool_custom_url', true); ?><?php } else { ?><?php the_permalink(); ?><?php } ?>">
						<?php } ?>
		
						<?php if(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Image") { ?><span class="hover-image" style="width: <?php echo $theme_image_width; ?>px; height: <?php echo $theme_image_height; ?>px;"></span><?php } elseif(get_post_meta($post->ID, 'ghostpool_lightbox_type', true) == "Video") { ?><span class="hover-video" style="width: <?php echo $theme_image_width; ?>px; height: <?php echo $theme_image_height; ?>px;"></span><?php } ?>
						
						<?php if(get_post_meta($post->ID, 'ghostpool_thumbnail', true)) { ?>
						
							<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo get_post_meta($post->ID, 'ghostpool_thumbnail', true); ?><?php if($theme_timthumb == "0") { ?>&amp;h=<?php echo $theme_image_height; ?>&amp;w=<?php echo $theme_image_width; ?>&amp;zc=1<?php } ?>" alt="" class="image reflection-s" />
										
						<?php } else { ?>
						
							<?php if ($attachments) { foreach ($attachments as $attachment) { ?>
								

								
							<?php }} ?>	
						
						<?php } ?>
						
						</a>
				
					</div>
					
					<div class="clear"></div>
				
				<?php } ?>
				<!--End Image-->
				
				<div class="post-text">
				
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<!--<div class="post-cats"><?php the_category(' / '); ?></div>-->
					

					
					<p><?php echo excerpt($theme_excerpt_length); ?> <?php if($theme_read_more == "0") { ?><a href="<?php the_permalink(); ?>"><?php echo gp_read_more; ?></a><?php } ?></p>	
										
				</div>
			
			</div>
			
			
			
		<?php endwhile; ?>
			
			<?php wp_pagenavi(); ?>		

		<?php else : ?>	
	
			<h4><?php echo gp_search_error; ?></h4>
		
			<div class="divider curved"></div>
			
			<h3><?php echo gp_search_site; ?></h3>
			<?php get_search_form(); ?>	
		
		<?php endif; ?>	

	</div>
		
	<?php if($theme_layout_other == "Fullwidth") {} else { ?><?php get_sidebar(); ?><?php } ?>
		
</div>