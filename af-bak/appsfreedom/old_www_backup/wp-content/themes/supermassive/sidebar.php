<?php require(ghostpool_inc . 'options.php'); ?>

<?php if((is_singular() && get_post_meta($post->ID, 'ghostpool_layout_individual', true) == "Fullwidth") OR ($theme_layout == "Fullwidth" && (is_singular() && get_post_meta($post->ID, 'ghostpool_layout_individual', true) == "Default"))) {} else { ?>

<div id="sidebar">
	
	<?php if(is_singular() && get_post_meta($post->ID, 'ghostpool_sidebar', true)) { dynamic_sidebar(get_post_meta($post->ID, 'ghostpool_sidebar', true)); } else { dynamic_sidebar('Default Sidebar'); } ?>
	
</div>	

<?php } ?>