<?php get_header(); ?>

<?php require('lib/inc/page-styling.php'); ?>	

<div id="<?php echo($frame_status); ?>" class="404-page <?php echo($layout); ?><?php echo($frame_styling); ?>">

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

		<h1 class="page-title"><?php echo gp_error_404; ?></h1>
	
		<h4><?php echo gp_error_404_message; ?></h4>

	<ul>
<?php wp_nav_menu( $args ); ?>
</ul>
		

	
	</div>
	
	 <?php if($theme_layout_other == "Fullwidth") {} else { ?><?php get_sidebar(); ?><?php } ?>
	
</div>

<?php get_footer(); ?>