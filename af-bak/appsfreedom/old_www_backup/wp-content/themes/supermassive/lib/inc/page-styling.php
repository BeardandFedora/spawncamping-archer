<?php 

/*************************** Categories, Archives etc. ***************************/

if(!is_singular() or is_attachment()) {
	
	// Layout
	if($theme_layout_other == "Sidebar Left") { $layout = "frame-sb-left";
	} elseif($theme_layout_other == "Fullwidth") { $layout = "frame-fullwidth";
	} else { $layout = "frame-sb-right"; }

	// Frame
	if($theme_frame_other == "1") { $frame_status = "no-frame";
	} else { $frame_status = "frame"; }


/*************************** Posts/Pages ***************************/

} else {

	// Layout
	if(get_post_meta($post->ID, 'ghostpool_layout_individual', true) == "Sidebar Right") { $layout = "frame-sb-right";
	
	} elseif(get_post_meta($post->ID, 'ghostpool_layout_individual', true) == "Sidebar Left") { $layout = "frame-sb-left";
	
	} elseif(get_post_meta($post->ID, 'ghostpool_layout_individual', true) == "Fullwidth") { $layout = "frame-fullwidth";
			
	} else {
	
		if($theme_layout == "Sidebar Left") { $layout = "frame-sb-left";
		} elseif($theme_layout == "Fullwidth") { $layout = "frame-fullwidth";
		} else { $layout = "frame-sb-right"; }
		
	}

	// Frame
	if(get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Disable") { $frame_status = "no-frame";
	
	} elseif(get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Enable") { $frame_status = "frame";
	
	} else { 
	
		if($theme_frame == "1") { $frame_status = "no-frame";
		} else { $frame_status = "frame"; }
		
	}

}

?>