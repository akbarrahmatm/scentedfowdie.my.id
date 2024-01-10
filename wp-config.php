<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'akbarra1_scentedfowdie' );

/** Database username */
define( 'DB_USER', 'akbarra1_admin' );

/** Database password */
define( 'DB_PASSWORD', 'GuG=hE1Y4vUd' );

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
define( 'AUTH_KEY',         'J!Mhv`ECIJ~AN 9*Q<K_y}3w6k4rBiy^*vJ3m$-soUGzT!tmrh6?[1#0GA1jGDS0' );
define( 'SECURE_AUTH_KEY',  '#X0JeVGe<PNPnnU4 P}u1y#:PH`5v:paMSq?HL2/L*X;qR337;P0_JZ1Wb<A~98L' );
define( 'LOGGED_IN_KEY',    '}q&nccp};jstcHJ_-qNO].8B!$-k./dE/}M$KkJ<q{UP+D@~JF,uJ</|q? 5X,8F' );
define( 'NONCE_KEY',        '57?gEBy:/-n<eINGTZ6P+viP97X3N&ff*+&-a$a6{(,Gj/NPVK4AQS,,Bl5|fia^' );
define( 'AUTH_SALT',        '/|`^O@?oojb(5RVngnjMN/w,jGW+tiT)hK0Cu(>I]a7%H22*}rOjiyOAlkZD)zDw' );
define( 'SECURE_AUTH_SALT', 'K&SF.`Ep{bm8/wWu=~3bf;EwW>ssdlDdf{nuWC/Vk},>dqwLHzijFg)Kaec-kX0m' );
define( 'LOGGED_IN_SALT',   'hsYW]OQ_Y_c~v?y+E0Ma<.7zbeZ&tFcE%VO-S]BOTpLpOcR{Ygdieq-Gs.4N:;z~' );
define( 'NONCE_SALT',       'R%(GP@:~oR,>U3c0C<s[R7GFgo06ssc`%O_5~->U)GI1FvRBNM2JIo^i2~;)ja}p' );

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
