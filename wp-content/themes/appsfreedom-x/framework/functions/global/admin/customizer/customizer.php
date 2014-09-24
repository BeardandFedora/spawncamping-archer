<?php


/**
 * The configuration options for the LeanStack Customizer
 */
function leanstack_customizer_config() {

	$args = array(

		// 'logo_image'    => get_template_directory_uri() . '/assets/images/customizer-logo.png',
		'logo_image'    => '/favicon.png',
		'color_active'  => '#c1e2f1',
		//'color_light'   => '#c1e2f1',
		//'color_select'  => '#17649a',
		//'color_accent'  => '#E74C3C',
		'color_back'    => '#17649a',
        'color_title'    => '#ffffff',
		'url_path'      => $admn_path . '/kirki/',
		'stylesheet_id' => 'leanstack',
		// 'live_css'      => false,

	);

	return $args;

}
add_filter( 'kirki/config', 'leanstack_customizer_config' );

function leanstack_customizer_additional_css() { ?>

	<style>
		li#customize-control-widgets_mode,
		li#customize-control-menu_mode,
		li#customize-control-gradients_toggle,
		li#customize-control-navbar_position,
		li#customize-control-navbar_logo,
		li#customize-control-border_radius,
		li#customize-control-padding_base,
		li#customize-control-less,
		li#customize-control-minimize_css,
		li#customize-control-navbar_bg,
		li#customize-control-navbar_bg_opacity
		{
			margin-left: -20px;
			margin-right: -20px;
			background: #D1D5D8;
			padding: 10px 20px;
		}
	</style>

	<?php
}
add_action( 'customize_controls_print_styles', 'leanstack_customizer_additional_css', 999 );
