<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Demo Form Test
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
	
		<div id="main-content">
		
			<?php if(($theme_frame == "0" && get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_frame_individual', true) == "Enable") { ?>
			
				<?php if(($theme_breadcrumbs == "0" && get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Default") OR get_post_meta($post->ID, 'ghostpool_breadcrumbs_individual', true) == "Enable") { ?>
					<div id="breadcrumbs"><?php echo the_breadcrumb(); ?></div><div class="clear"></div>
				<?php } ?>
	
			<?php } ?>

			<?php if(!get_post_meta($post->ID, 'ghostpool_page_title', true)) { ?><h1 class="page-title"><?php the_title(); ?></h1><?php } ?>
		
					<form id="demoform" action='https://crm.zoho.com/crm/WebToLeadForm' method='POST' onSubmit='javascript:document.charset="UTF-8";'
accept-charset='UTF-8'>

<input type='hidden' name='xnQsjsdp' value=uFiQe4v5OmA$/>  
<input type='hidden' name='xmIwtLD' value=lWKV3rtePxjQx0fOQb2Ux2-*B6-MHnNR/>  
<input type='hidden' name='actionType' value=TGVhZHM=/> 
<input type='hidden' name='returnURL' value='http://www.sealinnotech.com/thank-you' /> 

<p>Company<br />
    <span class="wpcf7-form-control-wrap company"><input type="text" name="Company" value="" class="textfield required" size="40" /></span> </p>

<p>First Name<br />
    <span class="wpcf7-form-control-wrap first-name"><input type="text" name="First Name" value="" class="wpcf7-text textfield required" size="40" /></span> </p>

<p>Last Name<br />
    <span class="wpcf7-form-control-wrap last-name"><input type="text" name="Last Name" value="" class="wpcf7-text textfield required" size="40" /></span> </p>

<p>Email<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="text" name="Email" value="" class="wpcf7-text wpcf7-validates-as-email wpcf7-validates-as-required" size="40" /></span> </p>

<p>I'm interested in:<br />
    <span class="wpcf7-form-control-wrap menu-521"><select name="Description" class="wpcf7-select wpcf7-validates-as-required" multiple="multiple"><option value="Sales/CRM apps">Sales/CRM apps</option><option value="Procurement apps">Procurement apps</option><option value="Workflow apps">Workflow apps</option><option value="Analytics apps">Analytics apps</option><option value="Jobs">Jobs</option><option value="Partnerships">Partnerships</option><option value="Other">Other</option></select></span> </p>



<p><input type="submit" value="Send" class="wpcf7-submit" /><img class="ajax-loader" style="visibility: hidden;" alt="Sending ..." src="http://www.sealinnotech.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" /></p>
</form>
		
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>