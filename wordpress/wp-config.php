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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_yVBRz9V<bJSK},A5ivO9(%9Vu1]t/I 3fV9h:v4wnN^Bgh3oC&u>:Wnj28ObZen' );
define( 'SECURE_AUTH_KEY',  'qhw<;!kP0#5=y_E{)Z+Uy3eM[A|,@;x?ZzM<TsA,q70*Yz{+>6&aM;nIQvsT1w>}' );
define( 'LOGGED_IN_KEY',    'v&Pn:g.z<a#QVPr!uvU7u10<IHVBGPJHY{I!U7ZXJrq^&zqH<VvKUb-NTipC^[[m' );
define( 'NONCE_KEY',        '1=4eL`#!Sl69HCCA44P[;)F? tgT=3=,[ZQW8B^%C:GQdL{d&Q0C/VCl&I0U{&e>' );
define( 'AUTH_SALT',        '}0iewWZra#h0KhuC1]@wK5G7oBRLao$4)-I=pkloK;##88>srx&}wBuRoj<dypjK' );
define( 'SECURE_AUTH_SALT', '[%axDtwhPDChRmMp1).XiwT?/X-!98/&UM*v4TcGd8q0B@3e7Wy !R`gSYXP#x,D' );
define( 'LOGGED_IN_SALT',   '@KT-,i9je)y]XX9)K <V8A&6p)id8kEoIN2y1N59cKHi)eriY?lOfAX_t{&2 OQ3' );
define( 'NONCE_SALT',       '8]sp/J2W9f_Z9KbqGbZ%N=DE/#u+O7Ey>>WB7goO8wtLQJ|E1L+nuiCq5;#Za^i9' );

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
