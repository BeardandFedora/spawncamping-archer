<?php // Custom Post Types

function post_type_slide() {

	/*************************** Slide Post Type ***************************/
	
	register_post_type('slide', array(
		'labels' => array('name' => __('Slides'), 'singular_label' => __('Slide'), 'add_new_item' => __('Add Slide'), 'edit_item' => __('Edit Slide')),
		'public' => true,
		'exclude_from_search' => true,
		'show_ui' => true,
		'show_in_nav_menus' => false,
		'_builtin' => false,
		'_edit_link' => 'post.php?post=%d',
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array("slug" => "slide"),
		'menu_position' => 20,
		'with_front' => true,
		'supports' => array('title', 'editor', 'comments', 'author')
	));
	
	
	/*************************** Slide Categories ***************************/
	
	register_taxonomy('slide_categories', 'slide', array('show_in_nav_menus' => false, 'hierarchical' => true, 'labels' => array('name' => __( 'Slide Categories' ), 'singular_label' => __('Slide Category'), 'add_new_item' => __( 'Add New Slide Category' ), 'search_items' => __( 'Search Slide Categories' )), 'rewrite' => array('slug' => 'slide-categories')));


	/*************************** Slide Page Layout ***************************/
	
	add_filter("manage_edit-slide_columns", "slide_edit_columns");
	add_action("manage_posts_custom_column",  "slide_custom_columns");
	
	function slide_edit_columns($columns){
			$columns = array(
				"cb" => "<input type=\"checkbox\" />",
				"title" => "Title",
				"slide_desc" => "Description",	
				"slide_categories" => "Categories",
				"slide_order" => "Order Number",	
				"slide_image" => "Image",				
				"date" => "Date"
			);
	
			return $columns;
	}
	
	function slide_custom_columns($column){
			global $post;
			require(ghostpool_inc . 'options.php');
			switch ($column)
			{
				case "slide_desc":
					echo excerpt(10);
					break;
				case "slide_categories":
					echo get_the_term_list($post->ID, 'slide_categories', '', ', ', '');
					break;
				case "slide_order":
					echo get_post_meta($post->ID, 'ghostpool_slide_order', true);
					break;	
				case "slide_image":				
					echo '<img src="';					
					if($theme_timthumb == "0") {
						echo get_bloginfo('template_directory').'/lib/scripts/timthumb.php?src=';
					}					
					echo get_post_meta($post->ID, 'ghostpool_slide_image', true);					
					if($theme_timthumb == "0") {
						echo '&amp;h=75&amp;w=100&amp;zc=1';
					}
					echo '" alt="" width="100" height="75" />';					
					break;					
			}
	}

}

add_action('init', 'post_type_slide');

?>