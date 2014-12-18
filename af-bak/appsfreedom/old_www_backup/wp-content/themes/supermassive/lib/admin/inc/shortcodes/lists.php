<?php

//*************************** Lists ***************************//

function ghostpool_list($atts, $content = null, $code) {
    extract(shortcode_atts(array(
		'type' => '',
		'divider' => 'false',
		'color' => 'teal'
    ), $atts));
    
    // Divider
    if($divider == "false") {
    $divider = "no-divider";
    } else {
    $divider = "";
    }
    
    // Color
    if($color == "orange") {
    $color == "orange";
    } elseif($color == "brown") {
    $color == "brown";
    } elseif($color == "blue") {
    $color == "blue";
    } else {
    $color = "teal";
    }
    
    if($code=="list") {
		$out .= '<ul class="'.$type.' '.$divider.' '.$color.'">'.do_shortcode($content).'</ul>';
	} elseif($code=="li") {
		$out .= '<li>'.do_shortcode($content).'</li>';
	}
	
   return $out;
   
}
add_shortcode("list", "ghostpool_list");
add_shortcode("li", "ghostpool_list");

?>