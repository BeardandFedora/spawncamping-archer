<?php if($theme_author_info == "0" && !post_password_required()) { ?>

	<div class="clear"></div>
	
	<div class="author-info">	
	
		<?php echo get_avatar(get_the_author_id(), 55); ?>
	
		<div class="author-meta">
		
			<div class="author-name"><?php echo get_the_author(); ?></div>	
			
			<div class="author-links"><?php if(get_the_author_meta('user_url')) { ?><a href="<?php the_author_meta('user_url'); ?>"><?php echo gp_visit_author_website; ?></a> / <?php } else {} ?><a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_login'); ?>"><?php echo gp_other_author_posts; ?></a></div>
			
			<div class="clear"></div>
			
			<div class="author-desc"><?php the_author_meta('description'); ?></div>
	
		</div>
	
	</div>
	
	<div class="clear"></div>

<?php } ?>