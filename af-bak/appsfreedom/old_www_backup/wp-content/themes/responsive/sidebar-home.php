<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
	<?php responsive_widgets_before(); // above widgets container hook ?>
    <div id="widgets" class="home-widgets">
        <div class="grid col-300">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('footer-1')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title-home"><h3><?php _e('Footer 1', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('','responsive'); ?></div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-300 -->

        <div class="grid col-300">
        <?php responsive_widgets(); // responsive above widgets hook ?>
            
			<?php if (!dynamic_sidebar('footer-2')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title-home"><h3><?php _e('Footer 2', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('','responsive'); ?></div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-300 -->

        
        <div class="grid col-300">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('footer-3')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title-home"><h3><?php _e('Footer 3', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('','responsive'); ?></div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-300 -->
        
        
        
        <div class="grid col-300">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('footer-4')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title-home"><h3><?php _e('Footer 4', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('','responsive'); ?></div>
            
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>
	
        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-300 -->
        

    </div><!-- end of #widgets -->
	<?php responsive_widgets_after(); // after widgets container hook ?>