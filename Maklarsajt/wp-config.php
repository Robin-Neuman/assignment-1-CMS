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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bbkkll123' );

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
define( 'AUTH_KEY',         'v-lL<j[&E}{W^%/>LFE[:(Jy3D88R[g>B)6G)uad#GoL> DC(P~V96Yb}]oY0Vc/' );
define( 'SECURE_AUTH_KEY',  '~HyUU=Cuz7s(]S%</}]g**S=;|PQFyM-AA}XUdvCPZ7;[/(mHfvWUp&ZTn54Hosp' );
define( 'LOGGED_IN_KEY',    ':LPpoo` |42*l#G5cd2v&/Q2{cQt;AoRxhQ= [F&EZUafrL8u5i-_aA58m<.)q4:' );
define( 'NONCE_KEY',        'MF[!Lwj{%_+r9h(~QRNw>:M|+E8u$30,KA<D;^EK@Px_Su}oCN{BBsP&`wG-ug#/' );
define( 'AUTH_SALT',        'j^/wo+I[arw]@?`2CfYB,GnuplNeAZD2Zfe[@|qePEg)/g]tNb.X;oJ9Jz|mL:]>' );
define( 'SECURE_AUTH_SALT', '0 =>){?/>dCYza=)4G~pQis~d(jZ^|<E,zvT+_5|t=#Z%<(E+1Wm_?,MSGF 1Y}~' );
define( 'LOGGED_IN_SALT',   'oRg)Nrt.L!7(woBS7-ke.x?meV,voP0]&oFs7Y`MyRqD[lG^.7&c_mvd0|xVW[Ai' );
define( 'NONCE_SALT',       'pd;`m6JD*C1+fIxs67-x]2z&5^(}&PMsi+YjynE%Y=07=;Z~XY)tQj%.z}OJQ[Jr' );

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
