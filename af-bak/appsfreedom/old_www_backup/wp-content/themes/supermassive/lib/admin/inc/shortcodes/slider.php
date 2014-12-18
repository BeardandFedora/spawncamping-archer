<?php 

//*************************** Slider ***************************//

function ghostpool_slider($atts, $content = null) {
    extract(shortcode_atts(array(
		'name' => '#',
        'cat' => '',
        'slides' => '-1',
        'effect' => 'fade',
        'timeout' => '6',
        'nav' => '1',
        'arrows' => 'true',
        'width' => '#',
        'height' => '#',
        'shadow' => 'none',
        'align' => 'none',
        'top' => '0',
        'left' => '0',
        'right' => '0',
        'bottom' => '0'
    ), $atts));

	require(ghostpool_inc . 'options.php');
		
	// Remove spaces from slider name
	$slider_name = preg_replace('/[^a-zA-Z0-9]/', '', $name);

	// Slider Query	
	$args=array(
	'post_type' => 'slide',
	'post_status' => 'publish',
	'slide_categories' => $cat,
	'paged' => $paged,
	'caller_get_posts' => 1,
	'posts_per_page' => $slides,
	'order' => ASC,
	'orderby' => 'meta_value',
	'meta_key' => ghostpool_slide_order
	);

	$featured_query = new wp_query($args);
	
	ob_start(); ?>
	
	<?php if ($featured_query->have_posts()) : ?>
	
	<!--Begin Slider Wrapper-->
	<div class="slider-wrapper <?php echo $align; ?> <?php echo $shadow; ?> <?php if($shadow != "none") { if($nav == "1") { ?>nav-padding<?php } else { ?>padding<?php }} ?>" style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; margin: <?php echo $top; ?>px <?php echo $right; ?>px <?php echo $bottom; ?>px <?php echo $left; ?>px;">
		
		<!--Begin Slider Arrows-->
		<?php if(($arrows) == "true") { $slider_arrow_position = ($height - 56)/2 ;?>			
			<div id="<?php echo $slider_name; ?>-prev" class="slide-prev" style="top: <?php echo $slider_arrow_position; ?>px;"></div>
			<div id="<?php echo $slider_name; ?>-next" class="slide-next" style="top: <?php echo $slider_arrow_position; ?>px;"></div>
		<?php } else {} ?>
		<!--End Slider Arrows-->
			
		<!--Begin Slider-->
		<div id="<?php echo $slider_name; ?>" class="slider">
			
			<?php while ($featured_query->have_posts()) : $featured_query->the_post(); global $wp_query; $post->ID = $GLOBALS['post']->ID; $slide_counter++; ?>
		
				<!--Begin Slide-->
				<div class="slide" style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px;">

					<?php if(!get_post_meta($post->ID, 'ghostpool_slide_image', true) && !get_post_meta($post->ID, 'ghostpool_slide_video', true)) { ?>

						<!--Begin Custom Content-->						

						<div class="custom-slide" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px; background-color: <?php echo get_post_meta($post->ID, 'ghostpool_slide_bg_color', true); ?>; background-image: url(<?php echo get_post_meta($post->ID, 'ghostpool_slide_bg_image', true); ?>); background-repeat: <?php if(get_post_meta($post->ID, 'ghostpool_slide_bg_repeat', true) == "Repeat Horizontally") { ?>repeat-x<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_bg_repeat', true) == "Repeat Vertically") { ?>repeat-y<?php } else {} ?>;"><?php do_shortcode(the_content()); ?></div>
				
						<!--End Custom Content-->
				
					<?php } else { ?>
						
						<!--Begin Fixed Content-->
						
						<?php

						// Default Image Width
						$image_width = $width;
						
						// Caption Type
						if(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Left Frame") {
						$caption_type = "caption-left";
						} elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Right Frame") {
						$caption_type = "caption-right";
						} elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Top Left Overlay") {
						$caption_type = "caption-topleft";
						} elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Top Right Overlay") {
						$caption_type = "caption-topright";
						} elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Bottom Left Overlay") {
						$caption_type = "caption-bottomleft ";
						} elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Bottom Right Overlay") {
						$caption_type = "caption-bottomright";
						}
					
						if(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Left Frame" OR get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) == "Right Frame") { 
						
						// Frame Dimensions
						$image_width = round($width/1.5);
						$frame_width_text = $width - $image_width - 40;
						$frame_height = $height - 40;
						
						?>
						
							<!--Begin Caption Frame-->
							<div class="caption-frame <?php echo $caption_type; ?> <?php if(get_post_meta($post->ID, 'ghostpool_slide_caption_style', true) == "Light") { ?>caption-light<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_style', true) == "Dark") { ?>caption-dark<?php } ?>" style="width: <?php echo $frame_width_text; ?>px; height: <?php echo $frame_height; ?>px;"><?php if(!get_post_meta($post->ID, 'ghostpool_hide_slide_title', true)) { ?><h2><?php the_title(); ?></h2><?php } ?><?php do_shortcode(the_content()); ?></div>
							<!--End Caption Frame-->
						
						<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_type', true) != "None") { ?>
						
							<!--Begin Caption Overlay-->
							<div class="caption-overlay <?php echo $caption_type; ?> <?php if(get_post_meta($post->ID, 'ghostpool_slide_caption_style', true) == "Light") { ?>caption-light<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_caption_style', true) == "Dark") { ?>caption-dark<?php } ?> <?php if(get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Lightbox Image" OR get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Lightbox Video") { ?>lightbox<?php } ?>"><?php if(!get_post_meta($post->ID, 'ghostpool_hide_slide_title', true)) { ?><h2><?php the_title(); ?></h2><?php } ?><?php do_shortcode(the_content()); ?></div>
							<!--End Caption Overlay-->
							
						<?php } ?>
						
						<!--Begin Video-->
						
						<?php if(get_post_meta($post->ID, 'ghostpool_slide_video', true) OR get_post_meta($post->ID, 'ghostpool_webm_mp4_slide_video', true) OR get_post_meta($post->ID, 'ghostpool_ogg_slide_video', true)) {
						
						// Detect MSIE
						$MSIE = (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE') !== FALSE);
						
						?>
				
							<div class="slide-video" style="width: <?php echo $image_width; ?>px; height: <?php echo $height; ?>px;">
							
								<?php
								
								// Detect Vimeo
								$vimeo = strpos(get_post_meta($post->ID, 'ghostpool_slide_video', true),"vimeo.com");
								$vimeoid = trim(get_post_meta($post->ID, 'ghostpool_slide_video', true),'http://vimeo.com/'); 
															
								if($vimeo == true) { // Vimeo ?>
			
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="<?php echo $image_width; ?>" height="<?php echo $height; ?>">
										<param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=<?php echo $vimeoid; ?>&amp;autoplay=<?php if($MSIE && $slide_counter != "1") { ?>0<?php } else { ?><?php if(get_post_meta($post->ID, 'ghostpool_slide_autostart_video', true)) { ?>1<?php } else { ?>0<?php } ?><?php } ?>" />
										<param name="wmode" value="transparent" />
										<param name="allowfullscreen" value="true" />
										<param name="allowscriptacess" value="always" />
										<!--[if !IE]>-->                
										<object type="application/x-shockwave-flash" data="http://vimeo.com/moogaloop.swf?clip_id=<?php echo $vimeoid; ?>&amp;autoplay=<?php if($MSIE && $slide_counter != "1") { ?>0<?php } else { ?><?php if(get_post_meta($post->ID, 'ghostpool_slide_autostart_video', true)) { ?>1<?php } else { ?>0<?php } ?><?php } ?>" width="<?php echo $image_width; ?>" height="<?php echo $height; ?>">
										<param name="wmode" value="transparent" />
										<param name="allowfullscreen" value="true" />
										<param name="allowscriptacess" value="always" />				
										<!--<![endif]-->
											<iframe src="http://player.vimeo.com/video/<?php echo $vimeoid; ?>?byline=0&amp;portrait=0&amp;autoplay=0" width="<?php echo $image_width; ?>" height="<?php echo $height; ?>" frameborder="0"></iframe>
										<!--[if !IE]>-->
										</object>
										<!--<![endif]-->
									</object>

								
								<?php } else { // JW Player ?>
								
									<?php if((strpos(get_post_meta($post->ID, 'ghostpool_slide_video', true),"youtube.com") && get_post_meta($post->ID, 'ghostpool_slide_video_priority', true) == "Flash")) { ?>
									
										<div id="<?php echo $slider_name; ?>-video-<?php the_ID(); ?>"></div>

									<?php } else { ?>
									
										<video id="<?php echo $slider_name; ?>-video-<?php the_ID(); ?>" width="<?php echo $image_width; ?>" height="<?php echo $height; ?>" controls="controls" preload>
										
											<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false OR strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) { ?>
												<source src="<?php echo get_post_meta($post->ID, 'ghostpool_webm_mp4_slide_video', true); ?>" type="video/mp4" />
												<source src="<?php echo get_post_meta($post->ID, 'ghostpool_webm_mp4_slide_video', true); ?>" type="video/webm" />
											<?php } else { ?>	
												<source src="<?php echo get_post_meta($post->ID, 'ghostpool_ogg_slide_video', true); ?>" type="video/ogg" />
											<?php } ?>
											
										</video>
									
									<?php } ?>
									
									<script>
									
									//<![CDATA[
									
										jwplayer("<?php echo $slider_name; ?>-video-<?php the_ID(); ?>").setup({
											<?php if($MSIE OR get_post_meta($post->ID, 'ghostpool_slide_video_priority', true) == "Flash") { ?>file: "<?php echo get_post_meta($post->ID, 'ghostpool_slide_video', true); ?>",<?php } ?>
											image: "<?php if($theme_timthumb == '0') { ?><?php bloginfo('template_directory') ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo get_post_meta($post->ID, 'ghostpool_slide_image', true); ?><?php if($theme_timthumb == '0') { ?>&h=<?php echo $height; ?>&w=<?php echo $image_width; ?>&zc=<?php if(get_post_meta($post->ID, 'ghostpool_slide_zoom', true)) { ?>0<?php } else { ?>1<?php } ?><?php } ?>",
											icons: "true",
											autostart: "<?php if($MSIE && $slide_counter != '1') { ?>false<?php } else {?><?php if(get_post_meta($post->ID, 'ghostpool_slide_autostart_video', true)) { ?>true<?php } else { ?>false<?php } ?><?php } ?>",
											controlbar: "<?php if(get_post_meta($post->ID, 'ghostpool_slide_video_controls', true) == 'Over') { ?>over<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_video_controls', true) == 'Bottom') { ?>bottom<?php } else { ?>none<?php } ?>",
											screencolor: "black",	
											height: <?php echo $height; ?>,
											width: <?php echo $image_width; ?>,
											wmode: "transparent",
											skin: "<?php bloginfo('template_directory'); ?>/lib/scripts/mediaplayer/fs39/fs39.xml",
											flashplayer: "<?php bloginfo("template_directory"); ?>/lib/scripts/mediaplayer/player.swf"									
										});
										
										//]]>
										
									</script>
								
								<?php } ?>
	
							</div>
							
							<!--End Video-->
	
						<?php } else { ?>
						
							<!--Begin Image-->
	
							<?php if(get_post_meta($post->ID, 'ghostpool_slide_url', true)) { ?>
	
								<?php if(get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Page URL") { ?>
									
									<a href="<?php echo get_post_meta($post->ID, 'ghostpool_slide_url', true); ?>">
						
								<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Lightbox Image") { ?>					
									
									<a href="<?php echo get_post_meta($post->ID, 'ghostpool_slide_url', true); ?>" rel="prettyPhoto">
									
								<?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Lightbox Video") { ?>	
									
									<a href="file=<?php echo get_post_meta($post->ID, 'ghostpool_slide_url', true); ?>&image=<?php echo get_post_meta($post->ID, 'ghostpool_slide_image', true); ?>" rel="prettyPhoto">
								
								<?php } ?>
							
							<?php } ?>	
							
								<?php if(get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Lightbox Image") { ?><span class="hover-image" style="width: <?php echo $image_width; ?>px; height: <?php echo $height; ?>px;"></span><?php } elseif(get_post_meta($post->ID, 'ghostpool_slide_link_type', true) == "Lightbox Video") { ?><span class="hover-video" style="width: <?php echo $image_width; ?>px; height: <?php echo $height; ?>px;"></span><?php } ?>
								
								<img src="<?php if($theme_timthumb == "0") { ?><?php bloginfo('template_directory'); ?>/lib/scripts/timthumb.php?src=<?php } ?><?php echo get_post_meta($post->ID, 'ghostpool_slide_image', true); ?><?php if($theme_timthumb == "0") { ?>&amp;h=<?php echo $height; ?>&amp;w=<?php echo $image_width; ?>&amp;zc=<?php if(get_post_meta($post->ID, 'ghostpool_slide_zoom', true)) { ?>0<?php } else { ?>1<?php } ?><?php } ?>" class="<?php if(get_post_meta($post->ID, 'ghostpool_slide_reflection', true)) { ?>reflection-m<?php } ?> <?php echo $caption_type; ?> slider-image" alt="" />
													
							<?php if(get_post_meta($post->ID, 'ghostpool_slide_url', true)) { ?></a><?php } ?>
						
							<!--End Image-->
						
						<?php } ?>			
					
						<!--End Fixed Content-->
						
					<?php } ?>
	
				</div>
				<!--End Slide-->
			
				<?php $meta_timeout = get_post_meta($post->ID, 'ghostpool_slide_timeout', true);
				if($meta_timeout) {
				$timeout_array = $timeout_array . $meta_timeout .","; 
				} else {
				$timeout_array = $timeout_array . $timeout.",";
				} ?>         

			<?php endwhile; ?>
		
			</div>
			<!--End Slider-->

			<!--Begin Slider Nav-->
			<?php if($nav != "0") { ?>
				
				<div id="<?php echo $slider_name; ?>-slider-nav" class="slider-nav-wrapper <?php if($nav == "1") { ?>nav-type-1<?php } elseif($nav == "2") { ?>nav-type-2<?php } else {} ?>">
				
					<span class="slider-nav">
						
					<?php while ($featured_query->have_posts()) : $featured_query->the_post(); global $wp_query; $post->ID = $GLOBALS['post']->ID; ?>
						
						<span class="slider-button"></span>
						
					<?php endwhile; wp_reset_query(); ?>
										
					</span>
					
				</div>
			
			<?php } ?>
			<!--End Slider Nav-->
		
		</div>
		<!--End Slider Wrapper-->

	<?php else : ?>
		
		<div class="columns one last separate"><div>Opps, you haven't set your slider up correctly. Make sure you have created some slides from Slides > Add New and slide categories from Slides > Slide Categories. When using the slider shortcode make sure you either specify ONE category or leave it blank e.g. <strong>[slider cat="slider-category"]</strong>. You must add the slug name of the category e.g. slider-category and NOT the category ID.</div></div>
		
	<?php endif; wp_reset_query(); ?>
		
	<script>
	jQuery(document).ready(function(){
		
		jQuery("#<?php echo $slider_name; ?>") 
		.cycle({ 
			fx: "<?php echo $effect; ?>",
			<?php if($timeout == "0") { ?>timeout: <?php echo $timeout; ?><?php } else { ?>timeoutFn: slideTimeout<?php echo $slider_name; ?><?php } ?>,
			speed: 1000,
			pause: 1,
			cleartype: true,
			cleartypeNoBg: true,			
			prev: "#<?php echo $slider_name; ?>-prev", 
			next: "#<?php echo $slider_name; ?>-next",
			pager: "#<?php echo $slider_name; ?>-slider-nav .slider-nav",
			pagerAnchorBuilder: function(idx, slide) {return "#<?php echo $slider_name; ?>-slider-nav .slider-nav span:eq(" + idx + ")";}  
		});
		
		jQuery("#<?php echo $slider_name; ?>-slider-nav .slider-button").click(function() { 
			jQuery("#<?php echo $slider_name; ?>").cycle("pause"); 
		});
		
	});
	
	// Timeouts per slide (in seconds) 
	var posttimeouts<?php echo $slider_name; ?> = [<?php echo $timeout_array; ?>]; 
	function slideTimeout<?php echo $slider_name; ?>(currElement, nextElement, opts, isForward) { 
	var index = opts.currSlide; 
	return posttimeouts<?php echo $slider_name; ?>[index] * 1000; 
	} 
	
	</script>
	
<?php

$output_string = ob_get_contents();
ob_end_clean(); 

return $output_string;

}
add_shortcode('slider', 'ghostpool_slider');

?>