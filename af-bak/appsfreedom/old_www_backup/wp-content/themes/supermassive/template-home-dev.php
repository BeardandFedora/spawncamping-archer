<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Home Page Development
*/ 

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<meta charset=<?php bloginfo('charset'); ?> />
<title><?php wp_title('&laquo; ', true, 'right'); ?><?php bloginfo('name'); ?></title>

<?php require(ghostpool_inc . 'options.php'); ?>

<meta name="description" content="<?php if(is_single()) { ?><?php single_post_title(); ?><?php } elseif(is_page()) { ?><?php wp_title('&laquo; ', true, 'right'); ?><?php bloginfo('name'); ?><?php } else { bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } ?>" /> 
<?php if($theme_keywords) { ?><meta name="keywords" content="<?php echo $theme_keywords; ?>" /><?php } ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" media="screen" />
 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-seal.css" media="screen" />

<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-ie.css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-ie7.css" media="screen" /><![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if($theme_favicon_ico) { ?><link rel="icon" href="<?php echo($theme_favicon_ico); ?>" type="image/vnd.microsoft.icon" />
<link rel="SHORTCUT ICON" href="<?php echo($theme_favicon_ico); ?>" /><?php } ?>
<?php if($theme_favicon_png) { ?><link rel="icon" type="image/png" href="<?php echo($theme_favicon_png); ?>" /><?php } ?>
<?php if($theme_apple_icon) { ?><link rel="apple-touch-icon" href="<?php echo($theme_apple_icon); ?>" /><?php } ?>

<?php require(ghostpool_inc . 'styling.php'); ?>
 
<?php if($theme_custom_css) { ?><style><?php echo stripslashes($theme_custom_css); ?></style><?php } ?>
  
