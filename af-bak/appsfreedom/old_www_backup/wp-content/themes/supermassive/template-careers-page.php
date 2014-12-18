<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Careers Page
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

	<div id="<?php echo($frame_status); ?>" class="post-<?php the_ID(); ?> <?php echo($layout); ?><?php echo($frame_styling); ?>">
	
		<?php if(($theme_frame == "1" && get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Disable") { ?>
		
			<?php if(($theme_breadcrumbs == "0" && get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Enable") { ?>
				<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
			<?php } else { ?>
				<div class="no-breadcrumbs"></div><div class="clear"></div>
			<?php } ?>
	
		<?php } ?>
	
		<div id="main-content" class="careers-main">
		
			<?php if(($theme_frame == "0" && get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Enable") { ?>
			
				<?php if(($theme_breadcrumbs == "0" && get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Enable") { ?>
					<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
				<?php } ?>
	
			<?php } ?>

			<?php if(!get_post_meta($post->ID, 'ghostpool_page_title', true)) { ?><h1 class="page-title"><?php the_title(); ?></h1><?php } ?>
		
			<?php if($content = $post->post_content) { ?>

				<?php the_content(); ?>
			
			<?php } else { ?>

				<?php
				$children = wp_list_pages('depth=1&title_li=&child_of='.$post->ID.'&echo=0');
				if ($children) { ?>
				<ul>
					<?php echo $children; ?>
				</ul>
				<?php } ?>		

			<?php } ?>

			<?php wp_link_pages('before=<div class="clear"></div><div class="post-navi">&pagelink=<span>%</span>&after=</div>'); ?>		
			
		
		
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>