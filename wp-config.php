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
define( 'DB_NAME', 'profsandipchatterjee' );

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
define( 'AUTH_KEY',         'PT5#sMrL.5@c93z.RL~V.Me>:he*.tNic<s )h=V2)^u=}?RcHC@ccp&R?,$dI.:' );
define( 'SECURE_AUTH_KEY',  'nHjKVH:h3|{GqFGNa`>.E&ocgt*kq%e,0lj3fZCOSa+-~Cxh%QV6Q,+wz,%lqmhN' );
define( 'LOGGED_IN_KEY',    'EkleQTMmVLP 6cc*mA+g0(::5`.fGKN~u;=^nEN^)%[R1?^NC)J[;=BXf5bPV|I%' );
define( 'NONCE_KEY',        '?BA0{Bq`JZgA?X1XR9=5WDI6D#Lc1_bVKfan!4oN{|ypRHcW/G5hfmzw|z9.y119' );
define( 'AUTH_SALT',        ' /+_q<UZ(&7AFfOGG-eMyL%20/c*W>*P95(KIBUmF0K*vz*j~Y$//+5Jk{Z~4z1K' );
define( 'SECURE_AUTH_SALT', '8_!dWPa.{0J;uCYHb%ai]y51J?R>J[;+9ESb=,@5fR=kqN`l~m!7yT#?cF6]9BIn' );
define( 'LOGGED_IN_SALT',   'Y L.#3y0IW{@|*;Q}jSV6;I(yV=~ke|X5jn~fD+bqgrIo=Gl-(8dw~hJ-#_]Wr>V' );
define( 'NONCE_SALT',       '=_2Jxk.:z>7oC4/?Oc5?: 3~Bz6LB.}kY~E`*lS.&KkNbyUqkFF~TO!<-zolo,=A' );

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
