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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gaminghouse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1S[6<hD`5+,g@t= &c_]1&C@AgF `MKq:7j`?>>C2&/qu9XGj{ei|1[29+zTo3]x' );
define( 'SECURE_AUTH_KEY',  'whq:6(|0.!u,3L/2K+Twtn*_f%d|5HjgBhpyHwS5x#izNf}F6}I6;4P4eQu2W$[7' );
define( 'LOGGED_IN_KEY',    '#{6mPE4d|;:$_0NL2>)?w`Z!v0S||]{(pY[*MLJbDXXb=4;Tz#1:d-6|V/Xu{85=' );
define( 'NONCE_KEY',        'yTV!7G,Z[<ThJOx37pB&k@o3_A,w([ongiaUY.-0gVdhpQ=eg$B^rsR5(nC=oH%:' );
define( 'AUTH_SALT',        'hV9SPqILS2B/J,I&c::Lr0su[<UDgI:*D^~3z_#~T|9_?X4e6tq!B@jd8TZ[eg$L' );
define( 'SECURE_AUTH_SALT', 'G(F(bDM5q`p/cRI[c9e;^%/%Y4KRW0(%U$-XOEkT1K#jcOXy@#aOO#8NSS55dbDQ' );
define( 'LOGGED_IN_SALT',   'kasY>R[~e[D@ydv].V-SB^oy02kaDd@3WPup(1>o{IShI`hNP(RY:SNUeGbe*3(F' );
define( 'NONCE_SALT',       '9w7wAwY8+!4mLO]&2SOZ+.Eq[~JqV{lenaWZ+%h=w,Z/oiZ[8)4P&0>nQ<W,*/=h' );

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
