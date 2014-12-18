<?php

//*************************** Author Info ***************************//

function ghostpool_author($atts, $content = null) {

	// If Author Has Website
	if(get_the_author_meta('user_url')) {
	$website ='<a href="'.get_the_author_meta('user_url').'">'.gp_visit_author_website.'</a> / ';
	} else {
	$website ='';
	}
	
	$out .=
	
	'<div class="author-info">'.
	
		get_avatar(get_the_author_id(), 55).'
	
		<div class="author-meta">
		
			<div class="author-name">'.get_the_author().'</div>'.
			
			'<div class="author-links">'.$website.'<a href="'.get_bloginfo('url').'/author/'.get_the_author_meta('user_login').'">'.gp_other_author_posts.'</a></div>
			
			<br/><br/>
			
			<div class="author-desc">'.get_the_author_meta('description').'</div>
		
		</div>
		
	</div>
	';
				
   return $out;
   
}
add_shortcode("author", "ghostpool_author");

?>