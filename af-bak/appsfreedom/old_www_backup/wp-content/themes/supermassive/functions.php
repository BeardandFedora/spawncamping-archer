<?php

/*************************** File Directories ***************************/

define( ghostpool_inc, TEMPLATEPATH . '/lib/inc/' );
define( ghostpool_admin, TEMPLATEPATH . '/lib/admin/inc/' );


/*************************** Additional Functions ***************************/

// Main Theme Options
require_once(ghostpool_admin . 'theme-options.php');

// Meta Options
require_once(ghostpool_admin . 'theme-meta-options.php');

// Widgets
require_once(ghostpool_admin . 'theme-widgets.php');

// Sidebars
require_once(ghostpool_admin . 'theme-sidebars.php');

// Shortcodes
require_once(ghostpool_admin . 'theme-shortcodes.php');

// Custom Post Types
require_once(ghostpool_admin . 'theme-post-types.php');

// WP Pagenavi
require_once(ghostpool_inc . 'wp-pagenavi.php');

// Language
require_once(ghostpool_inc . 'language.php');

// TinyMCE
require_once (ghostpool_admin . 'tinymce/tinymce.php');

// Update Notification
require_once(ghostpool_admin . 'theme-update-notification.php');


/*************************** Featured Image Sizes ***************************/

add_theme_support('post-thumbnails');
get_option('thumbnail_crop');
add_image_size('thumbnail', 120, 120, true);


/*************************** Navigation Menus ***************************/

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(array(
'header-nav' => __( 'Header Navigation' ),
'utility-nav' => __( 'Utility Navigation' ),
'footer-nav' => __( 'Footer Navigation' ),
'footer-bar-nav' => __( 'Footer Bar Navigation' )
));
}


/*************************** Custom Background Support ***************************/

add_custom_background();


/*************************** Excerpts ***************************/

// WordPress Excerpt Length
function new_excerpt_length($length) {return 500;}
add_filter('excerpt_length', 'new_excerpt_length');

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// Replace Excerpt Ellipsis
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
remove_filter('the_excerpt', 'wpautop');


/*************************** Breadcrumbs ***************************/

function the_breadcrumb() {
global $post;
	if (!is_home()) {
		echo '<a href="'.get_option('home').'">'.gp_home.'</a>';
		if (is_category()) {
			echo " / ";
			echo single_cat_title();
		}
		elseif (is_singular('slide')) {
			echo " / ";
			echo the_title();
		} elseif(is_single() && !is_singular('slide') && !is_attachment()) {
			$cat = get_the_category(); $cat = $cat[0];
			echo " / ";
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo " / ";
			echo the_title();
		}		
		elseif (is_search()) {
			echo " / " .gp_search;
		}		
		elseif (is_page() && $post->post_parent) {
			echo ' / <a href="'.get_permalink($post->post_parent).'">';
			echo get_the_title($post->post_parent);
			echo "</a> / ";
			echo the_title();		
		}
		elseif (is_page() OR is_attachment()) {
			echo " / "; 
			echo the_title();
		}
		elseif (is_author()) {
			echo wp_title(' / ');
			echo "'s ".gp_posts;
		}
		elseif (is_404()) {
			echo " / "; 
			echo gp_error_404;
		}
		elseif (is_archive()) {
			echo wp_title(' / ');		
		}
	}
}


/*************************** Shortcode Support For Text Widget ***************************/

add_filter('widget_text', 'do_shortcode');


/*************************** Page Navigation For Shortcodes ***************************/

