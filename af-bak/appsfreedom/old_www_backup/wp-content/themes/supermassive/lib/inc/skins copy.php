<?php if(is_singular() && get_post_meta($post->ID, 'ghostpool_skin', true) == "Chocolate") { ?>

	<?php while (have_posts()) : the_post(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-chocolate.css" media="screen" />	
	<?php endwhile; ?>

<?php } elseif(is_singular() && get_post_meta($post->ID, 'ghostpool_skin', true) == "Arctic Fox") { ?>

	<?php while (have_posts()) : the_post(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-arcticfox.css" media="screen" />
	<?php endwhile; ?>
	
<?php } elseif(is_singular() && get_post_meta($post->ID, 'ghostpool_skin', true) == "Tiger") { ?>

	<?php while (have_posts()) : the_post(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-tiger.css" media="screen" />	
	<?php endwhile; ?>

<?php } elseif(is_singular() && get_post_meta($post->ID, 'ghostpool_skin', true) == "Obsidian Grunge") { ?>

	<?php while (have_posts()) : the_post(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-obsidian-grunge.css" media="screen" />	
	<?php endwhile; ?>
	
<?php } elseif(is_singular() && get_post_meta($post->ID, 'ghostpool_skin', true) == "Obsidian") { ?>

	<?php while (have_posts()) : the_post(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-obsidian.css" media="screen" />	
	<?php endwhile; ?>
	
<?php } else { // Default Global Skin Settings ?>

	<?php if($_GET['skin'] == "chocolate" OR ($theme_skin == "Chocolate" && $_GET['skin'] == "")) { ?>
	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-chocolate.css" media="screen" />
	
	<?php } elseif($_GET['skin'] == "arcticfox" OR ($theme_skin == "Arctic Fox" && $_GET['skin'] == "")) { ?>
	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-arcticfox.css" media="screen" />

	<?php } elseif($_GET['skin'] == "tiger" OR ($theme_skin == "Tiger" && $_GET['skin'] == "")) { ?>
	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-tiger.css" media="screen" />

	<?php } elseif($_GET['skin'] == "obsidiangrunge" OR ($theme_skin == "Obsidian Grunge" && $_GET['skin'] == "")) { ?>
	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-obsidian-grunge.css" media="screen" />
		
	<?php } elseif($_GET['skin'] == "obsidian" OR ($theme_skin == "Obsidian" && $_GET['skin'] == "")) { ?>
	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-obsidian.css" media="screen" />
	
	<?php } ?>
	
<?php } ?>