<?php if(is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/swfobject.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/gen_validatorv4.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/lib/scripts/mediaplayer/jwplayer.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/flashfix.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>


<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js"></script>
<?php if($theme_leaguegothic) { ?><script src="<?php bloginfo('stylesheet_directory'); ?>/js/fonts/League_Gothic_400.font.js"></script><?php } ?>
<?php if($theme_quicksand) { ?><script src="<?php bloginfo('stylesheet_directory'); ?>/js/fonts/Quicksand_Book_400-Quicksand_Bold_700-Quicksand_Book_Oblique_oblique_400-Quicksand_Bold_Oblique_oblique_700.font.js"></script><?php } ?>
<?php if($theme_journal) { ?><script src="<?php bloginfo('stylesheet_directory'); ?>/js/fonts/Journal_400.font.js"></script><?php } ?>
<?php if($theme_vegur) { ?><script src="<?php bloginfo('stylesheet_directory'); ?>/js/fonts/Vegur_400-Vegur_700-Vegur_300.font.js"></script><?php } ?>
<?php if($theme_chunkfive) { ?><script src="<?php bloginfo('stylesheet_directory'); ?>/js/fonts/ChunkFive_400.font.js"></script><?php } ?>
<?php if($theme_sansation) { ?><script src="<?php bloginfo('stylesheet_directory'); ?>/js/fonts/Sansation_400-Sansation_700.font.js"></script><?php } ?>
<script>Cufon.replace('h1,h2,h3,h4,h5,h6', {hover: true});
<?php echo stripslashes($theme_cufon_code); ?></script>

<?php if($theme_timthumb == "0") { ?>
<script src="<?php bloginfo('template_directory'); ?>/js/reflection.js"></script>
<script>
jQuery(document).ready(function(){
	jQuery(".reflection-s").reflect({
		height: 25,
		opacity: 0.3
	});
	jQuery(".reflection-m").reflect({
		height: 70,
		opacity: 0.3
	});
	jQuery(".reflection-l").reflect({
		height: 100,
		opacity: 0.5
	});
});
</script>
<?php } ?>



<script>var rootFolder='<?php bloginfo('template_directory'); ?>';</script>
<?php echo stripslashes($theme_scripts); ?>





</head>					
<body class="no-js">

<script>
	var el = document.getElementsByTagName("body")[0];
	el.className = "";
</script>

<a href="#top_arrow"></a>

<!--Begin Page Wrapper-->
<div id="page-wrapper" style="background: url(<?php echo $theme_custom_header; ?>)
<?php if($theme_header_repeat == "No Repeat") { ?>no-repeat
<?php } elseif( $theme_header_repeat == "Repeat Horizontally") { ?>repeat-x
<?php } elseif( $theme_header_repeat == "Repeat Vertically") { ?>repeat-y
<?php } else { ?>repeat<?php } ?>
<?php if($theme_header_position == "Left") { ?>left top
<?php } elseif($theme_header_position == "Right") { ?>right top
<?php } else { ?>center top<?php } ?>;">

	<!--Begin Header-->
	<div id="header">
	
		<div id="header-top">
			
			<!--Begin Logo-->
			<div id="logo">
				<a href="/"><img src="/wp-content/themes/supermassive/images/logo-appsfreedom.png" alt="appsfreedom" width="300" height="74" /></a>		
			</div>
			<!--End Logo-->
			
		<!--Begin Boldchat-->
			<div id="boldchat">
				<!-- BoldChat Live Chat Button HTML v4.00 (Type=Web,ChatButton=AppsFreedom,Website=AppsFreedom) -->
<div style="text-align: center; white-space: nowrap;width:190px;" class="bc">
 <a href="https://livechat.boldchat.com/aid/6078100836619057136/bc.chat?resize=true&amp;cbdid=1241867698320902181&amp;wdid=1903312490949144083" target="_blank" onclick="window.open((window.pageViewer &amp;&amp; pageViewer.link || function(link){return link;})(this.href + (this.href.indexOf('?')>=0 ? '&amp;' : '?') + 'url=' + escape(document.location.href)), 'Chat5634051656975423971', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=640,height=480');return false;" style="width:190px;">
  <div style="width:190px;"><script language="JavaScript" type="text/javascript"> var bccbId = Math.random(); document.write(unescape('%3Cimg alt="AppsFreedom" src="' + (('https:' == document.location.protocol) ? 'https:' : 'http:') + '//cbi.boldchat.com/aid/6078100836619057136/bc.cbi?cbdid=1241867698320902181&amp;wdid=1903312490949144083" border="0" id=' + bccbId + ' /%3E')); var bccb = {id: bccbId, bdid: '1241867698320902181', rdid: null, type: 'chat'}; var _bcvma = _bcvma || []; if(window.pageViewer && pageViewer.addButton) pageViewer.addButton(button); else _bcvma.push(['addButton', bccb]);</script></div>
 </a>
 </div>
<!-- /BoldChat Live Chat Button HTML v4.00 -->
			</div>
		<!--End Boldchat-->
			
	
	<!--Begin Utility Nav-->
	<div class="utility-nav">
    		<?php wp_nav_menu( array('menu' => 'Utility Navigation' )); ?>
    </div>
	<!--End Utility Nav-->		
			
			
			
		</div>
		
		<div class="clear"></div>

		
		<div class="social-media">
				<ul class="header-social-media">
					<!--<li><a href="http://www.facebook.com/pages/SEAL-Innotech/150054508397082" target="_blank"><img src="/wp-content/themes/supermassive/images/facebook-32x32.png" alt="Facebook"/></a></li>-->
					<li><a href="http://twitter.com/#!/appsFreedom" target="_blank"><img src="/wp-content/themes/supermassive/images/twitter-32x32.png" alt="Twitter"/></a></li>
					<li><a href="http://www.linkedin.com/company/1044934?trk=tyah" target="_blank"><img src="/wp-content/themes/supermassive/images/linkedin-32x32.png" alt="Linkedin"/></a></li>
				</ul>
		</div> <!--social-media-->
		
		
		
		
		<!--Begin Nav-->
		<div id="nav">
			<?php wp_nav_menu('sort_column=menu_order&container=ul&theme_location=header-nav&fallback_cb=null'); ?>
			<?php if($theme_search_form == "1") {} else { get_search_form(); } ?>
		</div>
		<!--End Nav-->
	
	</div>	
	<!--End Header-->

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
		
			<?php if($content = $post->post_content) { ?>
			
			
				<?php echo "<content>";?>
				<?php the_content(); ?>
				<?php echo "</content>";?>
				
			
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