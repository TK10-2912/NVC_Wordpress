<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nvc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`t4;m4{i^F2Rg:rC4h@N.U*U|Tx!Y*xwlQeP6J#jx$^<Syfajty9zdQJ2gvW[Ok,' );
define( 'SECURE_AUTH_KEY',  'K^kuYRL9+_,4vo<B4IwX:F%jX,Iy}V]sQTJ` &l`+KIlIsl+K{W2xP]ozHLo)wb#' );
define( 'LOGGED_IN_KEY',    '~1ePO*BiQU{ztKQz8}lG{u5QYxTjH*&t[N`Jb}z[)V=,JX%JgbrU)PSo Ym2c]sE' );
define( 'NONCE_KEY',        '^)^QVqAHCtQ-)qe _Xc4x omYsY~U3!sNd+Hpu.x:ooWY{EvWrL=T7X)`_SD!J9x' );
define( 'AUTH_SALT',        'Gv5[M}`U[YF,|ZiHY08W:8/&-tdOpwL(seuxu<+sg$u0C2GM>`5Y/z4Uh%QYosEl' );
define( 'SECURE_AUTH_SALT', '4n@ihTfp)@~5,Of,{^t5W5?N_iz0J2&]{=M@pK~/qiZLcaebZAL2JUv;e&d)NspG' );
define( 'LOGGED_IN_SALT',   '>S?bUZE8f|x=!e-s~`&QWB-:&0YN_807Dey#uA5fx|t{8=@q 89?gB{GEt;:=IST' );
define( 'NONCE_SALT',       'e{hU{V kB4of%Q/3`@]hAZr<ahHR!oIu#Q=a!nntv<H]s;nDV)nD$=..B^E4f,rG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
