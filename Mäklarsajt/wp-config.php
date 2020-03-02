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
define( 'AUTH_KEY',         'd,Eph%:xCjwYN-,%]{!kcOO3vx;!}|~~~aU~qQoO`m>ZbAc*DN2z$c<<*=&-Tp?K' );
define( 'SECURE_AUTH_KEY',  'kgz9xMh1%_,1Z3IYx!x>Q:KMhAwm3Ou}g@4_aEVK%qN~,cNYQYR%rAyAv,1.*jUX' );
define( 'LOGGED_IN_KEY',    ')*ewNrsda8-t;HpLVBxbc,,;>^v>M_?M(z{,It{+ #HB<f9DaEffk?ZP)]?<aqz(' );
define( 'NONCE_KEY',        '{f#WAo/3G!O82gQXr&hMNx!3+KIkzj>^g<aP^t29tY6SUw]r7>hM4@YRtr]3h+Hj' );
define( 'AUTH_SALT',        'b<TKG|DzS35{y!*t))<V_=e`(<` }V>`Ra167ZwXD$ugTRAiuq~s / -# y~^SRH' );
define( 'SECURE_AUTH_SALT', 'Pfj~hMkFrLLLKsal78P3z`7HYVd(D;bg]+<[QW$Z0CXtI~M6qP*cSSd-Fb6D1b.)' );
define( 'LOGGED_IN_SALT',   'LA/!CK);d:,p7N}p`FWe^=;-s^v>j;`T=F#6Z|2Dq90Vx7ezjDX!b/<DVX`S!y%C' );
define( 'NONCE_SALT',       'Ie76~sBb|(A/h>>/nAuAZzIaIxtmB55nt)r5^:1~R7M<hU)?=NBC[:>8*lw>iz;9' );

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
