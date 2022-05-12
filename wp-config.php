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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'educlick' );

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
define( 'AUTH_KEY',         'ceSi?92AkFJ^@q=A$+4[7r3U!(u,n4dv;)J6Toq(eC;p*JpM4&5lI1!~{P#+,f:Y' );
define( 'SECURE_AUTH_KEY',  'teg!hB9g=WwacpR!,N`(~++c!*)zzoq`jNC T?2c|?{hHn3EFI<)1u,x=WLs)^qJ' );
define( 'LOGGED_IN_KEY',    'uY9O{G5I0WXt%-AUl1@/:M<l)u6TL0,(?8cv!gm~x3l3$+:KPY e^7 U!!iilD|L' );
define( 'NONCE_KEY',        '+bCo?*:!zoa<2`o~$sf}XeBold3S>u#?GDBz*)x]Ro$2(BP[|n;LPJ!!xCiQ*+5W' );
define( 'AUTH_SALT',        '+/!}s;] @^86AVOYJ_t~!n.Ga18Lx_p) jnKEk=]`[N|,S@XY}(>W!TQ+Bg|J-/.' );
define( 'SECURE_AUTH_SALT', 'BVViLxec3hIGw^VM0G)| jxyj[ ./uH] 5!hj>)}au:]y-kl!IiQlXAs_fjc.9_B' );
define( 'LOGGED_IN_SALT',   'n&%13[D*U Rd8;1WH24w|qP~vh{ XBp$]y51NYxJH?#}g45CbxUhwnbg*)R{=v5y' );
define( 'NONCE_SALT',       'kLa33(Tb(pI|!z7n !D<.^XxZ:YO.rQG4IvPNNIat7Kqd^ipIXzWN*WNWJ0T&y/|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'educlick_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
