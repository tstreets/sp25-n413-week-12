<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'U()VsRwDSjV5c4c6)Db{-2k05*,SIS0+B0mhdQnO_q0Sg:Pd,}(TE!xKc!uoe>?+' );
define( 'SECURE_AUTH_KEY',   '=B~Y}LmGs58DCR[>Z)sl:$^r,YHyS.y]QlQTa+:r.t:vsaR~@Zo]5**Pt]+<f>{;' );
define( 'LOGGED_IN_KEY',     'Fs7/hB^u$G$ NYMA0ce-4q1Tr(GQBUl*gSHYWXjenYPc&n$78*B@` ^Vck7=tpl2' );
define( 'NONCE_KEY',         '|d|6XVEn+ho&!/ {c-/GZi>HM!~!E>#X> +X4,.H/.T@3b$s{3PmFv!c]OD,d`0.' );
define( 'AUTH_SALT',         'va^ZX#}~S)5T<mN[.63D>K$xv7W(54~J^>p:7]p6qUBb22fZc0C&4gL1uw(fji~I' );
define( 'SECURE_AUTH_SALT',  'wP?q%u6jZ%aLZ7 [$MJ0#ybZ E||YE+YB;&w7j@_Fh,T|OK6^[.pyfDSHrtbTk/)' );
define( 'LOGGED_IN_SALT',    '{amvGe> Nie(t+ZYaV>]}#APK0NGHJeb9-)e~g&I$v?5]$qfV-WhZ$L%de2#=vo,' );
define( 'NONCE_SALT',        'uX:Ku)x>[B$`8rL1wX]vstAZ2E oy)Bn2EIVjc<:mbO]7Fy3Gd]I:[MH.{J t-y#' );
define( 'WP_CACHE_KEY_SALT', '+:qQMf5z1W=Xue|n5Z@[;SAPV;ERFNrW/g,Hh}`@d]*mn#w}XXbvQ#CWVQ_Ct+.o' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
