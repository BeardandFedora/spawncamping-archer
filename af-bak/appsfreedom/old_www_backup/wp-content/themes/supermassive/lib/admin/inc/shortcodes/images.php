<?php

//*************************** Images ***************************//

function ghostpool_image($atts, $content = null) {
	extract(shortcode_atts(array(
		'url' => '#',
		'width' => '',
		'height' => '',
		'link' => '#',
		'align' => 'none',
		'top' => '',
		'left' => '',
		'bottom' => '',
		'right' => '',
		'mtop' => '0',
		'mleft' => '0',
		'mbottom' => '0',
		'mright' => '0',
		'alt' => '',
		'title' => '',
		'shadow' => 'none',
		'reflection' => 'none',
		'lightbox' => 'none',
		'zoom' => '0',
		'preload' => 'false',
	),$atts));

	require(ghostpool_inc . 'options.php');

	// Image Positioning
	if(esc_attr(esc_attr($top) OR esc_attr($bottom) OR esc_attr($left) OR esc_attr($right)) != '') {
	$position = "position: absolute;";
	}
	if(esc_attr($top) != '') {
	$top_position = 'top:'.$top.'px;';
	}
	if(esc_attr($bottom) != '') {
	$bottom_position = 'bottom:'.$bottom.'px;';
	}
	if(esc_attr($left) != '') {
	$left_position = 'left:'.$left.'px;';
	}
	if(esc_attr($right) != '') {
	$right_position = 'right:'.$right.'px;';
	}
	
	// Image Reflection
	if($shadow != "none" && $reflection == "none") {
	$image_padding = 'shadow-padding';
	}
	
	// Lightbox
	if(esc_attr($lightbox) == "image") {
	$lightbox = '<span class="hover-image" style="width: '.$width.'px; height: '.$height.'px;"></span>';
	$rel = "prettyPhoto[gallery]";
	} elseif(esc_attr($lightbox) == "video") {
	$lightbox = '<span class="hover-video" style="width: '.$width.'px; height: '.$height.'px;"></span>';
	$rel = "prettyPhoto[gallery]";
	} else {
	$lightbox = '';
	$rel = '';
	}

	// Video Type
	$flv = strpos($link,".flv");
	$mp4 = strpos($link,".mp4");
	$mp3 = strpos($link,".mp3");
		
	// Image Link
	if(esc_attr($link) != '#') {
	if($flv == true OR $mp4 == true OR $mp3 == true) {
	$link1 = '<a href="file='.$link.'&image='.$url.'" title="'.$title.'" rel="'.$rel.'[gallery]">';
	} else {
	$link1 = '<a href="'.$link.'" title="'.$title.'" rel="'.$rel.'[gallery]">';
	}
	$link2 = '</a>';
	}
				
	// Image & TimThumb
	if($theme_timthumb == "0" && ($width != "" && $height != "")) {			
	$image = get_bloginfo("template_directory").'/lib/scripts/timthumb.php?src='.$url.'&amp;h='.$height.'&amp;w='.$width.'&amp;zc='.$zoom;
	} else {
	$image = $url;	
	}

	// Image Preloader
 	if($preload == "true") {
 	$preload = 'preload';
	} else {
	$preload = '';
	}
 
	return '
	
	<div class="sc-image '.$shadow.' '.$align.' '.$preload.' '.$image_padding.'" style="background-position: center '.($height - 16).'px; '.$position.' '.$top_position.' '.$bottom_position.' '.$left_position.' '.$right_position.' margin: '.$mtop.'px '.$mright.'px '.$mbottom.'px '.$mleft.'px; width: '.$width.'px;">'.$link1.'
		
		'.$lightbox.'
		
		<img class="image '.$reflection.' '.$preload.'" src="'.$image.'" alt="'.$alt.'" style="width: '.$width.'px; height: '.$height.'px;" />'.$link2.'
		
	</div>
	
	';

}

add_shortcode("image", "ghostpool_image");

?>