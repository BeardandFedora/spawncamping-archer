<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Mobile Home Page
*/ 

?>


<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Site Front Page
 *
 * Note: You can overwrite front-page.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes and
 *                 http://themeid.com/forum/topic/505/child-theme-example/
 *
 * @file           front-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/front-page.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */

/**
 * Globalize Theme Options
 */
$responsive_options = responsive_get_options();
/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
if ( 'posts' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	get_template_part( 'home' );
} elseif ( 'page' == get_option( 'show_on_front' ) && $responsive_options['front_page'] != 1 ) {
	$template = get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true );
	$template = ( $template == 'default' ) ? 'index.php' : $template;
	locate_template( $template, true );
} else { 

	get_header();
	
	//test for first install no database
	$db = get_option( 'responsive_theme_options' );
    //test if all options are empty so we can display default text if they are
    $empty = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
	?>

	<div id="featured" class="grid col-940">
	
		<div class="grid col-460">

<div class="mobile-slider">
<?php
if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '2919' );
?>
</div>


<?php
$post_id = 2931;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>

					
			<?php if ($responsive_options['cta_button'] == 0): ?>  
   
				<div class="call-to-action">

					<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">
						<?php 
						if( isset( $responsive_options['cta_text'] ) && $db && $empty )
							echo $responsive_options['cta_text']; 
						else
							_e('Call to Action','responsive');
						?>
					</a>
				
				</div><!-- end of .call-to-action -->

			<?php endif; ?>         
			
		</div><!-- end of .col-460 -->
	
	</div><!-- end of #featured -->
               
	<?php 
	get_sidebar('home');
	get_footer(); 
}
?>