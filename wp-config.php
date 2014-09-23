<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_HOME','http://madrid-finish.codio.io:3000');
define('WP_SITEURL','http://madrid-finish.codio.io:3000');
define( 'SHOESTRAP_OPT_NAME', 'appsFreedom' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'P@$$W0rd@PPSfreedom');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2z`dM=e||xpV~WtqbR(dY|{e3ndR)u os$2[GCS_s^Z[|Iqj3i-|snw~UT3g2]:)');
define('SECURE_AUTH_KEY',  '0Wg<dN~QB|s|^n(%53qTkdKGPn:tBfFHNe[2M`,Z)}&U< ~y=Lr`fYYfeqhzW`}3');
define('LOGGED_IN_KEY',    '+<|et+id/O}lpZIQQ?I1rzX33L&gzOTl`Y3#{4Lmr~1j}W-!h3wjH}Ks||Q%]2..');
define('NONCE_KEY',        '1d:}oF.L}h,+0ms<<|[(dh*p7Zl; t*v?/gR-1WBY1S%yMs1eFns1q8[*rSrb_|g');
define('AUTH_SALT',        '8nAU;9m(?2};,1RvwG)oMgp~32.hA08p%pT|{(G0{m#UVJ-IUV1z.U1OB|PG3K[3');
define('SECURE_AUTH_SALT', '+#WkE)$sk4xjiug6mM#*jLEY@V,78|[/+RL-w*cUo_tQx7wD|>dqx))]d?GIa@@5');
define('LOGGED_IN_SALT',   '0i,W(+ctgNfsG{PjCfP^?dV,<o?o@R8Yp#tb Aph.R;U3}o+IHsJkU-/pQ){SJj+');
define('NONCE_SALT',       'EW(hjM|+-Ha>LE6Q R+c0G$vW7XAa|)]VFb^QzuI9,&b$g|GyjAAi2!,f#mq,Rtf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);


/* WP Network Configuration / Multisite */
//define('WP_ALLOW_MULTISITE', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
