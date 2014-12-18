<?php get_header(); ?>

<?php require('lib/inc/page-styling.php'); ?>	

<div id="<?php echo($frame_status); ?>" class="attachment <?php echo($layout); ?><?php echo($frame_styling); ?>">

	<?php if($theme_frame_other == "1") { ?>		
		<?php if($theme_breadcrumbs_other == "0") { ?>
			<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
		<?php } else { ?>
			<div class="no-breadcrumbs"></div><div class="clear"></div>
		<?php } ?>		
	<?php } ?>

	<div id="main-content">
	
		<?php if($theme_frame_other == "0") { ?>
			<?php if($theme_breadcrumbs_other == "0") { ?>
				<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
			<?php } ?>
		<?php } ?>

			<h1 class="page-title"><?php the_title(); ?></h1>
		
			<?php the_attachment_link($post->post_ID, true) ?>
			<?php the_content(); ?>
		
		</div>
		
	</div>

<?php get_footer(); ?>