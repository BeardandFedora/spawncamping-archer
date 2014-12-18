<?php

//*************************** Videos ***************************//

function ghostpool_video($atts, $content = null) {
    extract(shortcode_atts(array(
		'name' => '#',
        'url' => '#',
        'image' => '',
        'width' => '470',
        'height' => '320',
        'controlbar' => 'bottom',
        'autostart' => 'false',
        'icons' => 'true',
        'stretching' => 'fill',
        'align' => 'none',
        'skin' => ''.get_bloginfo("template_directory").'/lib/scripts/mediaplayer/fs39/fs39.xml',
        'html5_1' => '',
        'html5_2' => '',
        'priority' => 'flash'
    ), $atts));

	require(ghostpool_inc . 'options.php');
	
	// Remove spaces from video name
	$video_name = preg_replace('/[^a-zA-Z0-9]/', '', $name);

	// Video Type	
	$vimeo = strpos($url,"vimeo.com");
	
	// Hide HTML5 Video Icons
	if($icons == "false") { $html5_icons = "hide-icons"; }
	
	// Detect MSIE
	$MSIE = (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE') !== FALSE);
						
	$out .= '<div class="sc-video '.$align.' '.$html5_icons.'">';
						
		if($vimeo == false) {

			if(strpos($url,"youtube.com") && $priority == "flash") {
			
				$out .= '<div id="video-'.$video_name.'"></div>';
			
			} else {
									
				$out .= '<video id="video-'.$video_name.'" width="'.$width.'" height="'.$height.'" controls="controls">';
				
				if(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false OR strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) {
					$out .= '<source src="'.$html5_1.'" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />
					<source src="'.$html5_1.'" type=\'video/webm; codecs="vp8, vorbis"\' />';
				} else {			
					$out .= '<source src="'.$html5_2.'" type=\'video/ogg; codecs="theora, vorbis"\' />';
				}
				
				$out .= '</video>';
				
			}	
			
			$out .= '<script>
				jwplayer("video-'.$video_name.'").setup({';
					if($MSIE OR $priority == "flash") { $out .= 'file: "'.$url.'",'; }
					if($theme_timthumb == '0') {						
						$out .= 'image: "'.get_bloginfo('template_directory') .'/lib/scripts/timthumb.php?src='.$image.'&h='.$height.'&w='.$width.'&zc=1",';
					} else {
						$out .= 'image: "'.$image.'",';
					}
					$out .= 'icons: "'.$icons.'",
					autostart: "'.$autostart.'",
					stretching: "'.$stretching.'",
					controlbar: "'.$controlbar.'",
					skin: "'.$skin.'",
					screencolor: "white",
					height: '.$height.',
					width: '.$width.',
					players: [';					
					if($priority == "html5") {
						$out .= '{type: "html5"}, {type: "flash", src: "'.get_bloginfo("template_directory").'/lib/scripts/mediaplayer/player.swf"}';
					} elseif($priority == "flash") {
						$out .= '{type: "flash", src: "'.get_bloginfo("template_directory").'/lib/scripts/mediaplayer/player.swf"}, { type: "html5" }';
					}
					$out .= ']
				});
			</script>';
		
		} else {
									
			if($autostart == "false") {
			$autostart = "0";
			} elseif($autostart == "true") {
			$autostart = "1";
			}
	
			$vimeoid = trim($url,'http://vimeo.com/');
	
			$out .= '<iframe src="http://player.vimeo.com/video/'.$vimeoid.'?byline=0&amp;portrait=0&amp;autoplay='.$autostart.'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
		
	}

	$out .= '</div>';
	
	return $out;

}

add_shortcode('video', 'ghostpool_video');

?>