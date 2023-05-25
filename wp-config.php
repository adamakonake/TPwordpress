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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kouloubav2' );

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
define( 'AUTH_KEY',         '9q)w:0OesjY~#0tSEnl{*Fe@_~RPZ?ZcMjW}p1~ZK{v<cJeP*T9%U9=>aKRyWxf*' );
define( 'SECURE_AUTH_KEY',  '$@R1=}|EyK$z`(&s<j>C$<>|mZ/0,#]0Z4|kMgks}E9J!_]Jy!w$bir+Y:3>sX<t' );
define( 'LOGGED_IN_KEY',    '<qSv{=Q3K0DE-B}8hy){C+%kr68}yy0>j|{uB@WJ@YNM:X*hP5VWE4rcHn&cN?=j' );
define( 'NONCE_KEY',        '+LJ5d?)F+DfGwpve&s7}Jh7=h!8Zrvoy4 ??8`~^.QzXi/[+(BnP:aN)mgQ:oqdJ' );
define( 'AUTH_SALT',        '_zS9>r:g;ySx}=P]aJ=Vj(x8[x<gZR<iSB>[qj);ya&ilwe`>y`4O+(AQ8=ZL,|Y' );
define( 'SECURE_AUTH_SALT', '*}p!gw9$@&s[WHIy(*Lb%(,w:i)^ixql)n9Nx>s7U5kx{t|x.RQ3xTVO]Bw1:X=x' );
define( 'LOGGED_IN_SALT',   'm,?HsQ+xE*J:r/@joL@!|hv?^$:?ZK,lNGNl9F4e*Zh/MV>$ln>hVnR{l`k9_B.K' );
define( 'NONCE_SALT',       'z9C:xiii$qK6WQ^[Q+9w6[~=SGn<*iw;%r}Ks;=sb`v;MqH}0|qoqFetVf:8IMGm' );

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
