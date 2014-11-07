<?php
/**
 * Blain functions and definitions
 *
 * @package Blain
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/**
 * Initialize Options Panel
 */
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}

if ( ! function_exists( 'blain_setup' ) ) :

function blain_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Blain, use a find and replace
	 * to change 'blain' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'blain', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('homepage-thumb',220,200,true);
	add_image_size('homepage-masthead',1400,550,true);
	add_image_size('internal-masthead',1400,415,true);

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'blain' ),
	) );
	add_theme_support( 'post-formats', array( 'image', 'video', 'quote' ) );

	add_theme_support( 'custom-background', apply_filters( 'blain_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );
}
endif; // blain_setup
add_action( 'after_setup_theme', 'blain_setup' );

function blain_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'blain' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'blain_widgets_init' );

if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});
	
	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
	
});
</script>
 
<?php
}

function blain_scripts() {
	wp_enqueue_style( 'blain-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');
	wp_enqueue_style( 'blain-basic-style', get_stylesheet_uri() );
	if ( (function_exists( 'of_get_option' )) && (of_get_option('sidebar-layout', true) != 1) ) {
		if (of_get_option('sidebar-layout', true) ==  'right') {
			wp_enqueue_style( 'blain-layout', get_stylesheet_directory_uri()."/css/layouts/content-sidebar.css" );
		}
		else {
			wp_enqueue_style( 'blain-layout', get_stylesheet_directory_uri()."/css/layouts/sidebar-content.css" );
		}	
	}
	else {
		wp_enqueue_style( 'blain-layout', get_stylesheet_directory_uri()."/css/layouts/content-sidebar.css" );
	}	
	wp_enqueue_style( 'carousel-style', get_stylesheet_directory_uri()."/js/plugins/custom_scroller/css/CustomScrollbar.css", array('blain-fonts','blain-layout') );
	wp_enqueue_style( 'carousel-custom', get_stylesheet_directory_uri()."/css/custom.css", array('blain-fonts','blain-layout') );

	wp_enqueue_style( 'blain-bootstrap-style', get_stylesheet_directory_uri()."/css/bootstrap.min.css", array('blain-fonts','blain-layout') );
	wp_enqueue_style( 'blain-reset1-style', get_stylesheet_directory_uri()."/css/reset.min.css", array('blain-fonts','blain-layout') );
	wp_enqueue_style( 'blain-main-style', get_stylesheet_directory_uri()."/css/main.css", array('blain-fonts','blain-layout') );
	
//	wp_enqueue_script( 'blain-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

//	wp_enqueue_script( 'blain-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
//	wp_enqueue_style( 'blain-nivo-slider-default-theme', get_stylesheet_directory_uri()."/css/nivo/themes/default/default.css" );
	
//	wp_enqueue_style( 'blain-nivo-slider-style', get_stylesheet_directory_uri()."/css/nivo/nivo.css" );
	
//	wp_enqueue_script('blain-timeago', get_template_directory_uri() . '/js/jquery.timeago.js', array('jquery') );
	
//	wp_enqueue_script('blain-collapse', get_template_directory_uri() . '/js/collapse.js', array('jquery') );
	
//	wp_enqueue_script( 'blain-nivo-slider', get_template_directory_uri() . '/js/nivo.slider.js', array('jquery') );
	
//	wp_enqueue_script( 'blain-superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery') );


	
	//wp_enqueue_script( 'jquery-masonry', false, array('jquery') );
	wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/jquery-1.11.1.min.js' );
	
	wp_enqueue_script( 'blain-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );

//	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/plugins/custom_scroller/js/jquery.mousewheel.min.js', array('jquery') );
	wp_enqueue_script( 'platform1', get_template_directory_uri() . '/js/plugins/custom_scroller/js/CustomScrollbar.concat.min.js', array('jquery') );

	wp_enqueue_script( 'blain-custom-js', get_template_directory_uri() . '/js/custom.js' );

	wp_enqueue_script( 'platform2', get_template_directory_uri() . '/js/custom.scrollby.js' );
	wp_enqueue_script( 'platform3', get_template_directory_uri() . '/js/custom.carousel.js' );
	wp_enqueue_script( 'platform4', get_template_directory_uri() . '/js/custom.rocketlax.js' );
	wp_enqueue_script( 'home-vid', get_template_directory_uri() . '/js/custom.homevideo.js' );



	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'blain-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'blain_scripts' );


/* // ==========================================================================
 * 
 * Lean Stack Style Enqueue
 * 
*/

// Enqueue Admin Styles. LeanStack.
// =============================================================================

if ( ! function_exists( 'x_enqueue_admin_styles' ) ) :
  function x_enqueue_admin_styles( $hook ) {

    wp_enqueue_style( 'wp-color-picker' );

    if ( $hook == 'widgets.php' ) {
      wp_enqueue_style( 'x-widgets', get_template_directory_uri() . '/css/admin/widgets.css',  NULL, NULL, 'all' );
    }

    if ( $hook == 'tools.php' ) {
      wp_enqueue_style( 'x-tools', get_template_directory_uri() . '/css/admin/tools.css',  NULL, NULL, 'all' );
    }

    if ( $hook == 'appearance_page_ups_sidebars' ) {
      wp_enqueue_style( 'x-sidebars', get_template_directory_uri() . '/css/admin/sidebars.css', NULL, NULL, 'all' );    
    }

    if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'edit-tags.php' ) {
      wp_enqueue_style( 'x-meta', get_template_directory_uri() . '/css/admin/meta.css', NULL, NULL, 'all' );
    }

    if ( X_VISUAL_COMOPSER_IS_ACTIVE ) {
      wp_enqueue_style( 'x-visual-composer', get_template_directory_uri() . '/css/admin/visual-composer.css', NULL, NULL, 'all' );
    }

  }
endif;

add_action( 'admin_enqueue_scripts', 'x_enqueue_admin_styles' );



// Enqueue Customizer Styles. LeanStack.
// =============================================================================

if ( ! function_exists( 'x_enqueue_customizer_controls_styles' ) ) :
  function x_enqueue_customizer_controls_styles() {

    wp_enqueue_style( 'x-customizer-controls', get_template_directory_uri() . '/css/admin/customizer-controls.css', NULL, NULL, 'all' );

  }
endif;

add_action( 'customize_controls_print_styles', 'x_enqueue_customizer_controls_styles' );


// Enqueue Admin Scripts. LeanStack.
// =============================================================================

if ( ! function_exists( 'x_enqueue_post_meta_scripts' ) ) :
  function x_enqueue_post_meta_scripts( $hook ) {

    GLOBAL $post;
    GLOBAL $wp_customize;

    if ( isset( $wp_customize ) ) {
      return;
    }

    wp_enqueue_script( 'wp-color-picker');

    if ( $hook == 'widgets.php' ) {
      wp_enqueue_script( 'x-widgets-js', get_template_directory_uri() . '/js/admin/x-widgets.min.js', array( 'jquery' ), NULL, true );
    }

    if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'edit-tags.php' ) {
      wp_enqueue_script( 'x-meta-js', get_template_directory_uri() . '/js/admin/x-meta.min.js', array( 'jquery', 'media-upload', 'thickbox' ), NULL, true );
    } 

    if ( $hook == 'post.php' || $hook == 'post-new.php' ) {

      wp_enqueue_script( 'media-upload' );
      wp_enqueue_script( 'thickbox' );

      echo '<script type="text/javascript" id="x-ajax">
              var x_ajax = { post_id : 0, nonce : "" };
              x_ajax.post_id = "' . $post->ID . '";
              x_ajax.nonce   = "' . wp_create_nonce( 'x-ajax' ) . '";
            </script>';

    }   

  }
  add_action( 'admin_enqueue_scripts', 'x_enqueue_post_meta_scripts' );
endif;




function blain_custom_head_codes() {
 if ( (function_exists( 'of_get_option' )) && (of_get_option('headcode1', true) != 1) ) {
	//echo of_get_option('headcode1', true);
 }
 if ( (function_exists( 'of_get_option' )) && (of_get_option('style2', true) != 1) ) {
	//echo "<style>".of_get_option('style2', true)."</style>";
 }
}	
//add_action('wp_head', 'blain_custom_head_codes');

function blain_nav_menu_args( $args = '' )
{
    $args['container'] = false;
    return $args;
} // function
add_filter( 'wp_page_menu_args', 'blain_nav_menu_args' );

function blain_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
	            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	            echo '<div class="pagination"><div><ul>';
	            echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
	            foreach ( $page_format as $page ) {
	                    echo "<li>$page</li>";
	            }
	           echo '</ul></div></div>';
	 }
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom Menu For Bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
/**
 * Custom functions that act independently of the theme templates. Import Widgets
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/widgets.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Constants. LeanStack.
 */
require get_template_directory() . '/inc/constants.php';

/**
 * Visual Composer (VCBakery) additions. LeanStack.
 */
require get_template_directory() . '/inc/composer.php';



/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
//add_filter('show_admin_bar', '__return_false');

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.1' );
	}
}