<div id="social">

	<?php if($theme_rss_button == "1") {} else { ?><a href="<?php if($theme_rss) { ?><?php echo($theme_rss); ?><?php } else { ?><?php bloginfo('rss2_url'); ?><?php } ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/feed.png" alt="" /></a><?php } ?>
	
	<?php if($theme_twitter) { ?><a href="<?php echo $theme_twitter; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/twitter.png" alt="" /></a><?php } ?>
	
	<?php if($theme_facebook) { ?><a href="<?php echo $theme_facebook; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.png" alt="" /></a><?php } ?>
	
	<?php if($theme_myspace) { ?><a href="<?php echo $theme_myspace; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/myspace.png" alt="" /></a><?php } ?>
	
	<?php if($theme_digg) { ?><a href="<?php echo $theme_digg; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/digg.png" alt="" /></a><?php } ?>
	
	<?php if($theme_flickr) { ?><a href="<?php echo $theme_flickr; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/flickr.png" alt="" /></a><?php } ?>

	<?php if($theme_delicious) { ?><a href="<?php echo $theme_delicious; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/delicious.png" alt="" /></a><?php } ?>

	<?php if($theme_youtube) { ?><a href="<?php echo $theme_youtube; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/social/youtube.png" alt="" /></a><?php } ?>
	
</div> 