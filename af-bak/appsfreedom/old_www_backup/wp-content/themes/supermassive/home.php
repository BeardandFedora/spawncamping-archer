<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Home Page
*/ 

?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php require('lib/inc/page-styling.php'); ?>	

	<?php if(get_post_meta($post->ID, 'ghostpool_top_content', true)) { ?>
		<div class="top-content">
			<?php echo stripslashes(do_shortcode(get_post_meta($post->ID, 'ghostpool_top_content', true))); ?>
		</div><div class="clear"></div>
	<?php } ?>
	
	<div id="<?php echo($frame_status); ?>" class="single-post post-<?php the_ID(); ?> <?php echo($layout); ?><?php echo($frame_styling); ?>">
	
		<?php if(($theme_frame == "1" && get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Disable") { ?>
		
			<?php if(($theme_breadcrumbs == "0" && get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Enable") { ?>
				<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
			<?php } else { ?>
				<div class="no-breadcrumbs"></div><div class="clear"></div>
			<?php } ?>
	
		<?php } ?>
	
		<div id="main-content">
		
			<?php if(($theme_frame == "0" && get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Enable") { ?>
			
				<?php if(($theme_breadcrumbs == "0" && get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Enable") { ?>
					<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
				<?php } ?>
	
			<?php } ?>

			<?php if(!get_post_meta($post->ID, 'ghostpool_page_title', true)) { ?><h1 class="page-title"><?php the_title(); ?></h1>
			
						<!--<div class="post-cats"><?php the_category(' / '); ?></div>-->
			
			<div class="clear"></div>
			
			<div class="clear"></div><?php } ?>
		
			<?php the_content(); ?>

			<?php require('lib/inc/related-posts.php'); ?>	
			
			<?php wp_link_pages('before=<div class="clear"></div><div class="wp-pagenavi post-navi">&pagelink=<span>%</span>&after=</div>'); ?>		
					
		</div>
		
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>