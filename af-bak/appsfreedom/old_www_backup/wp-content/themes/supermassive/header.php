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
<body class="no-js>

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
			

			
	
	<!--Begin Utility Nav-->
	<div class="utility-nav">
    		<?php wp_nav_menu( array('menu' => 'Utility Navigation' )); ?>
    </div>
	<!--End Utility Nav-->		
			
			
			
		</div>
		
		<div class="clear"></div>

		
		<div class="social-media">
				<ul class="header-social-media">
					<li><a href="https://www.facebook.com/appsFreedom" target="_blank"><img src="/wp-content/themes/supermassive/images/Facebook.png" alt="Facebook"/></a></li>
					<li><a href="https://twitter.com/appsfreedom" target="_blank"><img src="/wp-content/themes/supermassive/images/Twitter.png" alt="Twitter"/></a></li>
					<li><a href="http://www.linkedin.com/company/appsfreedom" target="_blank"><img src="/wp-content/themes/supermassive/images/LinkedIn.png" alt="Linkedin"/></a></li>
					<li><a href="https://plus.google.com/108643044171592545922/posts?partnerid=gplp0" target="_blank"><img src="/wp-content/themes/supermassive/images/Google+.png" alt="Google Plus"/></a></li>
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