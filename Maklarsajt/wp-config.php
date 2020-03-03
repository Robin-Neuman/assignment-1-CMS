<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grupp_maklar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oW0uVWWH/*HTb6<Q[4&%=Eh7xI`oi.irX._tSI[^57?/aBg_!~nAp@(wEi>UB%h-' );
define( 'SECURE_AUTH_KEY',  'teM B:hF+<;`Y;MlqK{=uGedY_H6Vj~d%i)Qn:-@jK+E<=GiprcE_Zh3%?}sw,Pp' );
define( 'LOGGED_IN_KEY',    'V;tzm]:Q[_$x=xBt0.}l=0wa;<nnj WA|3~=J- 8xW8,(U%JI:zz_Zd:8BJobkbN' );
define( 'NONCE_KEY',        '$[X_]Np:Y (W~SV_A6T>r_-9q)*PTvhGU#FXb`26TjS([4w6:xX`yj%-,% s/[je' );
define( 'AUTH_SALT',        'iL3`w0l^[e>uq7i{^_Fnn(4n%g{u*xB.M<~/0]g@vyzShhcBjA[j[S ){WL5x )Z' );
define( 'SECURE_AUTH_SALT', 'B!_e9+8(m=4Mjfuda`}J;]/HT3V9g;ZZ8M6W4Hsj*Y>G6cn]x~u|Ow<JxYHyo`iE' );
define( 'LOGGED_IN_SALT',   '0/Zl9mP->@CFSR w?VlMiQ.`::;u%VZK:D<3u2ZH%;G#tTheB}2#I8nT!9oNY`dB' );
define( 'NONCE_SALT',       'e*-L7ea36g.omQ*9[7=W HEg!VN-fP)_L4{=RYO,l$GQ[[mgB^7,S2i135u.O]I?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
