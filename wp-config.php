<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bworlddb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=*jo#H, l!<_{PLYS85hr<a$]oju-1=bk*2FyGOElls81o^o_La-1/}?26jfSkr&' );
define( 'SECURE_AUTH_KEY',  '@D@K3]<D?5omh%;&DPRZJ8x0e^WH3j;o5iU.zOTO|8(}f?jN0D?$q<s.BbxsU#3v' );
define( 'LOGGED_IN_KEY',    'Q04C/x3+)E1_|fh.TCtzEHK5dV22_9G38mKh$cb]1O2ySn3&f~pC6~Yw5KM.@(zs' );
define( 'NONCE_KEY',        '~u3H93~2swOYohHS,8S_i.xVl]W8fuKPg[!  -9{4/wJHSR@Yw!7-}~pb58$~DYS' );
define( 'AUTH_SALT',        '~_dCe`NIx%7klT>?2EZ${PPvu3S<BUD!ISEYW!hrto@@ariKyO[$l!-ohS&wAi3/' );
define( 'SECURE_AUTH_SALT', 'wYkogVQ0owmZ+(Ymzu^7zX$!!Cg{<dKtXS[v{&#z~Rr5Q.d{HU6f:+%g?:.&V6 ]' );
define( 'LOGGED_IN_SALT',   '%NMtn(:Lkyuw~!H<9O>>fJUad6t&.Po|zu;Kay4,&xSmUs2Bnx7<0Z=w~W{JuijM' );
define( 'NONCE_SALT',       'Yca(l*e+W?cVKf:L4TWFCYuX;=6IDt?Xr3K[OIZ7KtvGD,+xyC5oD2Zua_d[0zy-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
