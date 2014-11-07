<?php
// Define Constants
// =============================================================================

define( 'X_VERSION', '2.4.0' );
define( 'X_TEMPLATE_PATH', get_template_directory() );
define( 'X_TEMPLATE_URL', get_template_directory_uri() );
define( 'X_BBPRESS_IS_ACTIVE', class_exists( 'bbPress' ) );
define( 'X_BUDDYPRESS_IS_ACTIVE', class_exists( 'BuddyPress' ) );
define( 'X_WOOCOMMERCE_IS_ACTIVE', class_exists( 'WC_API' ) );
define( 'X_GRAVITY_FORMS_IS_ACTIVE', class_exists( 'GFForms' ) );
define( 'X_CONTACT_FORM_7_IS_ACTIVE', class_exists( 'WPCF7_ContactForm' ) );
define( 'X_VISUAL_COMOPSER_IS_ACTIVE', class_exists( 'WPBakeryVisualComposer' ) );
?>