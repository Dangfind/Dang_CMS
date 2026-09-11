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
define( 'DB_NAME', 'dang_cms' );

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
define( 'AUTH_KEY',         '#di 5c[zCe~&AmdRIc{:ep,vC:`;I!-0F VCZuK`6K<qk<Jblxr.db:pMp2Wa1v8' );
define( 'SECURE_AUTH_KEY',  ';A}icw#NmXGUL00:U9pO|jQy+ Jb4L+ t@E6jw2UBLVPN7U_r7 EjC|VH!bQuMLm' );
define( 'LOGGED_IN_KEY',    's,$$ubS20ME~pyhG1!aG4h6>VZs)$[E~<4@~@.or}d8ar,3{U:.w~d`VR>31@A_+' );
define( 'NONCE_KEY',        'OX9=Pv#=0Nm$q+r;KeBsOY03rPAPq/<=B(yV&e4je0+IZ#_B%G#g{`XE[O9Y1w0o' );
define( 'AUTH_SALT',        '>j7pJNvPK^hhjBwd}$m;5mFni~5!S:;+G|ysRHz:naH%%,Uu3^~YNdz|%wd[|QB-' );
define( 'SECURE_AUTH_SALT', 'Qxc_hp njmR^R@elo-kxCX{O./)yBGVcvZ23=,:QQy*cTU6Ye?=bDX^H)+&<R {8' );
define( 'LOGGED_IN_SALT',   'E|DBz[7:@m+dXXtI[u%~!t&N`.j?<}nVwH2{=xD2&GeHh!K[aWu#?8PV0V7rb,0j' );
define( 'NONCE_SALT',       ';X+vw<%(Iq{-L.f^`d6aivSFW:!kdw _:`0>l)-C>(Ewa0DL>DaFp}.HS4Ln2T}T' );

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
