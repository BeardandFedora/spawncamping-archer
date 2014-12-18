<?php if(is_singular() && get_post_meta($post->ID, 'ghostpool_skin', true) == "Chocolate") { ?>

	<?php while (have_posts()) : the_post(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-chocolate.css" media="screen" />	
	<?php endwhile; ?>

<?php } else { // Default Global Skin Settings ?>

	<?php if($_GET['skin'] == "chocolate" OR ($theme_skin == "Chocolate" && $_GET['skin'] == "")) { ?>
	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-chocolate.css" media="screen" />
	
	<?php } ?>
	
<?php } ?>