function pagination( $query, $baseURL, $first=1, $last=1, $middle=5 ) {
	$page = $query->query_vars["paged"];
	if ( !$page ) $page = 1;
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";
	
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {
	echo '<div class="wp-pagenavi">';
	
	// Previous Link
	if ( $page > 1 ) {
		if(get_option("permalink_structure")) {
			echo '<a href="'.$baseURL.'page/'.($page-1).'/'.$qs.'">&laquo;</a>';
		} elseif(is_front_page()) {
			echo '<a href="'.$baseURL.'?paged='.($page-1).'">&laquo;</a>';	
		} else {
			echo '<a href="'.$baseURL.'&amp;paged='.($page-1).'">&laquo;</a>';
		}	
	}
	$dots=false;
	
	 // Loop through pages
	for ( $i=1; $i <= $query->max_num_pages; $i++ ){
		if($i<=$first || $i<=$middle && $page<$middle || $i>$query->max_num_pages-$last || $i>$query->max_num_pages-$middle && $page>$query->max_num_pages-$middle+1 || $i>$page-ceil($middle/2) && $i<=$page+floor($middle/2)){
			if ( $i == $page ) {
					echo '<span class="current">'.$i.'</span>';
				} else {
					if(get_option("permalink_structure")) {
					echo '<a href="'.$baseURL.'page/'.$i.'/'.$qs.'" class="page">'.$i.'</a>';
				} elseif(is_front_page()) {
					echo '<a href="'.$baseURL.'?paged='.$i.'" class="page">'.$i.'</a>';		
				} else {
					echo '<a href="'.$baseURL.'&amp;paged='.$i.'" class="page">'.$i.'</a>';
				}
			}
			$dots=false;
			} elseif(!$dots) {
				echo '<span class="dots">...</span>';
				$dots=true;
		}
	}
	
	// Next Link
	if ( $page < $query->max_num_pages ) {
		if(get_option("permalink_structure")) {
			echo '<a href="'.$baseURL.'page/'.($page+1).'/'.$qs.'">&raquo;</a>';
		} elseif(is_front_page()) {
			echo '<a href="'.$baseURL.'?paged='.($page+1).'">&raquo;</a>';
		} else {
			echo '<a href="'.$baseURL.'&amp;paged='.($page+1).'">&raquo;</a>';
		}
	}
	
	echo '</div>';
	}	
}


/*************************** TimThumb Image Directory ***************************/

function gp_imagepath($img_src) {
    global $blog_id;
	if (isset($blog_id) && $blog_id > 0) {
		$imageParts = explode('/files/', $img_src);
		if (isset($imageParts[1])) {
			$img_src = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
		}
	}
	return $img_src;
}


/*************************** Password Protected Form ***************************/

add_filter( 'the_password_form', 'custom_password_form' );
function custom_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$form =  '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">
	' . gp_password_protected. '<br/><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
	</form>';
	return $form;
}


/*************************** Redirect to Theme Options after Activation ***************************/

if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
    add_action('admin_head','ct_option_setup');
    header( 'Location: '.admin_url().'admin.php?page=theme-options.php' ) ;
}


/*************************** CSS3PIE Behaviour For IE Elements ***************************/

function render_ie_pie() {
echo '
<!--[if lte IE 8]>
<style>
#frame,
.button a,
#nav .sub-menu,
.separate > div,
.first.joint > div,
.middle.joint > div,
.last.joint > div,
.panel,
.bypostauthor .post-author,
#footer-top-inner,
.dropcap2,
.dropcap3,
.dropcap4,
.dropcap5,
.ui-tabs-panel,
.notify,
.error,
.success
{
behavior: url("'.get_bloginfo('template_url').'/lib/scripts/pie/PIE.php");
}
</style>
<![endif]-->';
}
add_action('wp_head', 'render_ie_pie', 8);


/*************************** Thickbox Image Path Fix ***************************/

add_action('wp_footer', 'load_tb_fix');
function load_tb_fix() {
	echo '<script type="text/javascript">tb_pathToImage = "' . get_bloginfo('url') . '/wp-includes/js/thickbox/loadingAnimation.gif";
	tb_closeImage = "' . get_bloginfo('url') . '/wp-includes/js/thickbox/tb-close.png";</script>';
}

// Downgrade to jQuery 1.4.4 in order to support jQuery Tools
function downgrade_jquery() {
        global $wp_scripts;

        // We want to use version 1.4.4 of jQuery, but it may break something in the admin so we only load it on the actual site.
        if ( !is_admin() ) :
                wp_deregister_script('jquery');
                wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', false, '1.4.4');
        endif;
}
add_action( 'wp_head', downgrade_jquery() );

remove_action('wp_head', 'wp_generator');

@ini_set('display_errors',0);

?>