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
define( 'DB_NAME', 'newwp' );

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
define( 'AUTH_KEY',         'jI_?7]s^,2hU&()G8<Cn]75SZu8_rtlar/o$Lxm)54o_/iH4Us*Eq.*&}VF5[!N+' );
define( 'SECURE_AUTH_KEY',  'diZYOpKN0I*6#SkIpVUQd;^PTZQ()9{`_A-?=M+Ywo5;JUt ST,_$rGaAu~[#Bx9' );
define( 'LOGGED_IN_KEY',    '@w?^b)T)GksV71V*]7ahF`jyAY~zzI%?P, J![Gpo=-hHQ!FrdP~3jT]qH+liT(*' );
define( 'NONCE_KEY',        '&|$#g+zM4MD=`d}lB%nxGXbDEn1.S[H>bTvhgyyQc32Y;sE7blcl`l:uXQ#{vj,T' );
define( 'AUTH_SALT',        '|nh`3C!e5*bfqj?2G~sZh:l6}`Iz*}!(/QtAkc+R](*v&Ci-c]y7Vr$CE D&c@8p' );
define( 'SECURE_AUTH_SALT', '7Gm?X_v1j1i@6ALMWZT=AH!|6R$=q50i7pQZf0S:SJS.h94_3yThS[210%!.NiqY' );
define( 'LOGGED_IN_SALT',   'a`g;t46ab_zrKd2nSMn@A&rBQ[nfeY,mzVu[r{{{)o(qT]j}wHK/h.FBYt>oOY~5' );
define( 'NONCE_SALT',       'RJ8W#.;q?xzW4e10CiJ-Nd?vI!n*mF/@gJ]g22Ru;C[NMlin3(ej (em--S#g/#;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
